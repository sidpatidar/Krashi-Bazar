<?php  
session_start();
include 'connect.php';
if(isset($_SESSION["id"])){
    $user=$_SESSION["user"];
     $uid=$_SESSION["id"];
     if(isset($_POST['delete']))
{
    $pid = $conn->real_escape_string($_POST['pid']);
    $sql = "DELETE FROM post WHERE pid='$pid'";
    if (mysqli_query($conn, $sql) ) 
    {
	   echo"data deleted";
       header("Location: http://localhost/manndi/dashboard.php");
    }
    else 
    {
        echo"not deleted";
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	    
    }

}
}
?>