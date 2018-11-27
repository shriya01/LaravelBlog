<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ __('frontend.site_title') }}</title>
    </head>

    <body style="margin: 0; padding: 0">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top: 20px;">
            <tbody>
                <tr>
                    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td style="padding-bottom:20px"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                        <tr>
                                            <td align="center">
                                                <table width="600" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" >
                                                    <tbody>
                                                        <tr>
                                                            <td valign="top" style="border-bottom: 1px solid #eaeaea; padding-bottom: 10px;"><img src="{{ URL::asset('public/assets/images/logo_white_2.png') }}" height="80" alt=""/></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table width="600" border="0" cellspacing="0" cellpadding="0">
                                                    <tbody>
                                                        <tr>
                                                            <td bgcolor="#ffffff" style="padding:35px 30px 25px">
                                                                <h1 style="color:#445361;font-family:'Trebuchet MS',Arial,sans-serif;font-size:20px;line-height:24px;font-weight:bold;margin:0 0 25px;Margin:0 0 25px">{{ __('messages.welcome_header')}}</h1> 

                                                                <p style="color:#445361;font-family:'Trebuchet MS',Arial,sans-serif;font-size:14px;line-height:24px;margin:0 0 25px;Margin:0 0 25px">
                                                                    {{__('messages.forgot_password_line1')}}
                                                                </p>

                                                                <p style="color:#445361;font-family:'Trebuchet MS',Arial,sans-serif;font-size:14px;line-height:24px;margin:0 0 25px;Margin:0 0 25px">
                                                                    <a href="{{$reset_url}}">Click Here</a>
                                                                </p>

                                                                <p style="color:#445361;font-family:'Trebuchet MS',Arial,sans-serif;font-size:14px;line-height:24px;margin:0 0 25px;Margin:0 0 25px">
                                                                    {{__('messages.forgot_password_line2')}}
                                                                </p>

                                                                <p style="color:#445361;font-family:'Trebuchet MS',Arial,sans-serif;font-size:14px;line-height:24px;margin:0 0 25px;Margin:0 0 25px">
                                                                    {{__('messages.thanks')}}<br>
                                                                    {{__('messages.regards_team')}}
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </td>
                            </tr>
                        </tbody>
                    </table></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
