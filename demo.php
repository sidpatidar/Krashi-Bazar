<?php  
include 'connect.php';

$sql = "INSERT INTO user (user,email,pass,first,mob,City,Address,State,Pincode,Adhar,Role) VALUES ('sid','sid@gmail.com','1234','siddharth','9617907675','neemuch','bhatkhedi','madhyapradesh','458110','546676846464656','farmer') ";
if (mysqli_query($conn, $sql) ) 
    {
   echo"successfully inserted";	   
    }
    else 
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	    
    }