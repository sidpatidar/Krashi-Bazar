<?php

// session_unset(); 
// $_SESSION["id"]=null;
// $_SESSION["user"]=null;
// unset($_SESSION["id"]);
// unset($_SESSION["user"]);
// $_SESSION = array();
// session_destroy(); 
// header("Cache-Control: no-cache, must-revalidate");
// header("Pragma: no-cache");
//   header("Location: sign-log.html");

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
     session_start();
      session_destroy();
      header("Location: auth-signin.html");
?>

