<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use Auth; 
use Config;
use App\Libraries\SecurityLib;
use App\Libraries\EmailLib;
use Mail;

class UserController extends Controller
{
    public function __construct()
    {
        $this->securityLibObj = new SecurityLib;
    }

    /**
     * @DateOfCreation 			27-November-2018
     * @ShortDescription		This function display the register form for user
     * @return 		view 	
     */
    public function getRegister()
    {
        return view('register');
    }

    /**
     * @DateOfCreation 			27-November-2018
     * @ShortDescription		This function display the register form for user
     * @return 		view 	
     */
    public function postRegister(Request $request)
    {
        $rules = [ 
            "user_firstname"	=> 'required|string',
            "user_lastname"	=> 'required|string',
            "user_email"	=> 'required|string|email|unique:users',
            "user_password"	=> 'required|string|min:8|same:confirm_user_password',
            "confirm_user_password"	=> 'required|string|min:8|same:user_password',
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }
        else{
            try {    
                $requestData = [
                    'user_firstname' => $request->user_firstname,
                    'user_lastname' => $request->user_lastname,
                    'user_email' => $request->user_email,
                    'user_password' => bcrypt($request->user_password),
                ];
                $affectedRows =  User::insert($requestData); 
                if($affectedRows > 0){
                    return redirect('/')->with('message', __('messages.registration_successfull'));
                }
            }
            catch (Exception $e) {

                return redirect()->back()->withInput()->withErrors($eMessage); 
            }     
        }
    }

    /**
     * @DateOfCreation   27-November-2018
     * @ShortDescription This function displays the login form for user login
     * @return view 
     */
    public function getLogin()
    {
        $data = ['action' => url('login')];

        return view('login',$data);
    }

