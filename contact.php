<?php
require 'vendor/autoload.php';
$mail = new PHPMailer\PHPMailer\PHPMailer();

$company_name = "";
$contact_person = "";
$email = "";
$message = "";
$mobile = "";



if(isset($_POST['Company']))    
  $company_name=$_POST['Company'];
  
if(isset($_POST['ContactPerson']))    
  $contact_person=$_POST['ContactPerson'];
  
if(isset($_POST['email']))    
  $email=$_POST['email'];

if(isset($_POST['message']))    
  $message=$_POST['message'];

if(isset($_POST['MobileNumber']))
    $mobile = $_POST['MobileNumber'];

$body = "<!DOCTYPE html>
        <html>
        <head>
        <title>Duralabel</title>
        </head>
        <body>
        <table width='70%'  border='0' align='center' cellpadding='0' cellspacing='0' >
           
            <tr>
                <td valign='top'>
                    <table width='100%'  border='0' cellspacing='0' cellpadding='0'>
                        <tr>
                            <TD align='center'>
                                <a href='https://duralabel.net/'> <img src='https://duralabel.net/images/logo.png' border='0'> </A>
                            </TD>
                           </tr>
                        <tr>
                            <td>
                                <table width='80%' border='0' align='center'>
                                    <tr>
                                        <td style='font-size:12px; font-family: arial; color: #000000;' >
        Dear Team,
        
                         <p>We have received enquiry from a customer. Please take a look at the below detail and contact them soon.</p>                  
                         
        				 <p style='font-weight:bold;'>Company Name : $company_name</p>
        				 <p style='font-weight:bold;'>Mobile Number : $mobile</p>
        				 <p style='font-weight:bold;'>Email : $email</p>
        				 <p style='font-weight:bold;'>Conact Person : $contact_person</p>
        				 <p style='font-weight:bold;'>Message : $message</p>
        			
                      <p>Thanks & Regards,<br/>
                     Duralabel Team<br/>
                         <a href='https://duralabel.net/'>Duralabel</a></p>
        
                                        </td>
                                    </tr>
                                </table>
                            </td>
                           </tr>
                    </table>
                </td>
            </tr>
        </table>
        </body>
        </html>";



$mail->isSMTP();
$mail->Host = 'mail.aimteksoftwares.com';
$mail->SMTPAuth = true;
$mail->Username = 'kinjal.suthar@aimteksoftwares.com';
$mail->Password = 'kinjalsuthar@123';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('kinjal.suthar@aimteksoftwares.com', 'Kinjal');
$mail->addAddress('sales@duralabel.net', 'Duralabel');
$mail->Subject = 'Inquiry Form';
$mail->isHTML(true);
$mail->Body = $body;

if ($mail->send()) {
    echo "Thank you for contacting us. Our team will get in touch with you shortly.";
} else {
    echo 'Error sending email: ' . $mail->ErrorInfo;
}
?>