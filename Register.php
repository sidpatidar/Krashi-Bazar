<?php  
include 'connect.php';

if(isset($_POST['Sign']))
{

    // code to enter data of form in database
   
    $User = $conn->real_escape_string($_POST['user']);
    $fname = $conn->real_escape_string($_POST['fname']);
    $email = $conn->real_escape_string($_POST['email']);
    $fname = $conn->real_escape_string($_POST['user']);
    $mobile = $conn->real_escape_string($_POST['mobile']);
    $city = $conn->real_escape_string($_POST['city']);
    $Address = $conn->real_escape_string($_POST['Address']);
    $state = $conn->real_escape_string($_POST['State']);
    $pincode = $conn->real_escape_string($_POST['pincode']);
    $adhar = $conn->real_escape_string($_POST['adhar']);
    $pass =md5( $conn->real_escape_string($_POST['Password']));
    $role = $conn->real_escape_string($_POST['role']);
  
    $sql = "INSERT INTO user (user,email,pass,first,mob,City,Address,State,Pincode,Adhar,Role,name) VALUES ('$User','$email','$pass','$fname','$mobile','$city','$Address','$state','$pincode','$adhar','$role','$fname')";
    
    if (mysqli_query($conn, $sql) ) 
    {
	   echo"data inserted";
    	 
    }
    else 
    {
        echo"not inserted";
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	    
    }
   // -----------------------------------------------------------------------------------------------------------
   // code to enter image in database
   $filename = $_FILES["uploadfile"]["name"];
   $tempname = $_FILES["uploadfile"]["tmp_name"];    
       $folder = "images/".$filename;
         
   
 
       // Get all the submitted data from the form
       $sql = "INSERT INTO profile_picture (user,filen) VALUES ('$User','$filename')";
 
       // Execute query
       mysqli_query($conn, $sql);
         
       // Now let's move the uploaded image into the folder: image
       if (move_uploaded_file($tempname, $folder))  {
           $msg = "Image uploaded successfully";
           echo $msg;
           header("Location: auth-signin.html");
       }else{
           $msg = "Failed to upload image";
     }



    mysqli_close($conn);
} 
 else{
     echo "nhi hua";
 }





