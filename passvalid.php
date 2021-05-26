<?php    
session_start();
if(isset($_SESSION["user"])){ ?>

<!DOCTYPE html>
<html lang="en">

<head>

	<title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">
	
	<style>
        .fixed-button{display:none;}
    </style>


</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<p class="mb-0 text-muted">Check your registered <a href="auth-signup.html" class="f-w-400">Email</a></p>
						<form method="POST" action="resetpass.php">
						
						<h4 class="mb-3 f-w-400">Reset Password</h4>
						<div class="form-group mb-3">
							<label class="floating-label" ></label>
							<input type="text" class="form-control" id="Email" placeholder="New password" name="pass" reduired>
                            <span id = "message" style="color:red"> </span>
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" ></label>
							<input type="text" class="form-control" id="Email" placeholder="Confirm password" name="cpass" required>
						</div>
						
						<input type="submit" class="btn btn-block btn-primary mb-4" name="reset" value="reset" onclick="verifyPassword()">
						<p class="mb-2 text-muted">we send OTP  on your registerd  <a href="signin.html" class="f-w-400">Email</a></p>
						<p class="mb-0 text-muted">Check your registered <a href="auth-signup.html" class="f-w-400">Email</a></p>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>  
function verifyPassword() {  
  var pw = document.getElementByName("pass").value;  
  var pw2 = document.getElementByName("cpass").value;  
  //check empty password field  
  if(pw == "") {  
     document.getElementById("message").innerHTML = "**Fill the password please!";  
     return false;  
  }  
   
 //minimum password length validation  
  if(pw.length < 8) {  
     document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
     return false;  
  }   
  if(pw1 != pw2) {  
      document.getElementById("message2").innerHTML = "**Passwords are not same";  
      return false;  
    } 

}  
</script>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script>
    history.pushState(null, null, null);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, null);
    });
</script>


</body>

</html>
<?php } ?>