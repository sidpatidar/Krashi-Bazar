<?php  
session_start();
include 'connect.php';

if(isset($_POST['Send']))
{
    $user=$_SESSION["user"];
    $uid=$_SESSION["id"];
    // code to enter data of form in database
   
    $Crop = $conn->real_escape_string($_POST['Crop']);
    $Subject = $conn->real_escape_string($_POST['Subject']);
    $message = $conn->real_escape_string($_POST['message']);
    


    
   // -----------------------------------------------------------------------------------------------------------
   // code to enter image in database
   $msg = "";
   $filename = $_FILES["uploadfile"]["name"];
   $tempname = $_FILES["uploadfile"]["tmp_name"];    
       $folder = "post_images/".$filename; 
         
            // Insert image content into database 
            $sql = "INSERT into post (user,uid,Crop,Subject,Message,ifile) VALUES ('$user','$uid','$Crop','$Subject','$message','$filename')"; 
             $result=mysqli_query($conn, $sql);
            if($result)
         {
            // Now let's move the uploaded image into the folder: image
            if (move_uploaded_file($tempname, $folder))  {
                $msg = "Image uploaded successfully";
                echo $msg;
                header("Location: http://localhost/manndi/dashboard.php");
            }else{
                $msg = "Failed to upload image";
          } 
          mysqli_close($conn); 
        }
          else{

           echo "no table entry ";
          }
        }
    
 else{
     echo "nhi hua";
 }





