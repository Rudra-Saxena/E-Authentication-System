<?php
include('conndb.php');
session_start();
if(isset($_POST['submit']))
{
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$_SESSION['Email']=$Email;

$query="select * from registration where Email='$Email' and Password='$Password'";
$res=mysqli_query($conn,$query);

if(mysqli_num_rows($res)>0)
{
$from = "rudrasaxena99@gmail.com"; 
$to_email = $Email; 
$subject = "OTP"; 
$otp=rand(11111,99999);
$_SESSION['otp']=$otp;
$body = "This is your OTP $otp"; 
$headers = "From: $from"; 
 if (mail($to_email, $subject, $body, $headers)) {
      header('location:sendotp.html'); 
  } 
  else {    
   echo "Email sending failed..."; 
 }
}
else{
	echo "wrong Credentials";
}
}
 ?>
