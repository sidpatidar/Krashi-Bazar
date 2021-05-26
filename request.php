<?php  
session_start();
include 'connect.php';
if(isset($_POST["request"])){
    $user=$_SESSION["user"];
    $pid = $conn->real_escape_string($_POST['pid']);
    
    $result1 =mysqli_query($conn,"SELECT * FROM post where pid='$pid'");
    if($result1->num_rows > 0){while($row = $result1->fetch_assoc()){  $req=$row['req1'];
        $req=$req." ".$user;
    }}
    echo $req;
    
    
    $result=$conn->query("UPDATE post SET req1='$req' WHERE pid='$pid'");
if($result)
{
    header("Location: http://localhost/manndi/marketplace.php");
}
else{
   
    echo " no entry";
}


  }  
  else{
    echo "no entracne";
}?>