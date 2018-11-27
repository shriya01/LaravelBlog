<?php

return [

    // Success Code messages
    '1001' => 'Successfully Get the file data',
    '1002' => 'File rename successfully',   
    '1003' => 'File copied successfully',
    '1004' => 'File moved successfully',
    '1005' => 'File visibility changed successfully',
    '1006' => 'Image added successfully',
    '1007' => 'Text added successfully',
    '1008' => 'Image Rotated successfully',
    '1009' => 'File Visibility get successfully',
    '1010' => 'File visibility changed successfully',
    '1011' => 'File object get successfully',
    '1012' => 'File uploaded successfully',
    '1013' => 'Object uploaded successfully',
    '1014' => 'Random string Generated Successfully',
    '1015' => 'Get Charater Count result Successfully',
    '1016' => 'Given Date is valid',
    '1017' => 'Unix Timestamp  successfully converted to date',
    '1018' => 'Date Successfully converted to Unix Timestamp',
    '1019' => 'Date format changed successfully',
    '1020' => 'Time Elapsed get successfully',
    '1021' => 'Difference in secode get successfully',
    '1022' => 'Days Added to date successfully',
    '1023' => 'Days Subsctract from date successfully',
    '1024' => 'Directory Created Successfully',
    '1025' => 'Temporary Url Generated Successfully',
    '1026' => 'Image Crop and saved successfully',
    '1027' => 'Image crroped successfully',
    '1028' => 'Data serialize successfully',
    '1029' => 'Date unserialize successfully',
    //Error Code messages
    '5001' => 'Not able get the data from file',
    '5002' => 'Not able to rename file, Please try again later',
    '5003' => 'Not able to copy file, Please try again later',
    '5004' => 'File not exist or Not have Readable permission',
    '5005' => 'Not able to moved file, Please try again later',
    '5006' => 'Thumbnail array empty',
    '5007' => 'Image Not added try again later!!',
    '5008' => 'Images array or watermark image and path are missing',
    '5009' => 'Text Not added try again later!!',
    '5010' => 'Images array or watermark text is missing',
    '5011' => 'Image Not Rotated try again later!!',
    '5012' => 'Images array are missing',
    '5013' => 'File not uploaded try again later',
    '5014' => 'Object not uploaded try again later',
    '5015' => 'Data to export sheet is empty',
    '5016' => 'Headers for export sheet is empty',
    '5017' => 'Download file name can not be empty',
    '5018' => 'Download Type can not be empty',
    '5019' => 'Header and data does not match to each other',
    '5020' => 'Timestamp and format can not be empty',
    '5021' => 'Date or format is not correct',
    '5022' => 'Startdate or format is not correct',
    '5023' => 'Date , Current Timezone, New Timezone can not be empty or invalid',
    '5024' => 'Text and Search Charater Can not be empty',
    '5025' => 'Given Date is invalid',
    '5026' => 'Enddate or format is not correct',
    '5027' => 'Directory is not have permission to write the file',
    '5028' => 'Not able to crop image try again!!',
    '5029' => 'Array is not valid for serialize',
    '5030' => 'Only string can be unserialize',
    '5031' => 'String return null value, Please try again with proper string',
    '5032' => 'Invalid String',
    '5033' => 'Validation failed.',
    // Exception Code messages
    '3001' => 'Unknown Error, Please try again later.',
    '3002' => 'File upload path is missing.',

    /*
    |--------------------------------------------------------------------------
    | Pagination Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the paginator library to build
    | the simple pagination links. You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */
    // Menu
    'dashboard'                     => 'Dashboard',
    'profile_page'                  => 'Your Profile',
    'presentation'                  => 'Presentation(s)',
    'members'                       => 'Members',
    'new_member'                    => 'Add New Member',
    'contact_administrator'         => 'Contact Administrator',
    'export_csv'                    => 'Export CSV',
    'gantt_chart'                   => 'Gantt chart',
    'invite_admin'                  => 'Invite Admin',
    'deadlines'                     => 'Deadlines',
    'update_feeds'                  => 'Updates feed',
    'change_password'               => 'Change password',
    'logout'                        => 'Logout',
    'button_close'                  => 'Close',
   
    // LABELS
    'title_cloc'                    => 'CLOC Institute Portal',
    'title_login'                   => 'Login',
    'title_admin'                   => 'Admin',
    'remember_me'                   => 'Remember Me',
    'register'                      => 'Register',
    'reset_password'                => 'Reset Password',
    'login'                         => 'Log In',
    'forgot_your_password'          => 'Forgot Your Password?',
    'create_an_account'             => 'Create An Account',
    'already_have_an_account'       => 'Already Have Account?',
    'email_address'                 => 'Email Address',
    'password'                      => 'Password',
    'confirm_password'              => 'Confirm Password',
    'reset_password'                => 'Reset Password',
    'enter_valid_email'             => 'Please enter a valid email id',
    'send_mail'                     => 'Send Mail',
    'email'                         => 'Email',

    'registration_successfull'      => 'Member registered successfully',
    'admin_registration_successfull'=> 'Admin registered successfully',
    'password_reset_successfully'   => 'Password reset successfully',
    'valid_password_format_msg'     => 'Password must have a minimum of 6 characters and contain at least one alphabetic character, one number.',
    'user_not_exist'                => 'This email is not registered in the system.',
    'login_enter_valid_details'     => 'Please enter the valid details.',
    'try_again'                     => 'Email address not exist',
    'please_try_again'              => 'Please try again',
    'member_welcome_email_subject'  => 'Welcome to '.Config::get('constants.APP_NAME'),

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'wrong_password_admin'  => 'Invalid Email address/Password for Admin login',
    'wrong_password_member' => 'Invalid Email address/Password for Speaker login',
    'account_not_exist'     => 'User with this email address not exist in application',

    /*
    |--------------------------------------------------------------------------
    | Sessions Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */
    
    'label_details'             => 'Details ',
    'label_notes'               => 'Notes',
    'label_last_updated_by'     => 'Update By',
    'label_last_updated_date'   => 'Updated',
    'label_options'             => 'Options',
    'speaker_mobile_validation' => 'Speaker Mobile should be numeric',
    'profile_updated_success'   => 'Profile updated successfully',
    'terms_condition'           => 'Terms and Condition',
    
    // Member profile page variable
    'user_firstname'            => 'First Name',
    'user_lastname'             => 'Last Name',
    'speaker_code'              => 'Speaker Code',
    'job_title'                 => 'Job Title',
    'user_mobile'               => 'Cell',
    'user_email'                => 'User Email',
    'prefix'                    => 'Prefix',
    'title'                     => 'Title',
    'role'                      => 'Role',
    'designation'               => 'Designation',
    'user_role'                 => 'User Role',
    'register_for_cloc_conf'    => 'Are you registered for the CLOC Conference?',
    'category'                  => 'Category',
    'display_on_website'        => 'Display on Website',
    'company_name'              => 'Company',
    'sponser_name'              => 'Sponser Name',
    'speaker_facebook_url'      => 'Facebook Url',
    'speaker_linkedin_url'      => 'Linkedin Url',
    'speaker_twitter_url'       => 'Twitter Url',
    'is_licensed_attorney_in_good_standing'     => 'Are you a licensed attorney in good standing?',
    'state'                     => 'What State(s)?',
    'speaker_internal_note'     => 'Internal Notes',
    'speaker_biography'         => 'Biography',
    'notice'                    => 'All information can we revised within your profile. Final speaker information will end up on the CLOC Institute event page.',
    'only_speaker'              => 'Only needed if you are speaker.',
    'select_option'             => 'Select Option',
    'yes'                       => 'Yes',
    'no'                        => 'No',
    'upload'                    => 'Upload',
    'replace'                   => 'Replace File',
    'update_profile'            => 'Save Info',
    'replace_file'              => 'Replace File',
    'send_reminder'             => 'Send Reminder',
    'add_member_to_session'     => 'Add Member to Session',
    'edit_member'               => 'Edit',
    'view_team'                 => 'View Team',
    'team'                      => 'Team',
    'add_new_members'           => 'Add New Members',
    'add_new_admin'             => 'Add New Admin',
    'admin_list'                => 'Admin List',
    'button_send'               => 'Send',
    'label_invite_users'        => 'Invite Users (separate each by comma)',
    'label_invite_admins'       => 'Invite Admins (separate each by comma)',
    'new_member_invitation'     => Config::get('constants.APP_NAME').': Speaker Invitation',
    'members_added_successfully'   => 'Members Added Successfully',
    'no_records_found'          => 'No Records Found',
    'member_name'               => 'Name',
    'member_designation'        => 'Job Title',
    'member_company'            => 'Company',
    'profile_updated_successfully' => 'Profile image updated successfully',
    'profile_update_failed'        => 'Profile image updation failed',
    'in_hourse_speaker'         => 'In-House Speaker',
    'sponsor_speaker'           => 'Sponsor Speaker',
    'other'                     => 'Others',
    'completed_profile'         => 'Completed Profile',
    'edit_profile'              => 'Edit Profile',
    'label_select_session'      => 'Select Session',
    'label_reminder_content'    => 'Email Content',
    'label_reminder_to'         => 'Send reminder to',
    'presentation_sending_reminder_to' => 'Send reminder to all members of the session',
    'label_action'              => 'Action',

    'document_upload_successfully' => 'Document uploaded successfully',
    'document_upload_failed'       => 'Document uploaded failed',
    'member_presentations_fetched_successfully' => 'Member presentation list fetched successfully',
    'sending_invitation_to'        => 'You are sending invitation to',
    'sending_reminder_to'         => 'You are sending reminder to',
    'send_reminder_placeholder'   => 'Type your message here',
    'select_presentation'          => 'Select Presentation',
    'member_presentation_relation_created_successfully' => 'Member successfully added to selected session',

    //Export Csv page
    'export_sessions'           => 'Export Sessions',
    'export_speakers'           => 'Export Speakers',
    'passwordValidationMessage' => "Password must have a minimum of 6 characters and contain at least one lower case and one upper case alphabetic character, one number and one special character",
    'export_success'            => 'File successfully exported and uploaded to drive',
    'export_success_session'    => 'Session sheet updated successfully on drive',
    'export_success_speaker'    => 'Speaker sheet updated successfully on drive',

    'password_changed_successfully' => 'Your password has been changed successfully',
    'current_password_incorrect'    => 'The current password entered is incorrect',
    
    'regards'                       => 'Regards,',
    'thanks'                        => 'Thanks!,',
    'best'                          => 'Best,',
    'regards_name'                  => 'Jeff Franke',
    'regards_leadership_team'       => 'CLOC Leadership Team',
    'regards_team'                  => '-CLOC',
    'welcome_header'                => 'Dear SB Admin User,',
    'welcome_header_admin_invitation'=> 'Dear CLOC Admin,',
    'email_title'                   => 'Welcome to',

    // New member email
    'new_member_line1'              => 'Congratulations! Your CLOC Institute Session Portal account has been created.
                                    The Institute Session Portal is CLOC’s platform for managing session/presentation-related matters such as session titles and descriptions, 
                                    speaker biographies and pictures, slide decks, session status and action items, etc.',
    'new_member_line2'              => 'The Session Portal is for speakers and others who have a role in creating or delivering a session at a CLOC event.',
    'new_member_line3'              => 'The Institute Session Portal is still being built, so some features may not be there yet, but they will be soon!', 
    'new_member_line4'              => 'To gain access to the Institute Session Portal, you need to create a password by clicking on the link below.Once you’ve set your pwd, you can login by using your email address and the password you create.',
    'new_member_line5'              => 'Thanks!  And welcome to the CLOC Institute Session Portal.  We look fwd to working with you on your Session!',
    
    // Existing member email
    
    'existing_member_line1'         => 'Thank you for setting your password.',
    'existing_member_line2'         => 'You can now begin working on your Session with CLOC, including submitting and updating your session’s title and description, listing speakers and speaker-related information, uploading slide decks and other session materials, etc. You can do so by logging in with the email and password you provided.',
    'existing_member_line3'         => 'Thanks! And welcome back to the CLOC Institute Portal.',
    
    // Forgot password email 
    'forgot_password_line1'         => 'To reset your password for your account, simply click on the button to set a new password:',
    'forgot_password_line2'         => 'Didn’t reset your password? Email moderator@cloc.org for questions or concerns.',
    
    // Change password email
    'change_password_line1'         => 'Your password has been changed successfully',
    
    // Register Member    
    'register_member_line1'         => 'Thank you for registering for the CLOC Institute.',
    'register_memner_line2'         => 'We look fwd to working with you on your session!',
    'delete_button'                 => 'Delete',
    'member_deleted_successfully'   => 'The speaker has been deleted successfully',

    // Admin 
    'admin_invitation'              => Config::get('constants.APP_NAME').': Admin Invitation',
    'new_admin_line1'               => 'Congratulations! Your CLOC Institute Admin account has been created. ',
    'new_admin_line2'               => 'Thanks! And welcome to the CLOC Institute Session Portal. We look fwd to working with you as admin on CLOC Institute Session Portal.',
    'admin_invitation_success'      => 'Admin invitation sent successfully',
    'admin_already_exist'           => ' :emails :is_are already exist in :portal_presentation.',
    'selected_presentation'         => 'Selected Presentation',
    'valid_email_required'          => 'Valid email required!',
    'mobileValidationMessage'       => 'Invalid Mobile Number',


    // Events

    'events'                        => 'Events',
    'add_new_event'                 => 'Add New Event',
    'reminder_sent_successfully'    => 'Reminder email sent successfully',
    'subject_send_reminder'         => 'Session Reminder',
    'subject_send_bulk_reminder'    => Config::get('constants.APP_NAME').': Reminder for completing profile',
    'bulk_reminder_no_profile_found'=> 'There is no any incomplete profile found on '.Config::get('constants.APP_NAME'),
    'edit_event'                    => 'Edit Event',
    'label_event_name'              => 'Event Name',
    'button_save'                   => 'Save',
    'button_edit'                   => 'Edit',
    'button_delete'                 => 'Delete',
    'event_added_successfully'      => 'Event added successfully',
    'event_updated_successfully'    => 'Event updated successfully',
    'event_deleted_successfully'    => 'Event deleted successfully',
    'iterations_session_number'     => 'Session #',
    'iterations_presentation_title' => 'Presentation Title',
    'iterations_updated'            => 'Update At',
    'iterations_presentation_description' => 'Presentation Description',
    'subject_send_reminder_presentation'  => 'Reminder for completing presentation',
    'sending_bulk_reminder_to'      => 'You are sending reminder to all team member(s), who have not completed their profile.',
    'back_to_login'                 => 'Back to login',
];
