<!--Contact Page-->


<?php

require_once "./phpmailer/PHPMailerAutoLoad.php";


if (isset($_POST['first_name'], $_POST['last_name'], $_POST['subject'],$_POST['email'], $_POST['message'])  ){
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $from = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

 $mail = new PHPMailer();
 $mail->setFrom('contact@issadeveloper.ga', 'Contact Issa Developer');
 $mail->addReplyTo($from, "$first_name $last_name");
 $mail->Subject   = $subject;
 $mail->Body = $message;

 $mail->AddAddress( 'isissa01@gmail.com' );

 if($mail->Send()){
   echo $output_message = '<p class="alert alert-success">Message Sent Successfully.<span class="close" data-dismiss="alert">&times;</span></p>';

 }
 else{
   echo $output_message = '<p class="alert alert-danger">Message was unable to be sent try again later.<span class="close" data-dismiss="alert">&times;</span></p>' . $mail->ErrorInfo;



 }
}

?>
