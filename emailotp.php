<?php
session_start();
$_SESSION["user"]=null;
include 'connect.php';


if(isset($_POST['next']))
{
 $User = $conn->real_escape_string($_POST['user']);
 $length = 4;
  $str = '123456789';
  $resettoken = substr(str_shuffle($str), 0, $length); 
 $result= mysqli_query($conn,"UPDATE user SET otp ='$resettoken' WHERE user='$User'");
 $result1 = $conn->query("SELECT * FROM user where user='$User'");
 if($result1->num_rows > 0){while($row = $result1->fetch_assoc()){  
     $email=$row['email'];}}
     
if($result)
{   
    ini_set('smtp_port',25);
    $headers = 'From:siddharthpatidar12092000@gmail.com';
    $to =$email ;
    $subject = "Password Reset OTP";
    $message = "Hello $User";
    $message.= "Please find your Reset Password OTP Below Here
    OTP: $resettoken 
    Copy the above mentioned OTP and go back to the reset password screen 
    Thanks & Regards
    Qwick Hand";

    $res=mail($to,$subject,$message);
    if($res)
    {
        $_SESSION["user"] =  $User;
        header("Location: http://localhost/manndi/passotp.php");
    }

}



}



?>