    /**
     * @DateOfCreation   27-November-2018
     * @ShortDescription This function handles the login form action
     * @param            Request array
     * @return view 
     */
    public function postLogin(Request $request)
    {
        $rules = array(
            'user_email'    => 'required|email|max:150',
            'user_password' => 'required'
        );
    // set validator
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()->back()->withErrors($validator->errors());
        }
        else
    // Get our login input
            $inputData = array(
                'user_email'    => strtolower($request->input('user_email')),
                'password'      => $request->input('user_password'),

            );
        if (Auth::attempt($inputData)) 
            {
                return redirect("welcome")->with(array("message"=>__('messages.login_success')));     
            }
            else
            {
                if (User::where(
                    [['user_email', '=', $inputData['user_email']]])->first())  
                {   
                    if($request->input('user') == Config::get('constants.ADMIN_ROLE')){
                        $validator->getMessageBag()->add('password', __('messages.wrong_password_admin'));
                    }else{
                        $validator->getMessageBag()->add('password', __('messages.wrong_password_member'));
                    }
                }
                else
                {
                    $validator->getMessageBag()->add('user_email',__('messages.user_not_exist'));
                }
                return redirect()->back()->withErrors($validator)->withInput();
            }
        }

    /**
     * @DateOfCreation     27-November-2018
     * @ShortDescription    This function logouts and redirect to login
     */
    public function logout()
    {
        if(Auth::check()){
            Auth::logout();
            return redirect('/');
        }
    }

    /**
     * @DateOfCreation      27-November-2018 
     * @ShortDescription    This function displays form to forgot password
     */
    public function getForgotPassword()
    {
        return view('forgotpassword');
    }

    /**
     * @DateOfCreation      27-November-2018 
     * @ShortDescription    This function displays form to forgot password
     */
    public function postForgotPassword(Request $request)
    {
        $rules = ['user_email' => 'required|email'];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }
        else
        {
            try {
                $userData = User::where([['user_email', '=', $request->input("user_email") ]])->first();                
                if($userData){
                    $affectedRows = User::where('user_id', '=', $userData->user_id)->update(['is_request_reset_password' => Config::get('constants.RESET_PASSWORD_YES')]);
                    if($affectedRows > 0){
                        $isMailSent = $this->sendEmail($userData, $userData->user_id, 'forget-password');

                        if($isMailSent){
                            if($userData->user_type == Config::get('constants.ADMIN_ROLE')){
                                return redirect('/admin')->with('message', __('passwords.sent'));
                            }else{
                                return redirect('/')->with('message', __('passwords.sent'));
                            }
                        } else{
                        }   
                    } else {
                    }
                }else{
                    return redirect()->back()->withInput()->withErrors(__('messages.try_again')); 
                }
            } catch (Exception $e) {
                $eMessage = $this->exceptionLibObj->reFormAndLogException($ex,'AdminController', 'postRegister');   
                return redirect()->back()->withInput()->withErrors($eMessage); 
            }           
        }
    }

    /**
     * @DateOfCreation         16 Oct 2018
     * @ShortDescription       Sending email to user
     * @return                 boolean
     */
    public function sendEmail($requestData, $userId = NULL, $resetType = 'registration')
    {
    // Prepare email config
        switch ($resetType) {
            case 'forget-password':
            $encryptEmailID     = $this->securityLibObj->encrypt($requestData->user_email);
            $encryptedLinkHash  = $this->securityLibObj->encrypt($userId);

            $emailConfig = [
                'viewData' => [
                    'user'              => $requestData,
                    'info_email'        => Config::get('constants.SUPPORT_EMAIL'),
                    'reset_url'         => url('/forgot-password-verification/'.$encryptEmailID.'/'.$encryptedLinkHash),
                    'app_name'          => Config::get('constants.APP_NAME'),
                    'app_url'           => Config::get('constants.APP_URL'),
                    'support_email'     => Config::get('constants.SUPPORT_EMAIL'),
                    'unsubscribe_email' => Config::get('constants.UNSUBSCRIBE_EMAIL'),
                ],
                'emailTemplate' => 'emails.forgot_password',
                'subject'       => trans('passwords.subject_reset_password')
            ];
            break;
            case 'change-password':
            $encryptEmailID     = $this->securityLibObj->encrypt($requestData->user_email);
            $encryptedLinkHash  = $this->securityLibObj->encrypt($userId);

            $emailConfig = [
                'viewData' => [
                    'user'              => $requestData,
                    'info_email'        => Config::get('constants.SUPPORT_EMAIL'),
                    'app_name'          => Config::get('constants.APP_NAME'),
                    'app_url'           => Config::get('constants.APP_URL'),
                    'support_email'     => Config::get('constants.SUPPORT_EMAIL'),
                    'unsubscribe_email' => Config::get('constants.UNSUBSCRIBE_EMAIL'),
                ],
                'emailTemplate' => 'emails.change_password',
                'subject'       => trans('passwords.subject_change_password')
            ];
            break;
            default:
            return true;
            break;
        }

    // Send verification mail         
        if( !in_array($resetType, ['user-invitation', 'new-member-invitation', 'send-reminder', 'new-admin-invitation', 'send-bulk-reminder']) ){
            Mail::to($requestData['user_email'])->send(new EmailLib($emailConfig));

            if (count(Mail::failures()) > 0) {
                return false;
            }
        }

        return true;
    }

    /**
     * @DateOfCreation         23 Oct 2018
     * @ShortDescription       Reset Password
     * @return                 View
     */
    public function resetPassword($emailId, $userId){
        $userData = ['user_email' => $emailId, 'user_id' => $userId, 'invited_email' => $emailId];
        return view('reset_password', ['data' => $userData]);
    }

    /**
     * @DateOfCreation         23 Oct 2018
     * @ShortDescription       Reset Password Action
     * @return                 View
     */
    public function postResetPassword(Request $request)
    {
        $requestData = $request->only(['user_password', 'confirm_password', 'user_id','user_email']);
        $requestData['user_id'] = $this->securityLibObj->decrypt($requestData['user_id']);

        $rules = array(
            'user_password'     => 'required|min:6',
            'confirm_password'  => 'required|same:user_password'
        );
        $messages = array(
            'user_password.regex' => __('messages.valid_password_format_msg') 
        );

    // set validator
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) 
        {

    // redirect our user back to the form with the errors from the validator
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }
        else
        {

            try {
    //final array of the data from the request
                $userData = array(
                    'user_password'     => bcrypt($request->input("user_password")),
                    'updated_at'        => date('Y-m-d H:i:s'),

                ); 
                $user_email = $this->securityLibObj->decrypt($request->input("user_email"));
                $userType = User::where([['user_email', '=', $user_email]])->first();
                $affectedRows = User::where('user_id', '=', $requestData['user_id'])->update($userData);
                if($affectedRows > 0){

                    return redirect('/')->with('message', __('messages.password_reset_successfully'));

                }else{
                    return redirect()->back()->withInput()->withErrors(__('messages.try_again')); 
                }

            } catch (Exception $e) {

                $eMessage = $this->exceptionLibObj->reFormAndLogException($ex,'AdminController', 'postResetPassword');   
                return redirect()->back()->withInput()->withErrors($eMessage); 
            }
        }   
    }

}
