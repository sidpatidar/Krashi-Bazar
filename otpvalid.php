<?php
include 'connect.php';

if(isset($_POST['otpsubmit']))
{
    $User = $conn->real_escape_string($_POST['user']);
    $otp = $conn->real_escape_string($_POST['otp']);
    $result1 = $conn->query("SELECT * FROM user where user='$User'");
    if($result1->num_rows > 0){while($row = $result1->fetch_assoc()){  
        $cotp=$row['otp'];}}
        if(strcmp($otp,$cotp)==0&&$cotp!=0)
        {
}
else{
    header("Location: http://localhost/manndi/passotp.html");
}
}
else{
    header("Location: http://localhost/manndi/reset.html");
}
?>     
        
