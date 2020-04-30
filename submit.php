<?php

$to = 'omkater@gmail.com';

$subject = 'Website Change Request';

$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";

$message = '<html><body>';
#$message .= '<img src="//css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "</table>";
$message .= '<strong>Message:</strong> ' .strip_tags($_POST(['message']));
$message .= "</body></html>";

$retval = mail ($to,$subject,$message,$headers);
         
if( $retval == true ) {
    echo "Message sent successfully...";
} else {
    echo "Message could not be sent...";
}

?>