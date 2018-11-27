<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use Auth; 

class UserController extends Controller
{
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
                //Check Email exist in the database or not
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
     * @DateOfCreatinon     27-November-2018
     * @ShortDescription    This function logouts and redirect to login
     */
    public function logout()
    {
        if(Auth::check())
        {
            Auth::logout();
            return redirect('/');
        }
    }
}
