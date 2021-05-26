<?php  
session_start();
include 'connect.php';

$message="";
if(isset($_POST['signin']))
{
    $User = $conn->real_escape_string($_POST['user']);
    $pass = $conn->real_escape_string($_POST['pass']);
	$result = mysqli_query($conn,"SELECT * FROM user WHERE user='$User'");
	
    if($result)
    {
        $row  = mysqli_fetch_array($result);
        if(strcmp($row['pass'],$pass)==0) 
        {
	        echo "user is found";
            $_SESSION["id"] = $row["Uid"];
            $_SESSION["user"] =  $_POST["user"];
           
            if(isset($_SESSION["id"]))
            {
	            echo "id is found";
	            echo session_id();
                header("Location: http://localhost/manndi/redirect.php");
            }
        } 
        else
        {
            $message = "Invalid Username or Password!";
            echo  "user not found";
        }
    }	
    else
    {
	echo "not user";
    }
}

?>

