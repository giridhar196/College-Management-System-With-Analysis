<?php
$e_ma = $m_a_il;
$str = strtolower($e_ma);
$to = '$str';
$subject = 'Thank You For Updating Your Details';
$from = 'giridhar196@gmail.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Hi My Dear Friend !</h1>';
$message .= '<p style="color:#080;font-size:18px;">Thanks For Supporting me in My Project </p>';
$message .= '<p style="color:#080;font-size:18px;"> Please Login </p>';
$message .= '<p style="color:#080;font-size:18px;">  <a href="http://ssmobiles.co.in/student/login.php">Click Here </a> </p>';
$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>