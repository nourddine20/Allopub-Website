<!DOCTYPE html>
<html>
<head>
<title>Devis Form </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<style type="text/css">

:root {
    --primary: #F2C71C;
    --secondary: #26232D;
    --light: #F6F7FC;
    --dark: #15233C;
}


body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
img { -ms-interpolation-mode: bicubic; }

img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
table { border-collapse: collapse !important; }
body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }


a[x-apple-data-detectors] {
    color: inherit !important;
    text-decoration: none !important;
    font-size: inherit !important;
    font-family: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
}

@media screen and (max-width: 480px) {
    .mobile-hide {
        display: none !important;
    }
    .mobile-center {
        text-align: center !important;
    }
}
div[style*="margin: 16px 0;"] { margin: 0 !important; }
</style>
</head>
<body style="margin: 0 !important; padding: 0 !important; background-color: #eeeeee;" bgcolor="#eeeeee">

<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td align="center" style="background-color: #eeeeee;" bgcolor="#eeeeee">
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
            <tr>
                <td align="center" style="font-size:0; padding: 35px;" bgcolor="#F2C71C">
                    <div style="display:inline-block; max-width:100%; vertical-align:top; width:100%;">
                        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                            <tr>
                                <td align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 25px; font-weight: 800; line-height: 48px; color: #ffffff;">
                                    <h1 style="margin: 0;">{{__('messages.title_contact_template')}}</h1>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="center" style="padding: 35px; background-color: #ffffff;" bgcolor="#ffffff">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                        <tr>
                            <td align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;">
                                <p><b>{{__('messages.full name')}}:</b> {{ $name }}</p>
                                <p><b>{{__('messages.gmail')}}:</b> <a href="mailto:{{ $email }}">{{ $email }}</a></p>
                                <p><b>{{__('messages.myphone')}}:</b> {{ $mobile }}</p>
                            </td>
                        </tr>
                     
                        <tr>
                            <td align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 15px;">
                                <h3 style="margin: 0; color: #F2C71C;">{{__('messages.Message')}}</h3>
                                <p>{{ $messageContent }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="padding-top: 20px;">
                                <a href="mailto:{{ $email }}" style="background-color:#F2C71C; color: #ffffff; padding: 15px 30px; text-decoration: none; border-radius: 5px; font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px;">{{__('messages.Reply_to_Sender')}}</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td align="center" style="padding: 20px; background-color: #f4f4f4;" bgcolor=" #F2C71C">
                    <p style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 20px; margin: 0; color: #777777;">
                        &copy; {{ date('Y') }} AlloPub. {{__('messages.All Rights Reserved')}}.
                    </p>
                </td>
            </tr>
        </table>
        </td>
    </tr>
</table>
</body>
</html>
