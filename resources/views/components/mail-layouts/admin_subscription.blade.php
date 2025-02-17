<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no, date=no, address=no, email=no">
    <title>THANK YOU</title>
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700"
        rel="stylesheet" media="screen">
    <style>
        .hover-underline:hover {
            text-decoration: underline !important;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes ping {

            75%,
            100% {
                transform: scale(2);
                opacity: 0;
            }
        }

        @keyframes pulse {
            50% {
                opacity: .5;
            }
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(-25%);
                animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
            }

            50% {
                transform: none;
                animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
            }
        }

        @media (max-width: 600px) {
            .sm-leading-32 {
                line-height: 32px !important;
            }

            .sm-px-24 {
                padding-left: 24px !important;
                padding-right: 24px !important;
            }

            .sm-py-32 {
                padding-top: 32px !important;
                padding-bottom: 32px !important;
            }

            .sm-w-full {
                width: 100% !important;
            }
        }

        /*td {*/
        /*    width: 63%;*/
        /*}*/

        .ques {
            font-weight: bold;
        }
    </style>
</head>

<body style="margin: 0; padding: 0; width: 100%; background-color: #eceff1;">
<div role="article" aria-roledescription="email" aria-label="Default email title" lang="en">
    <table style="font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif; width: 100%;" width="100%"
           cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td align="center" style="background-color: #eceff1; font-family: Montserrat, sans-serif;">
                <table class="sm-w-full" style="font-family: 'Montserrat',Arial,sans-serif; width: 800px;"
                       cellpadding="0"
                       cellspacing="0" role="presentation">
                    <tr>
                        <td class="sm-py-32 sm-px-24"
                            style="font-family: Montserrat,sans-serif; padding: 48px; text-align: center;"
                            align="center">
                            <a href="https://8020eatery.com">
                                <img src="https://8020eatery.com/assets/images/templatelogo.png" width="150" alt="80/20 Eatery"
                                     style=" border: 0; max-width: 100%; line-height: 100%; vertical-align: middle;">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" class="sm-px-24" style="font-family: 'Montserrat',Arial,sans-serif;">
                            <table style="font-family: 'Montserrat',Arial,sans-serif; width: 100%;" width="100%"
                                   cellpadding="0"
                                   cellspacing="0" role="presentation">
                                <tr>
                                    <td class="sm-px-24"
                                        style="background-color: #ffffff; border-radius: 4px; font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif; font-size: 14px; line-height: 24px; padding: 48px; text-align: left; color: black;">
                                        <h1 style="font-family: 'DM Sans',serif;font-weight: bold; margin-top: 0; color: #ff5850; text-align: center;padding-bottom: 20px;">
                                            80/20 CEO Subscription Form
                                        </h1>
                                        <table style="text-align: left;width: 100%;border-collapse: collapse; display: grid;">
                                            <tr style="display: grid;">
                                                <td style="border-top: 1px solid black; border-right: 1px solid black; border-left: 1px solid black;padding: 5px;">
                                                    <span style="font-family: 'DM Sans',serif;font-weight: bold; color: black; font-size: 20px;">
                                                        Full Name
                                                    </span>
                                                </td>
                                                <td style="padding: 5px;font-size: 16px; color: black; font-weight: 400;border-top: 1px solid black; border-right: 1px solid black; border-left: 1px solid black;">
                                                    <span>
                                                        {{@$data['name']}}
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr style="display: grid;">
                                                <td style="border-top: 1px solid black; border-right: 1px solid black; border-left: 1px solid black;padding: 5px;">
                                                    <span style="font-family: 'DM Sans',serif;font-weight: bold; color: black; font-size: 20px;">
                                                        Email Address
                                                    </span>
                                                </td>
                                                <td style="padding: 5px;font-size: 16px; color: black; font-weight: 400;border-top: 1px solid black; border-right: 1px solid black; border-left: 1px solid black;">
                                                    <span>
                                                        {{@$data['email']}}
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr style="display: grid;">
                                                <td style="border-top: 1px solid black; border-right: 1px solid black; border-left: 1px solid black;padding: 5px;">
                                                    <span style="font-family: 'DM Sans',serif;font-weight: bold; color: black; font-size: 20px;">
                                                        Phone Number
                                                    </span>
                                                </td>
                                                <td style="padding: 5px;font-size: 16px; color: black; font-weight: 400;border-top: 1px solid black; border-right: 1px solid black; border-left: 1px solid black;border-bottom: 1px solid black;">
                                                    <span>
                                                        {{@$data['phone']}}
                                                    </span>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-family: 'Montserrat',Arial,sans-serif; height: 16px;"
                                        height="16"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
</body>

</html>
