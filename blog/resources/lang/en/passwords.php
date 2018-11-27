<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Password Reset Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match reasons
    | that are given by the password broker for a password update attempt
    | has failed, such as for an invalid token or invalid new password.
    |
    */

    'password'                  => 'Password must have a minimum of 6 characters and contain at least one alphabetic character, one number.',
    'reset'                     => 'Your password has been reset!',
    'sent'                      => 'We have e-mailed your password reset link!',
    'token'                     => 'This password reset token is invalid.',
    'user'                      => "We can't find a user with that e-mail address.",
    'subject_reset_password'    => Config::get('constants.APP_NAME').'- Password Reset',
    'subject_change_password'   => Config::get('constants.APP_NAME').'- Password Changed',
    'label_change_password'     => 'Change Password',
    'label_update_password'     => 'Update Password',
    'label_current_password'    => 'Current password',
    'label_new_password'        => 'New Password',
    'label_confirm_password'    => 'Confirm password',

];
