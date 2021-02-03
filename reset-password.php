<?php
require_once './vendor/autoload.php';
 

if(isset($_SERVER["HTTP_ORIGIN"]))
{
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
}
else
{
    
    header("Access-Control-Allow-Origin: *");
}

header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 600");    

if($_SERVER["REQUEST_METHOD"] == "OPTIONS")
{
    if (isset($_SERVER["HTTP_ACCESS_CONTROL_REQUEST_METHOD"]))
        header("Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT"); 

    if (isset($_SERVER["HTTP_ACCESS_CONTROL_REQUEST_HEADERS"]))
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

    exit(0);
}


try {

  $transport = (new Swift_SmtpTransport('mail.sightgroupsa.co.za', 465,'SSL'))
        ->setUsername('sightgroupsaco')
        ->setPassword('Ramsen@12');
 
    $mailer = new Swift_Mailer($transport);
 
  	$postdata = file_get_contents("php://input");
	  $request = json_decode($postdata);

    $to_email = $request->email;


    $message = new Swift_Message();
 

    $message->setSubject('Reset Password');
 

    $message->setFrom(['ramsemmanuel@gmail.com' => 'Latelier Competition']);
 
   
    //$message->addTo('dkmunwana@gmail.com','Emmanuel Ramanyimi');
    $message->addTo($to_email);


   
    $message->setBody("This is the plain text body of the message.\nThanks,\nAdmin");
 
    $message->addPart('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml"
    xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office">
    <head>
    <!--[if gte mso 9]><xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
    </xml><![endif]-->
    <title>It’s time for a change – and an upgrade.</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0 " />
    <meta name="format-detection" content="telephone=no"/>
    <style type="text/css">
    body { margin: 0 auto; padding: 0; -webkit-text-size-adjust: 100% !important; -ms-text-size-adjust: 100% !important; -webkit-font-smoothing: antialiased !important; }
    img { border: 0 !important; outline: none !important; }
    p { Margin: 0px !important; Padding: 0px !important; }
    table { border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px; }
    td, a, span { border-collapse: collapse; mso-line-height-rule: exactly; }
    .ExternalClass * { line-height: 100%; }
    .eu_gray a { text-decoration: none; color: #58595b; }
    .eu_white a { text-decoration: none; color: #ffffff; }
    .eu_gray1 a { text-decoration: none; color: #eea3ad; }
    .eu_color1 a { color: #2d2323; text-decoration: none; }
    .eu_color5 a { color: #58595b; text-decoration: none; }
    .eu_color6 a { color: #be0028; text-decoration: none; }
    .eu_color7 a { color: #2d2323; text-decoration: none; }
    .eu_color8 a { color: #fcfafb; text-decoration: none; }
    .eu_color9 a { color: #960528; text-decoration: none; }
    .eu_color10 a { color: #ff780f; text-decoration: none; }
     @media only screen and (max-width : 784px ){
    .eu_main_table { width: 481px !important; }
    .eu_wrapper { width: 100% !important; }
    .eu_hide { display: none !important; }
    .eu_side10 { width: 10px !important; }
    .eu_aside10 { padding: 0px 10px !important; } /* Padding Left Right Bottom */
    .eu_h20 { height: 20px !important; font-size: 0px!important; line-height: 0px!important; }
    .eu_mob_block { display: block !important; }
    .eu_hauto { height: auto !important; }
    .eu_pad1 { padding: 20px 10px !important; }
    .eu_pbottom { padding-bottom: 20px !important; }
    .eu_ptop0 { padding-top: 0px !important; }
    .eu_padlrtb { padding: 20px 10px 20px 10px !important; }
    .eu_wrapper1 { clear: both !important; float: left !important; width: 100% !important; }
    .eu_logo_w { width: 100px !important; height: auto !important; }
    }
    @media screen and (max-width: 480px) {
    .eu_main_table { width: 376px !important; }
    .eu_wrapper { width: 100% !important; }
    .eu_hide { display: none !important; }
    .eu_side10 { width: 10px !important; }
    .eu_aside10 { padding: 0px 10px !important; } /* Padding Left Right Bottom */
    .eu_h20 { height: 20px !important; font-size: 1px!important; line-height: 1px!important; }
    .eu_mob_block { display: block !important; }
    .eu_hauto { height: auto !important; }
    .eu_pad1 { padding: 20px 10px !important; }
    u + .eu_body .eu_full_wrap { width: 100% !important; width: 100vw !important; }
    .eu_h20 { height: 20px !important; font-size: 0px!important; line-height: 0px!important; }
    .eu_f25 { font-size: 22px !important; line-height: 24px !important; }
    .eu_pbottom { padding-bottom: 20px !important; }
    .eu_ptop0 { padding-top: 0px !important; }
    .eu_font18 { font-size: 18px !important; }
    .eu_padlrtb { padding: 20px 10px 20px 10px !important; }
    .eu_wrapper1 { clear: both !important; float: left !important; width: 100% !important; }
    .eu_logo_w { width: 80px !important; height: auto !important; }
    }
    @media screen and (max-width: 375px) {
    .eu_main_table { width: 320px !important; }
    .eu_wrapper { width: 100% !important; }
    .eu_hide { display: none !important; }
    .eu_side10 { width: 10px !important; }
    .eu_aside10 { padding: 0px 10px !important; } /* Padding Left Right Bottom */
    .eu_h20 { height: 20px !important; font-size: 1px!important; line-height: 1px!important; }
    .eu_mob_block { display: block !important; }
    .eu_hauto { height: auto !important; }
    .eu_pad1 { padding: 20px 10px !important; }
    u + .eu_body .eu_full_wrap { width: 100% !important; width: 100vw !important; }
    .eu_h20 { height: 20px !important; font-size: 0px!important; line-height: 0px!important; }
    .eu_f25 { font-size: 20px !important; line-height: 25px !important; }
    .eu_pbottom { padding-bottom: 20px !important; }
    .eu_ptop0 { padding-top: 0px !important; }
    .eu_font18 { font-size: 18px !important; }
    .eu_padlrtb { padding: 20px 10px 20px 10px !important; }
    .eu_wrapper1 { clear: both !important; float: left !important; width: 100% !important; }
    .eu_logo_w { width: 80px !important; height: auto !important; }
    }
    </style>
    </head>
    
    <body class="eu_body" style="margin:0px auto; padding:0px;" bgcolor="#ffffff">
    <!-- == Header Section == -->
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="eu_full_wrap" style="table-layout:fixed;">
      <tr>
        <td align="center" valign="top"><table align="center" width="650" border="0" cellspacing="0" cellpadding="0" class="eu_main_table" style="width:650px; table-layout:fixed; background-color:#f2f2f2;">
            <tr>
              <td valign="top" align="center" style="padding:24px 30px 29px; font-size:10px; line-height:12px; font-family:Arial, sans-serif; color:#58595b;" class="eu_gray eu_pad1"><multiline style="font-size:10px; line-height:12px; font-family:Arial, sans-serif; color:#58595b;" class="eu_gray eu_pad1">If you have problems reading this email,</multiline>
                <span class="eu_mob_block" ></span>
                <webversion style="text-decoration:none; color:#dc0032;"><span style="text-decoration:none; color:#dc0032;">view it in your browser.</span></webversion></td>
            </tr>
          </table></td>
      </tr>
    </table>
    <!-- == //Header Section == --> 
    <!-- == Body Section == -->
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="eu_full_wrap" style="table-layout:fixed;">
      <tr>
        <td align="center" valign="top"><table align="center" width="650" border="0" cellspacing="0" cellpadding="0" class="eu_main_table" style="width:650px; table-layout:fixed; background-color:#bc0234;" bgcolor="#bc0234">
            <!-- Banner section -->
            <tr>
              <td valign="top" align="center" style="padding:0 30px 0px 30px;" class="eu_aside10"><table align="center" class="eu_wrapper" width="590" border="0" cellspacing="0" cellpadding="0" style="width:590px;">
                  <tr>
                    <td height="30" style="height:30px; font-size:0px; line-height:0px;" class="eu_h20">&nbsp;</td>
                  </tr>
                  <tr>
                              <td align="center" valign="top" style="background-color:#FFFFFF; padding:0 30px;" class="em_aside10"><table width="91%" border="0" cellspacing="0" cellpadding="0" align="center">
                                 <tr>
                                      <tr>
                                        <td height="44" style="height:44px;" class="em_h20">&nbsp;</td>
                                      </tr>
                                    <td align="center" valign="top"><table border="0" cellspacing="0" cellpadding="0" align="left" class="em_wrapper">
                                          <tr>
                                            <td width="120" align="center" valign="middle" class="em_clear"><a href="#" target="_blank" style="text-decoration:none;"><img editable="true" src="images/1x/logo.png" width="77" height="28" alt="absa" border="0" style="display:block; font-family:Arial, sans-serif; font-size:18px; line-height:25px; text-align:center; color:#ffffff; font-weight:bold; max-width:77px;" class="em_w90" /></a></td>
                                            <td width="200" style="width:20px;" class="em_wrapper em_clear">&nbsp;</td>
                                            
                                          </tr>
                                        </table> <table width="107" style="width:107px;" border="0" cellspacing="0" cellpadding="0" align="right" class="em_wrapper">
                                      
                                      <tr>
                                            <td width="120" align="center" valign="middle" class="em_clear"><a href="#" target="_blank" style="text-decoration:none;"><img editable="true" src="images/1x/lAtelier.png" width="186" height="65" alt="absa" border="0" style="display:block; font-family:Arial, sans-serif; font-size:18px; line-height:25px; text-align:center; color:#ffffff; font-weight:bold; max-width:186px;" class="em_w90" /></a></td>
                                            <tr>
                                    <td height="395" style="height:35px;">&nbsp;</td>
                                  </tr>
                                          </tr>
                                    </table>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td height="16" style="font-size:0px; line-height:0px; height:16px;" class="em_h20">&nbsp;</td>
                                  </tr>
                  <tr>
                                            <td width="450" align="center" valign="middle" class="em_clear"><a href="#" target="_blank" style="text-decoration:none;"><img editable="true" src="images/1x/line.png" width="450" height="1" alt="absa" border="0" style="display:block; font-family:Arial, sans-serif; font-size:18px; line-height:25px; text-align:center; color:#ffffff; font-weight:bold; max-width:450px;" class="em_w90" /></a></td>
                                            <td width="186" style="width:186px;" class="em_wrapper em_clear">&nbsp;</td>
                                            <tr>
                                    <td height="395" style="height:35px;">&nbsp;</td>
                                  </tr>
                                          </tr>
                                </table>
                              </td>
                           </tr>
                  
                  <tr>
                    <td align="center" valign="top" bgcolor="#ffffff"><table width="598" height="229" border="0" align="center" cellpadding="0" cellspacing="0" class="eu_wrapper" style="width:450px;">
                        
                        <tr>
                          <td align="center" valign="top"><table width="450" border="0" cellspacing="0" cellpadding="0" class="eu_wrapper" style="width:450px;">
                              <tr>
                                <td align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                                    <tr>
                                      <td valign="top" align="center" class="eu_wrapper1" bgcolor="#ffffff"><table width="147" border="0" cellspacing="0" cellpadding="0" align="left" class="eu_wrapper" bgcolor="#ffffff">
                                          <tr>
                                            <td align="center" valign="top" style="padding:10px 10px 10px 10px;" class="eu_padlrtb"><table width="120" style="width:120px;" border="0" cellspacing="0" cellpadding="0" class="eu_wrapper" align="left">
                                              
                                                <tr>
                                                <td height="35" style="height:35px;">&nbsp;</td>
                                                  </tr>
                                                <tr>
                                                <td height="15" style="height:15px;">&nbsp;</td>
                                                  </tr>
                                                <tr>
                                                   <tr>
                                      <td align="center" valign="middle" height="29" class="eu_pbottom eu_auto"><img editable="true" src="images/1x/gest1.png" width="29" height="110" alt="" border="0" style="display:block;" /></td>
                                    </tr>
                                                  
                                                </tr>
                                                <tr>
                                                  <td align="left" valign="top"><table align="left" class="eu_wrapper"  border="0" cellspacing="0" cellpadding="0" >
                                                      
                                                      
                                                    </table></td>
                                                </tr>
                                              </table></td>
                                          </tr>
                                        </table></td>
                                      <td align="center" valign="top" bgcolor="#ffffff" class="eu_padlrtb" style="padding:60px 0px 0px 0px;"><table width="418" height="137" border="0" align="left" cellpadding="0" cellspacing="0" class="eu_wrapper" style="width:220px;">
                                                <tr>
                                                  <td align="center" valign="middle" class="eu_white" style="font-family:Arial, sans-serif; font-size:21px; line-height:17px; color:#6f6464;font-weight:bold;">Reset your password</td>
                                                </tr>
                                                <tr>
                                                    <td height="30" style="height:30px;" class="eu_h20">&nbsp;</td>
                                                  </tr>
                                                <tr>
                                        <td align="center" valign="top"><table width="107" style="width:107px; border:1px #ffffff solid; border-radius:2px; display:block;" border="0" cellspacing="0" cellpadding="0" align="center">
                                          <tr>
                                            <td align="center" valign="top" bgcolor="#800d2b"><table width="107" style="width:107px;" border="0" cellspacing="0" cellpadding="0" align="center">
                                              <tr>
                                                <td class="em_white" height="30" align="center" valign="middle" style="font-family:Arial, sans-serif; font-size:14px; line-height:17px; color:#ffffff; font-weight:bold;"><a href="https://localhost:4200/#/password-reset/.$to_email." target="_blank" style="text-decoration:none; color:#ffffff; line-height:30px; display:block;">Reset now</a></td>
                                              </tr>
                                            </table>
                                            </td>
                                          </tr>
                                        </table>
                                        </td>
                                      </tr>
                                              </table></td>
                                        
                                      <td align="center" valign="top" class="eu_wrapper1" bgcolor="#ffffff"><table width="120" border="0" cellspacing="0" cellpadding="0" align="left" class="eu_wrapper" bgcolor="#ffffff">
                                          <tr>
                                            <td align="center" valign="top" style="padding:10px 10px 10px 14px;" class="eu_padlrtb"><table width="127" class="eu_wrapper" style="width:127px;" border="0" cellspacing="0" cellpadding="0" align="left">
                                               <tr>
                                                   <tr>
                                      <td align="center" valign="middle" height="47" class="eu_pbottom eu_auto"><img editable="true" src="images/1x/gest2.png" width="66" height="209" alt="" border="0" style="display:block;" /></td>
                                    </tr>
                                            </tr>
                                                <tr>
                                                  <td align="left" valign="top"><table align="left" class="eu_wrapper"  border="0" cellspacing="0" cellpadding="0" >
                                                     </table></td>
                                                </tr>
                                              </table></td>
                                          </tr>
                                        </table></td>
                                    </tr>
                                  </table></td>
                              </tr>
                            </table></td>
                        </tr>
                      </table></td>
                  </tr>
                      </table></td>
                  </tr>
                  
                  <tr>
                    <td valign="top" align="center"><table align="center" class="eu_wrapper" width="590" border="0" cellspacing="0" cellpadding="0" style="width:590px;" bgcolor="#ffffff">
                        <tr>
                          <td valign="top" align="center" style="padding:28px 20px 28px 30px;" class="eu_pad1"><table align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="17" align="left" valign="top" class="eu_white" style="font-family:Arial, sans-serif; font-size:14px; line-height:16px; color:#2d2323;"><multiline style="font-family:Arial, sans-serif; font-size:14px; line-height:16px; color:#2d2323; " class="eu_color1">
                                    <table align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td class="eu_color1" valign="top" align="center" style="font-size:14px; line-height:18px; font-family:Arial, sans-serif; color:#2d2323; "><multiline style="font-size:14px; line-height:18px; font-family:Arial, sans-serif; color:#2d2323; " class="eu_color1">Someone requested a password reset on this account. </multiline>
                                        <multiline style="font-size:14px; line-height:18px; font-family:Arial, sans-serif; color:#2d2323; " class="eu_color1"><br/>If it wasn’t you, you can safely ignore this email<br/> and your password will remain the same. </multiline></td>
                                      </tr>
                                    </table>
                                  </multiline></td>
                              </tr>
                            </table></td>
                        </tr>
                      </table></td>
                  </tr>
                  
                </table></td>
            </tr>
            <!-- //Banner section -->
            
          </table></td>
      </tr>
    </table>
    <!-- == //Body Section == --> 
    <!-- == Footer Section == -->
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="eu_full_wrap" style="table-layout:fixed;">
      <tr>
        <td align="center" valign="top"><table align="center" width="650" border="0" cellspacing="0" cellpadding="0" class="eu_main_table" style="width:650px; table-layout:fixed; background-color:#bc0234;" bgcolor="#bc0234">
            <tr>
              <td valign="top" align="center" style="padding:0px 30px 0px 30px;" class="eu_aside10"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#740852" style="max-width:590px; background-color:#740852;">
                  <tr>
                    <td valign="top" align="center" style="padding:31px 20px 27px 30px;" class="eu_pad1"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                        <tr>
                          <td class="eu_white" valign="top" align="left" style="font-family:Arial, sans-serif; font-size:10px; line-height:13px; color:#ffffff;"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                              <tr>
                                <td valign="top" align="left"><table  border="0" cellspacing="0" cellpadding="0" align="left">
                                    <tr>
                                      <td valign="middle" align="center"><a href="https://www.instagram.com/AbsaSouthAfrica/" target="_blank" style="text-decoration:none;"><img src="images/1x/insta.png" width="19" height="20" editable="true" alt="Fb" border="0" style="display:block; font-family:Arial, sans-serif; font-size:12px; line-height:30px; color:#ffffff; max-width:20px;" /></a></td>
                                      <td width="17" style="width:17px; font-size:0px; line-height:0px;"></td>
                                      <td valign="middle" align="center"><a href="https://www.youtube.com/absa/" target="_blank" style="text-decoration:none;"><img src="images/1x/twitter.png" width="21" height="17" editable="true" alt="In" border="0" style="display:block; font-family:Arial, sans-serif; font-size:12px; line-height:30px; color:#ffffff; max-width:27px;" /></a></td>
                                      <td width="17" style="width:17px; font-size:0px; line-height:0px;"></td>
                                      <td valign="middle" align="center"><a href="https://twitter.com/AbsaSouthAfrica" target="_blank" style="text-decoration:none;"><img src="images/1x/youtube.png" width="25" height="20" editable="true" alt="Tw" border="0" style="display:block; font-family:Arial, sans-serif; font-size:12px; line-height:30px; color:#ffffff; max-width:32px;" /></a></td>
                                    </tr>
                                  </table></td>
                              </tr>
                              <tr>
                                <td height="12" style="height:12px; font-size:1px; line-height:1px;">&nbsp;</td>
                              </tr>
                              <tr>
                                        <td  valign="top" align="left" style="font-size:14px; line-height:18px; font-family:Arial, sans-serif; color:#ffffff; "><multiline style="font-size:14px; line-height:18px; font-family:Arial, sans-serif; color:#ffffff; " ><br />
                                Monday-Friday, 08:00-16:30<br />
                                Support gallery@absa.co.za </strong> </multiline></td>
                                      </tr>
                              <tr>
                                <td height="25" style="height:25px; font-size:1px; line-height:1px;" class="eu_h20">&nbsp;</td>
                              </tr>
                              <tr>
                                <td class="eu_white" valign="top" align="left" style="font-family:Arial, sans-serif; font-size:10px; line-height:13px; color:#ffffff;"><multiline style="font-family:Arial, sans-serif; font-size:10px; line-height:12px; color:#ffffff;">Email disclaimer and company information: <a href="https://www.absa.co.za/legal-and-compliance/email-disclaimer/english/" target="_blank" style="text-decoration:underline; color:#ffffff; white-space:nowrap;">absa.co.za/disclaimer</a><br />
                                  </multiline></td>
                              </tr>
                              <tr>
                                <td align="center" valign="top" style="display:none; font-size:0px;line-height:0px; color:#960528;"><unsubscribe>unsubscribe</unsubscribe></td>
                              </tr>
                            </table></td>
                        </tr>
                      </table></td>
                  </tr>
                </table></td>
            </tr>
         </table></td>
      </tr>
    </table>
    <!-- == //Footer Section == -->
    </body>
    </html>    
    ', 'text/html');
 

    $result = $mailer->send($message);
} catch (Exception $e) {
  echo $e->getMessage();
}