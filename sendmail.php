<?php
$to_email = "receipient@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Order placed successfuly";
$headers = "From: neljinsanthosh158@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
}
else{
    echo "Email sending failed...";
}
?>