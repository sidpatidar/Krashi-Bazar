<?php    
session_start();
include 'connect.php';
if(isset($_SESSION["user"])){ 
if(isset($_POST["reset"]) )
{
    $User = $_SESSION["user"];
    $pass= $conn->real_escape_string($_POST['pass']);
    $cpass= $conn->real_escape_string($_POST['cpass']);
    if(strcmp($pass,$cpass)==0)
    {
        $result1= mysqli_query($conn,"UPDATE user SET pass ='$pass' WHERE user='$User'"); 
        if($result1) 
        {
            $result2= mysqli_query($conn,"UPDATE user SET otp ='null' WHERE user='$User'");
            header("Location: http://localhost/manndi/logout.php");
        }
    }
    else{
        header("Location: http://localhost/manndi/passvalid.php");
    }

}
























 } ?>