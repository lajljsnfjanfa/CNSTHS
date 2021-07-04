<?php
//get data from form  

$email= $_POST['email'];
$firstname = $_POST['first name'];
$lastname = $_POST['last name'];
$comment= $_POST['comment'];
$to = "sophiaabigail656@gmail.com";
$subject = "Mail From website";
$txt ="Email = ". $email . "\r\n  First name = " . $firstname . "\r\n  Last name = " . $lastname . "\r\n Comment =" . $comment;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thank_you.html");
?>