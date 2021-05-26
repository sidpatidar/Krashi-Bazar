<?php  
session_start();
include 'connect.php';
if(isset($_SESSION["id"]))
{
    $user=$_SESSION["user"];
     $uid=$_SESSION["id"];
     $result = $conn->query("SELECT * FROM user where Uid='$uid'");
     if($result)
     { 
         while($info = mysqli_fetch_array($result))
          {
              $check=strcmp("Buyer",$info['Role']);
         
        }
    } 
    if($check==0){
        header("Location: http://localhost/manndi/dash-board.php");
        
      }
        else{
            header("Location: http://localhost/manndi/dashboard.php");
            
        }
    
}
?>