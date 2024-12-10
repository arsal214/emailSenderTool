<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('templates')->insert([
            [
                'name' => 'WelcomeEmail',
                'subject' => 'Welcome Email From Tapday',
                'body' => <<<HTML
                                  <table style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <table style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; border-top: 1px solid #d8d8d8; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" border="0" width="91%" cellspacing="0" cellpadding="0" align="center">
                                    <tbody>
                                    <tr style="vertical-align: top;">
                                    <td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; font-size: 0px; line-height: 0px; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">&nbsp;</td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_heading_1" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 0px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; line-height: 110%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 36px; font-weight: bold;"><span style="line-height: 40.7px;">Welcome to Tapday</span></h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_heading_2" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; color: #969595; line-height: 110%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 16px; font-weight: 400;"><span style="line-height: 19.8px;">Getting started with Tapday is super easy.</span></h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_text_6" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 100px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <div class="v-text-align v-line-height v-font-size" style="font-family: 'Montserrat',sans-serif; font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">Hi {\$user_name}, Thank you for choosing&nbsp;<strong>Tapday</strong>.&nbsp;</span></p>
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">Today marks the inception of an exciting new chapter in your Mobile Commerce Journey!</span></p>
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">Now, all that's left is to kickstart your app's design phase. Don't worry, you don't require any design or coding skills!<br></span></p>
                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_image_2" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 0px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <table style="width: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-text-align" style="padding-right: 0px; padding-left: 0px; width: 100%;" align="center"><img style="outline: none; text-decoration: none; clear: both; border: none; height: 217px; float: none; width: 289px; max-width: 300px; display: inline-block !important;" title="image" src="https://tapday.s3.ap-south-1.amazonaws.com/upload/media/GT6s14yunBsOLa4bP5JqZEo4GbjE7MgHZTsdjYnu.png" alt="image" width="300" align="middle" border="0"></td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <div class="u-row-container" style="padding: 0px; background-color: #f7f7f7;">
                                    <div class="u-row" style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                                    <div style="border-collapse: collapse; display: table; width: 100%; height: 100%; background-color: transparent;">
                                    <div class="u-col u-col-100" style="max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;">
                                    <div style="background-color: #ffffff; height: 100%; width: 100% !important; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                    <div style="box-sizing: border-box; height: 100%; padding: 0px; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border: 0px solid transparent;">
                                    <table id="u_content_heading_3" style="font-family: arial, helvetica, sans-serif; height: 28px;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 28px;">
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 30px 10px 0px 50px; font-family: arial, helvetica, sans-serif; height: 28px;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; line-height: 140%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 20px; font-weight: bold;">Need Help?</h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_text_1" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 100px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <div class="v-text-align v-line-height v-font-size" style="font-family: 'Montserrat',sans-serif; font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;">Accelerate the app design process with a one-on-one meeting with your dedicated manager.</p>
                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <!-- [if mso]></div><![endif]-->
                                    <p>&nbsp;</p>
                                    <!-- [if IE]></div><![endif]--></div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                  </table>
                HTML
            ],
            [
                'name' => 'OTPEmail',
                'subject' => 'OTP Email From Tapday',
                'body' => <<<HTML
                                  <table style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <table style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; border-top: 1px solid #d8d8d8; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" border="0" width="91%" cellspacing="0" cellpadding="0" align="center">
                                    <tbody>
                                    <tr style="vertical-align: top;">
                                    <td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; font-size: 0px; line-height: 0px; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">&nbsp;</td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_heading_1" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 0px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; line-height: 110%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 36px; font-weight: bold;"><span style="line-height: 40.7px;">Verify Your Account</span></h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_heading_2" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; color: #969595; line-height: 110%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 16px; font-weight: 400;"><span style="line-height: 19.8px;">Your One-Time Password (OTP) for account verification is:</span></h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_text_6" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 100px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <div class="v-text-align v-line-height v-font-size" style="font-family: 'Montserrat',sans-serif; font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;"> {\$otp}</p>
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">Please do not share this OTP with anyone. It is only valid for 15 minutes.!</span></p>

                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_image_2" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 0px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <table style="width: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-text-align" style="padding-right: 0px; padding-left: 0px; width: 100%;" align="center"><img style="outline: none; text-decoration: none; clear: both; border: none; height: 217px; float: none; width: 289px; max-width: 300px; display: inline-block !important;" title="image" src="https://tapday.s3.ap-south-1.amazonaws.com/upload/media/GT6s14yunBsOLa4bP5JqZEo4GbjE7MgHZTsdjYnu.png" alt="image" width="300" align="middle" border="0"></td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <div class="u-row-container" style="padding: 0px; background-color: #f7f7f7;">
                                    <div class="u-row" style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                                    <div style="border-collapse: collapse; display: table; width: 100%; height: 100%; background-color: transparent;">
                                    <div class="u-col u-col-100" style="max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;">
                                    <div style="background-color: #ffffff; height: 100%; width: 100% !important; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                    <div style="box-sizing: border-box; height: 100%; padding: 0px; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border: 0px solid transparent;">
                                    <table id="u_content_heading_3" style="font-family: arial, helvetica, sans-serif; height: 28px;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 28px;">
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 30px 10px 0px 50px; font-family: arial, helvetica, sans-serif; height: 28px;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; line-height: 140%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 20px; font-weight: bold;">Need Help?</h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_text_1" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 100px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <div class="v-text-align v-line-height v-font-size" style="font-family: 'Montserrat',sans-serif; font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;">Accelerate the app design process with a one-on-one meeting with your dedicated manager.</p>
                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <!-- [if mso]></div><![endif]-->
                                    <p>&nbsp;</p>
                                    <!-- [if IE]></div><![endif]--></div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                  </table>
              HTML
            ],
            [
                'name' => 'PasswordChangeEmail',
                'subject' => 'Password Change Email From Tapday',
                'body' => <<<HTML


                                  <table style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <table style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; border-top: 1px solid #d8d8d8; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" border="0" width="91%" cellspacing="0" cellpadding="0" align="center">
                                    <tbody>
                                    <tr style="vertical-align: top;">
                                    <td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; font-size: 0px; line-height: 0px; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">&nbsp;</td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_heading_1" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 0px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; line-height: 110%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 36px; font-weight: bold;"><span style="line-height: 40.7px;">Trial Started</span></h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_heading_2" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; color: #969595; line-height: 110%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 16px; font-weight: 400;"><span style="line-height: 19.8px;">Getting started with Tapday is super easy.</span></h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_text_6" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 100px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <div class="v-text-align v-line-height v-font-size" style="font-family: 'Montserrat',sans-serif; font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">Hi {\$user_name}, Thank you for choosing&nbsp;<strong>Tapday</strong>.&nbsp;</span></p>
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">Your trial starts to our {\$plan} on {\$start_date} and ends on {\$end_date}. Enjoy your trial period of {\$trial} days. </span></p>
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">Now, all that's left is to kickstart your app's design phase. Don't worry, you don't require any design or coding skills!<br></span></p>
                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_image_2" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 0px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <table style="width: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-text-align" style="padding-right: 0px; padding-left: 0px; width: 100%;" align="center"><img style="outline: none; text-decoration: none; clear: both; border: none; height: 217px; float: none; width: 289px; max-width: 300px; display: inline-block !important;" title="image" src="https://tapday.s3.ap-south-1.amazonaws.com/upload/media/GT6s14yunBsOLa4bP5JqZEo4GbjE7MgHZTsdjYnu.png" alt="image" width="300" align="middle" border="0"></td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <div class="u-row-container" style="padding: 0px; background-color: #f7f7f7;">
                                    <div class="u-row" style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                                    <div style="border-collapse: collapse; display: table; width: 100%; height: 100%; background-color: transparent;">
                                    <div class="u-col u-col-100" style="max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;">
                                    <div style="background-color: #ffffff; height: 100%; width: 100% !important; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                    <div style="box-sizing: border-box; height: 100%; padding: 0px; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border: 0px solid transparent;">
                                    <table id="u_content_heading_3" style="font-family: arial, helvetica, sans-serif; height: 28px;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 28px;">
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 30px 10px 0px 50px; font-family: arial, helvetica, sans-serif; height: 28px;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; line-height: 140%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 20px; font-weight: bold;">Need Help?</h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_text_1" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 100px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <div class="v-text-align v-line-height v-font-size" style="font-family: 'Montserrat',sans-serif; font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;">Accelerate the app design process with a one-on-one meeting with your dedicated manager.</p>
                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <!-- [if mso]></div><![endif]-->
                                    <p>&nbsp;</p>
                                    <!-- [if IE]></div><![endif]--></div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                  </table>
                  HTML
            ],
            [
                'name' => 'TrialReminderEmail',
                'subject' => 'Trial Reminder Email From Tapday',
                'body' => <<<HTML

                                  <table style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <table style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; border-top: 1px solid #d8d8d8; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" border="0" width="91%" cellspacing="0" cellpadding="0" align="center">
                                    <tbody>
                                    <tr style="vertical-align: top;">
                                    <td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; font-size: 0px; line-height: 0px; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">&nbsp;</td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_heading_1" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 0px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; line-height: 110%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 36px; font-weight: bold;"><span style="line-height: 40.7px;">Trial Reminder</span></h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_heading_2" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; color: #969595; line-height: 110%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 16px; font-weight: 400;"><span style="line-height: 19.8px;">Getting started with Tapday is super easy.</span></h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_text_6" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 100px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <div class="v-text-align v-line-height v-font-size" style="font-family: 'Montserrat',sans-serif; font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">Hi {\$user_name}, Thank you for choosing&nbsp;<strong>Tapday</strong>.&nbsp;</span></p>
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">We hope this message finds you well. We want to remind you that your trial to {\$plan} is set to expire on {\$expire_date}. </span></p>
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">Now, all that's left is to kickstart your app's design phase. Don't worry, you don't require any design or coding skills!<br></span></p>
                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_image_2" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 0px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <table style="width: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-text-align" style="padding-right: 0px; padding-left: 0px; width: 100%;" align="center"><img style="outline: none; text-decoration: none; clear: both; border: none; height: 217px; float: none; width: 289px; max-width: 300px; display: inline-block !important;" title="image" src="https://tapday.s3.ap-south-1.amazonaws.com/upload/media/GT6s14yunBsOLa4bP5JqZEo4GbjE7MgHZTsdjYnu.png" alt="image" width="300" align="middle" border="0"></td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <div class="u-row-container" style="padding: 0px; background-color: #f7f7f7;">
                                    <div class="u-row" style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                                    <div style="border-collapse: collapse; display: table; width: 100%; height: 100%; background-color: transparent;">
                                    <div class="u-col u-col-100" style="max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;">
                                    <div style="background-color: #ffffff; height: 100%; width: 100% !important; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                    <div style="box-sizing: border-box; height: 100%; padding: 0px; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border: 0px solid transparent;">
                                    <table id="u_content_heading_3" style="font-family: arial, helvetica, sans-serif; height: 28px;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 28px;">
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 30px 10px 0px 50px; font-family: arial, helvetica, sans-serif; height: 28px;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; line-height: 140%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 20px; font-weight: bold;">Need Help?</h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_text_1" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 100px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <div class="v-text-align v-line-height v-font-size" style="font-family: 'Montserrat',sans-serif; font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;">Accelerate the app design process with a one-on-one meeting with your dedicated manager.</p>
                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <!-- [if mso]></div><![endif]-->
                                    <p>&nbsp;</p>
                                    <!-- [if IE]></div><![endif]--></div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                  </table>
                    HTML
            ],
            [
                'name' => 'TrialExpireEmail',
                'subject' => 'Trial Expire Email From Tapday',
                'body' => <<<HTML

                                  <table style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <table style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; border-top: 1px solid #d8d8d8; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" border="0" width="91%" cellspacing="0" cellpadding="0" align="center">
                                    <tbody>
                                    <tr style="vertical-align: top;">
                                    <td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; font-size: 0px; line-height: 0px; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">&nbsp;</td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_heading_1" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 0px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; line-height: 110%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 36px; font-weight: bold;"><span style="line-height: 40.7px;">Trial Expired</span></h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_heading_2" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; color: #969595; line-height: 110%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 16px; font-weight: 400;"><span style="line-height: 19.8px;">Getting started with Tapday is super easy.</span></h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_text_6" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 100px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <div class="v-text-align v-line-height v-font-size" style="font-family: 'Montserrat',sans-serif; font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">Hi {\$user_name}, Thank you for choosing&nbsp;<strong>Tapday</strong>.&nbsp;</span></p>
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;"> We hope this message finds you well. We regret to inform you that your trial to {\$plan} has expired as of {\$expire_date}. </span></p>
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">Now, all that's left is to kickstart your app's design phase. Don't worry, you don't require any design or coding skills!<br></span></p>
                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_image_2" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 0px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <table style="width: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-text-align" style="padding-right: 0px; padding-left: 0px; width: 100%;" align="center"><img style="outline: none; text-decoration: none; clear: both; border: none; height: 217px; float: none; width: 289px; max-width: 300px; display: inline-block !important;" title="image" src="https://tapday.s3.ap-south-1.amazonaws.com/upload/media/GT6s14yunBsOLa4bP5JqZEo4GbjE7MgHZTsdjYnu.png" alt="image" width="300" align="middle" border="0"></td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <div class="u-row-container" style="padding: 0px; background-color: #f7f7f7;">
                                    <div class="u-row" style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                                    <div style="border-collapse: collapse; display: table; width: 100%; height: 100%; background-color: transparent;">
                                    <div class="u-col u-col-100" style="max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;">
                                    <div style="background-color: #ffffff; height: 100%; width: 100% !important; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                    <div style="box-sizing: border-box; height: 100%; padding: 0px; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border: 0px solid transparent;">
                                    <table id="u_content_heading_3" style="font-family: arial, helvetica, sans-serif; height: 28px;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 28px;">
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 30px 10px 0px 50px; font-family: arial, helvetica, sans-serif; height: 28px;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; line-height: 140%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 20px; font-weight: bold;">Need Help?</h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_text_1" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 100px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <div class="v-text-align v-line-height v-font-size" style="font-family: 'Montserrat',sans-serif; font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;">Accelerate the app design process with a one-on-one meeting with your dedicated manager.</p>
                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <!-- [if mso]></div><![endif]-->
                                    <p>&nbsp;</p>
                                    <!-- [if IE]></div><![endif]--></div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                  </table>
                      HTML
            ],
            [
                'name' => 'SubscriptionConfirmedEmail',
                'subject' => 'Subscription Confirmed Email From Tapday',
                'body' => <<<HTML

                                  <table style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <table style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; border-top: 1px solid #d8d8d8; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" border="0" width="91%" cellspacing="0" cellpadding="0" align="center">
                                    <tbody>
                                    <tr style="vertical-align: top;">
                                    <td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; font-size: 0px; line-height: 0px; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">&nbsp;</td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_heading_1" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 0px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; line-height: 110%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 36px; font-weight: bold;"><span style="line-height: 40.7px;">Subscription Confirmed</span></h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_heading_2" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; color: #969595; line-height: 110%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 16px; font-weight: 400;"><span style="line-height: 19.8px;">Getting started with Tapday is super easy.</span></h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_text_6" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 100px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <div class="v-text-align v-line-height v-font-size" style="font-family: 'Montserrat',sans-serif; font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">Hi {\$user_name}, Thank you for choosing&nbsp;<strong>Tapday</strong>.&nbsp;</span></p>
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">You subscribed to our {\$plan}. Your sbscription starts on {\$start_date} and ends on {\$end_date}. Enjoy your trial period of {\$trial} days.  </span></p>
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">Now, all that's left is to kickstart your app's design phase. Don't worry, you don't require any design or coding skills!<br></span></p>
                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_image_2" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 0px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <table style="width: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-text-align" style="padding-right: 0px; padding-left: 0px; width: 100%;" align="center"><img style="outline: none; text-decoration: none; clear: both; border: none; height: 217px; float: none; width: 289px; max-width: 300px; display: inline-block !important;" title="image" src="https://tapday.s3.ap-south-1.amazonaws.com/upload/media/GT6s14yunBsOLa4bP5JqZEo4GbjE7MgHZTsdjYnu.png" alt="image" width="300" align="middle" border="0"></td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <div class="u-row-container" style="padding: 0px; background-color: #f7f7f7;">
                                    <div class="u-row" style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                                    <div style="border-collapse: collapse; display: table; width: 100%; height: 100%; background-color: transparent;">
                                    <div class="u-col u-col-100" style="max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;">
                                    <div style="background-color: #ffffff; height: 100%; width: 100% !important; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                    <div style="box-sizing: border-box; height: 100%; padding: 0px; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border: 0px solid transparent;">
                                    <table id="u_content_heading_3" style="font-family: arial, helvetica, sans-serif; height: 28px;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 28px;">
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 30px 10px 0px 50px; font-family: arial, helvetica, sans-serif; height: 28px;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; line-height: 140%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 20px; font-weight: bold;">Need Help?</h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_text_1" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 100px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <div class="v-text-align v-line-height v-font-size" style="font-family: 'Montserrat',sans-serif; font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;">Accelerate the app design process with a one-on-one meeting with your dedicated manager.</p>
                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <!-- [if mso]></div><![endif]-->
                                    <p>&nbsp;</p>
                                    <!-- [if IE]></div><![endif]--></div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                  </table>
                        HTML
            ],
            [
                'name' => 'SubscriptionReminderEmail',
                'subject' => 'Subscription Reminder Email From Tapday',
                'body' => <<<HTML

                                  <table style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <table style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; border-top: 1px solid #d8d8d8; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" border="0" width="91%" cellspacing="0" cellpadding="0" align="center">
                                    <tbody>
                                    <tr style="vertical-align: top;">
                                    <td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; font-size: 0px; line-height: 0px; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">&nbsp;</td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_heading_1" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 0px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; line-height: 110%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 36px; font-weight: bold;"><span style="line-height: 40.7px;">Subscription Reminder</span></h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_heading_2" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; color: #969595; line-height: 110%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 16px; font-weight: 400;"><span style="line-height: 19.8px;">Getting started with Tapday is super easy.</span></h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_text_6" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 100px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <div class="v-text-align v-line-height v-font-size" style="font-family: 'Montserrat',sans-serif; font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">Hi {\$user_name}, Thank you for choosing&nbsp;<strong>Tapday</strong>.&nbsp;</span></p>
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">We hope this message finds you well. We want to remind you that your subscription to {\$plan} is set to expire on {\$expire_date}.   </span></p>
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">Now, all that's left is to kickstart your app's design phase. Don't worry, you don't require any design or coding skills!<br></span></p>
                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_image_2" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 0px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <table style="width: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-text-align" style="padding-right: 0px; padding-left: 0px; width: 100%;" align="center"><img style="outline: none; text-decoration: none; clear: both; border: none; height: 217px; float: none; width: 289px; max-width: 300px; display: inline-block !important;" title="image" src="https://tapday.s3.ap-south-1.amazonaws.com/upload/media/GT6s14yunBsOLa4bP5JqZEo4GbjE7MgHZTsdjYnu.png" alt="image" width="300" align="middle" border="0"></td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <div class="u-row-container" style="padding: 0px; background-color: #f7f7f7;">
                                    <div class="u-row" style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                                    <div style="border-collapse: collapse; display: table; width: 100%; height: 100%; background-color: transparent;">
                                    <div class="u-col u-col-100" style="max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;">
                                    <div style="background-color: #ffffff; height: 100%; width: 100% !important; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                    <div style="box-sizing: border-box; height: 100%; padding: 0px; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border: 0px solid transparent;">
                                    <table id="u_content_heading_3" style="font-family: arial, helvetica, sans-serif; height: 28px;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 28px;">
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 30px 10px 0px 50px; font-family: arial, helvetica, sans-serif; height: 28px;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; line-height: 140%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 20px; font-weight: bold;">Need Help?</h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_text_1" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 100px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <div class="v-text-align v-line-height v-font-size" style="font-family: 'Montserrat',sans-serif; font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;">Accelerate the app design process with a one-on-one meeting with your dedicated manager.</p>
                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <!-- [if mso]></div><![endif]-->
                                    <p>&nbsp;</p>
                                    <!-- [if IE]></div><![endif]--></div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                  </table>
                          HTML
            ],
            [
                'name' => 'SubscriptionExpiredEmail',
                'subject' => 'Your Subscription Has Expired - Time to Renew!',
                'body' => <<<HTML
                                  <table style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <table style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; border-top: 1px solid #d8d8d8; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" border="0" width="91%" cellspacing="0" cellpadding="0" align="center">
                                    <tbody>
                                    <tr style="vertical-align: top;">
                                    <td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; font-size: 0px; line-height: 0px; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">&nbsp;</td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_heading_1" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 0px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; line-height: 110%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 36px; font-weight: bold;"><span style="line-height: 40.7px;">Subscription Expired</span></h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_heading_2" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; color: #969595; line-height: 110%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 16px; font-weight: 400;"><span style="line-height: 19.8px;">Getting started with Tapday is super easy.</span></h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_text_6" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 100px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <div class="v-text-align v-line-height v-font-size" style="font-family: 'Montserrat',sans-serif; font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">Hi {\$user_name}, Thank you for choosing&nbsp;<strong>Tapday</strong>.&nbsp;</span></p>
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">We hope this message finds you well. We regret to inform you that your subscription to {\$plan} has expired as of {\$expire_date}.     </span></p>
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">Now, all that's left is to kickstart your app's design phase. Don't worry, you don't require any design or coding skills!<br></span></p>
                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_image_2" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 0px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <table style="width: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-text-align" style="padding-right: 0px; padding-left: 0px; width: 100%;" align="center"><img style="outline: none; text-decoration: none; clear: both; border: none; height: 217px; float: none; width: 289px; max-width: 300px; display: inline-block !important;" title="image" src="https://tapday.s3.ap-south-1.amazonaws.com/upload/media/GT6s14yunBsOLa4bP5JqZEo4GbjE7MgHZTsdjYnu.png" alt="image" width="300" align="middle" border="0"></td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <div class="u-row-container" style="padding: 0px; background-color: #f7f7f7;">
                                    <div class="u-row" style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                                    <div style="border-collapse: collapse; display: table; width: 100%; height: 100%; background-color: transparent;">
                                    <div class="u-col u-col-100" style="max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;">
                                    <div style="background-color: #ffffff; height: 100%; width: 100% !important; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                    <div style="box-sizing: border-box; height: 100%; padding: 0px; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border: 0px solid transparent;">
                                    <table id="u_content_heading_3" style="font-family: arial, helvetica, sans-serif; height: 28px;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 28px;">
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 30px 10px 0px 50px; font-family: arial, helvetica, sans-serif; height: 28px;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; line-height: 140%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 20px; font-weight: bold;">Need Help?</h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_text_1" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 100px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <div class="v-text-align v-line-height v-font-size" style="font-family: 'Montserrat',sans-serif; font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;">Accelerate the app design process with a one-on-one meeting with your dedicated manager.</p>
                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <!-- [if mso]></div><![endif]-->
                                    <p>&nbsp;</p>
                                    <!-- [if IE]></div><![endif]--></div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                  </table>
                            HTML
            ],
            [
                'name' => 'SubscriptionCancelEmail',
                'subject' => 'Subscription Cancel Email From Tapday!',
                'body' => <<<HTML
                                  <table style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <table style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; border-top: 1px solid #d8d8d8; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" border="0" width="91%" cellspacing="0" cellpadding="0" align="center">
                                    <tbody>
                                    <tr style="vertical-align: top;">
                                    <td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; font-size: 0px; line-height: 0px; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">&nbsp;</td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_heading_1" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 0px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; line-height: 110%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 36px; font-weight: bold;"><span style="line-height: 40.7px;">Subscription Cancel</span></h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_heading_2" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; color: #969595; line-height: 110%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 16px; font-weight: 400;"><span style="line-height: 19.8px;">Getting started with Tapday is super easy.</span></h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_text_6" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 100px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <div class="v-text-align v-line-height v-font-size" style="font-family: 'Montserrat',sans-serif; font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">Hi {\$user_name}, Thank you for choosing&nbsp;<strong>Tapday</strong>.&nbsp;</span></p>
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">We're sorry to inform you that your subscription to our {\$plan} has been canceled as of {\$cancelled_date}.</span></p>
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">Now, all that's left is to kickstart your app's design phase. Don't worry, you don't require any design or coding skills!<br></span></p>
                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_image_2" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 0px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <table style="width: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-text-align" style="padding-right: 0px; padding-left: 0px; width: 100%;" align="center"><img style="outline: none; text-decoration: none; clear: both; border: none; height: 217px; float: none; width: 289px; max-width: 300px; display: inline-block !important;" title="image" src="https://tapday.s3.ap-south-1.amazonaws.com/upload/media/GT6s14yunBsOLa4bP5JqZEo4GbjE7MgHZTsdjYnu.png" alt="image" width="300" align="middle" border="0"></td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <div class="u-row-container" style="padding: 0px; background-color: #f7f7f7;">
                                    <div class="u-row" style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                                    <div style="border-collapse: collapse; display: table; width: 100%; height: 100%; background-color: transparent;">
                                    <div class="u-col u-col-100" style="max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;">
                                    <div style="background-color: #ffffff; height: 100%; width: 100% !important; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                    <div style="box-sizing: border-box; height: 100%; padding: 0px; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border: 0px solid transparent;">
                                    <table id="u_content_heading_3" style="font-family: arial, helvetica, sans-serif; height: 28px;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 28px;">
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 30px 10px 0px 50px; font-family: arial, helvetica, sans-serif; height: 28px;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; line-height: 140%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 20px; font-weight: bold;">Need Help?</h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_text_1" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 100px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <div class="v-text-align v-line-height v-font-size" style="font-family: 'Montserrat',sans-serif; font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;">Accelerate the app design process with a one-on-one meeting with your dedicated manager.</p>
                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <!-- [if mso]></div><![endif]-->
                                    <p>&nbsp;</p>
                                    <!-- [if IE]></div><![endif]--></div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                  </table>
                              HTML
            ],
            [
                'name' => 'NewAppInstallationEmail',
                'subject' => 'New App Installation Notification',
                'body' => <<<HTML
                                  <table style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <table style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; border-top: 1px solid #d8d8d8; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" border="0" width="91%" cellspacing="0" cellpadding="0" align="center">
                                    <tbody>
                                    <tr style="vertical-align: top;">
                                    <td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; font-size: 0px; line-height: 0px; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">&nbsp;</td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_heading_1" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 0px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; line-height: 110%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 36px; font-weight: bold;"><span style="line-height: 40.7px;">App Installation Notification</span></h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_heading_2" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; color: #969595; line-height: 110%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 16px; font-weight: 400;"><span style="line-height: 19.8px;">Getting started with Tapday is super easy.</span></h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_text_6" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 100px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <div class="v-text-align v-line-height v-font-size" style="font-family: 'Montserrat',sans-serif; font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">Hi Admin, Thank you for choosing&nbsp;<strong>Tapday</strong>.&nbsp;</span></p>
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">We are pleased to inform you that a new shop {\$shop} is installed..</span></p>

                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_image_2" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 0px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <table style="width: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-text-align" style="padding-right: 0px; padding-left: 0px; width: 100%;" align="center"><img style="outline: none; text-decoration: none; clear: both; border: none; height: 217px; float: none; width: 289px; max-width: 300px; display: inline-block !important;" title="image" src="https://tapday.s3.ap-south-1.amazonaws.com/upload/media/GT6s14yunBsOLa4bP5JqZEo4GbjE7MgHZTsdjYnu.png" alt="image" width="300" align="middle" border="0"></td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <div class="u-row-container" style="padding: 0px; background-color: #f7f7f7;">
                                    <div class="u-row" style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                                    <div style="border-collapse: collapse; display: table; width: 100%; height: 100%; background-color: transparent;">
                                    <div class="u-col u-col-100" style="max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;">
                                    <div style="background-color: #ffffff; height: 100%; width: 100% !important; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                    <div style="box-sizing: border-box; height: 100%; padding: 0px; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border: 0px solid transparent;">
                                    <table id="u_content_heading_3" style="font-family: arial, helvetica, sans-serif; height: 28px;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 28px;">
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 30px 10px 0px 50px; font-family: arial, helvetica, sans-serif; height: 28px;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; line-height: 140%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 20px; font-weight: bold;">Need Help?</h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_text_1" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 100px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <div class="v-text-align v-line-height v-font-size" style="font-family: 'Montserrat',sans-serif; font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;">Accelerate the app design process with a one-on-one meeting with your dedicated manager.</p>
                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <!-- [if mso]></div><![endif]-->
                                    <p>&nbsp;</p>
                                    <!-- [if IE]></div><![endif]--></div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                  </table>
                                HTML
            ],
            [
                'name' => 'UserRegistrationEmail',
                'subject' => 'New User Registration Notification',
                'body' => <<<HTML
                                  <table style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <table style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; border-top: 1px solid #d8d8d8; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" border="0" width="91%" cellspacing="0" cellpadding="0" align="center">
                                    <tbody>
                                    <tr style="vertical-align: top;">
                                    <td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; font-size: 0px; line-height: 0px; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">&nbsp;</td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_heading_1" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 0px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; line-height: 110%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 36px; font-weight: bold;"><span style="line-height: 40.7px;">Registration Notification</span></h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_heading_2" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; color: #969595; line-height: 110%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 16px; font-weight: 400;"><span style="line-height: 19.8px;">Getting started with Tapday is super easy.</span></h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_text_6" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 100px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <div class="v-text-align v-line-height v-font-size" style="font-family: 'Montserrat',sans-serif; font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">Hi Admin, Thank you for choosing&nbsp;<strong>Tapday</strong>.&nbsp;</span></p>
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">We are pleased to inform you that a new user {\$user_name} of email {\$user_email} has registered on our platform.</span></p>

                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_image_2" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 0px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <table style="width: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-text-align" style="padding-right: 0px; padding-left: 0px; width: 100%;" align="center"><img style="outline: none; text-decoration: none; clear: both; border: none; height: 217px; float: none; width: 289px; max-width: 300px; display: inline-block !important;" title="image" src="https://tapday.s3.ap-south-1.amazonaws.com/upload/media/GT6s14yunBsOLa4bP5JqZEo4GbjE7MgHZTsdjYnu.png" alt="image" width="300" align="middle" border="0"></td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <div class="u-row-container" style="padding: 0px; background-color: #f7f7f7;">
                                    <div class="u-row" style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                                    <div style="border-collapse: collapse; display: table; width: 100%; height: 100%; background-color: transparent;">
                                    <div class="u-col u-col-100" style="max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;">
                                    <div style="background-color: #ffffff; height: 100%; width: 100% !important; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                    <div style="box-sizing: border-box; height: 100%; padding: 0px; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border: 0px solid transparent;">
                                    <table id="u_content_heading_3" style="font-family: arial, helvetica, sans-serif; height: 28px;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 28px;">
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 30px 10px 0px 50px; font-family: arial, helvetica, sans-serif; height: 28px;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; line-height: 140%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 20px; font-weight: bold;">Need Help?</h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_text_1" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 100px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <div class="v-text-align v-line-height v-font-size" style="font-family: 'Montserrat',sans-serif; font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;">Accelerate the app design process with a one-on-one meeting with your dedicated manager.</p>
                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <!-- [if mso]></div><![endif]-->
                                    <p>&nbsp;</p>
                                    <!-- [if IE]></div><![endif]--></div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                  </table>
                                  HTML
            ],
            [
                'name' => 'SubscriptionEmail',
                'subject' => 'New Subscription Email From Tapday',
                'body' => <<<HTML
                                    <table style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <table style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; border-top: 1px solid #d8d8d8; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" border="0" width="91%" cellspacing="0" cellpadding="0" align="center">
                                    <tbody>
                                    <tr style="vertical-align: top;">
                                    <td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; font-size: 0px; line-height: 0px; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">&nbsp;</td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_heading_1" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 0px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; line-height: 110%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 36px; font-weight: bold;"><span style="line-height: 40.7px;">Subscription Notification</span></h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_heading_2" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; color: #969595; line-height: 110%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 16px; font-weight: 400;"><span style="line-height: 19.8px;">Getting started with Tapday is super easy.</span></h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_text_6" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 100px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <div class="v-text-align v-line-height v-font-size" style="font-family: 'Montserrat',sans-serif; font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">Hi Admin, Thank you for choosing&nbsp;<strong>Tapday</strong>.&nbsp;</span></p>
                                    <p style="line-height: 140%;"><span style="line-height: 19.6px;">We are pleased to inform you that a new user {\$user_name} of email {\$user_email} has subscribed against {\$plan} on our platform from to {\$start_date} to {\$end_date}.</span></p>
                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_image_2" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 0px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <table style="width: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-text-align" style="padding-right: 0px; padding-left: 0px; width: 100%;" align="center"><img style="outline: none; text-decoration: none; clear: both; border: none; height: 217px; float: none; width: 289px; max-width: 300px; display: inline-block !important;" title="image" src="https://tapday.s3.ap-south-1.amazonaws.com/upload/media/GT6s14yunBsOLa4bP5JqZEo4GbjE7MgHZTsdjYnu.png" alt="image" width="300" align="middle" border="0"></td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <div class="u-row-container" style="padding: 0px; background-color: #f7f7f7;">
                                    <div class="u-row" style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                                    <div style="border-collapse: collapse; display: table; width: 100%; height: 100%; background-color: transparent;">
                                    <div class="u-col u-col-100" style="max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;">
                                    <div style="background-color: #ffffff; height: 100%; width: 100% !important; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                    <div style="box-sizing: border-box; height: 100%; padding: 0px; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border: 0px solid transparent;">
                                    <table id="u_content_heading_3" style="font-family: arial, helvetica, sans-serif; height: 28px;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 28px;">
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 30px 10px 0px 50px; font-family: arial, helvetica, sans-serif; height: 28px;" align="left">
                                    <h1 class="v-text-align v-line-height v-font-size" style="margin: 0px; line-height: 140%; text-align: left; word-wrap: break-word; font-family: 'Montserrat',sans-serif; font-size: 20px; font-weight: bold;">Need Help?</h1>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table id="u_content_text_1" style="font-family: arial,helvetica,sans-serif;" role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 100px 10px 50px; font-family: arial,helvetica,sans-serif;" align="left">
                                    <div class="v-text-align v-line-height v-font-size" style="font-family: 'Montserrat',sans-serif; font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;">Accelerate the app design process with a one-on-one meeting with your dedicated manager.</p>
                                    </div>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <!-- [if mso]></div><![endif]-->
                                    <p>&nbsp;</p>
                                    <!-- [if IE]></div><![endif]--></div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                     </table>
                 HTML
            ],
        ]);
    }
}
