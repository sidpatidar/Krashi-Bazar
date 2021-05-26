<?php  
session_start();
include 'connect.php';
if(isset($_POST["rdelete"])){
    $user=$_SESSION["user"];
    $pid = $conn->real_escape_string($_POST['pid']);
    $dreq = $conn->real_escape_string($_POST['dreq']);
    echo $pid;
     $req=null;
    $result1 =mysqli_query($conn,"SELECT * FROM post where pid='$pid'");
    if($result1->num_rows > 0){while($row = $result1->fetch_assoc()){  $req=$row['req1'];
        
    }}
    if($req!=null){
    $req=explode(" ",$req);
    $omit_word=array($dreq);
    $res=array_diff($req,$omit_word);
    $res=implode(" ",$res);
    

    $result=$conn->query("UPDATE post SET req1='$res' WHERE pid='$pid'");
if($result)
{  echo "successful delete";
    header("Location: http://localhost/manndi/dashboard.php");
}
else{
   
    echo " no entry";
}
}

  }  
  else{
    echo "no entracne";
  }