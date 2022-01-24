<?php
$to = 'maryjane@email.com';
$subject = 'Marriage Proposal';
$from = 'peterparker@email.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
$message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>

<?php
$to = 'makingmoney497@gmail.com';
$subject = 'New EMail From Your web site:MakeMoneyCorner.com';
$name = $_POST['name'];
$email = $_POST['email'];
$message = <<<EMAIL

from $name
his email is:$email
EMAIL;

$header = '$email';

if($_POST){
   mail($to, $subject, $message, $header, $feedback)
   $feedback = 'your information has been successfully Send it';

}

if ($mail->send()){ 
 $autoemail = new PHPMailer(); 
 $autoemail->From = "makingmoney497@gmail.com"; 
 $autoemail->FromName = "makingmoneycorner.com"; 
 $autoemail->AddAddress($mail->From, $mail->FromName); 
 $autoemail->Subject = "This Is Your Book About Making Money"; 
 $autoemail->Body = "you can download here :";
 $autoemail->Send(); 
 }  

 ?>