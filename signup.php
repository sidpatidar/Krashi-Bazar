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
	<link rel="icon" href="assets/images/logo.png" sizes="32x32" type="image/png">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">
	
	
	<style>
        .active{display:none; visibility:hidden;}
        @media screen and (min-width: 640px) {  .mb-4{float:left;margin-right:40px;} 
	
	}
    .auth-wrapper .auth-content:not(.container) 
	{
    width: 600px;
    }

  
   
    /*  */


     </style>

</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body"> 
						
						

						<h4 class="mb-3 f-w-400">SignUp</h4>
						<form method="POST" action="Register.php" enctype="multipart/form-data">
						<div class="form-group mb-3">
							<label class="floating-label" for="Email" style="font-size:15px;">User</label>
							<input type="text" class="form-control" id="Email" placeholder="" name="user" required>
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password" style="font-size:15px;">Full name</label>
							<input type="text" class="form-control" id="Email" placeholder="" name="fname" required>
						</div>
                        <div class="form-group mb-4">
							<label class="floating-label" for="Password" style="font-size:15px;">Email Address</label>
							<input type="email" class="form-control" id="Email" placeholder="" name="email" required>
						</div>

                        <div class="form-group mb-4">
							<label class="floating-label" for="Password" style="font-size:15px;">Mobile</label>
							<input type="tel" class="form-control" id="Email" placeholder="" name="mobile" required>
						</div>
                        <div class="form-group mb-4">
							<label class="floating-label" for="Password" style="font-size:15px;">City</label>
							<input type="text" class="form-control" id="Email" placeholder="" name="city" required>
						</div>
                        <div class="form-group mb-4">
							<label class="floating-label" for="Password" style="font-size:15px;">Address</label>
							<input type="textarea" class="form-control" id="Email" placeholder="" name="Address" required>
						</div>
                        <div class="form-group mb-4">
							<label class="floating-label" for="Password" style="font-size:15px;">State</label>
							<input type="text" class="form-control" id="Email" placeholder="" name="State" required>
						</div>
                        <div class="form-group mb-4">
							<label class="floating-label" for="Password" style="font-size:15px;">Pincode</label>
							<input type="text" class="form-control" id="Email" placeholder="" name="pincode" required>
						</div>
                        <div class="form-group mb-4">
							<label class="floating-label" for="Password" style="font-size:15px;">Adhar Number</label>
							<input type="text" class="form-control" id="Email" placeholder="" name="adhar" required> 
						</div>
                        <div class="form-group mb-4">
							<label class="floating-label" for="Password" style="font-size:15px;">Password</label>
							<input type="password" class="form-control" id="Email" placeholder="" name="Password" required>
						</div>
                        <div class="form-group mb-4">
							<label class="floating-label" for="Password" style="font-size:15px;">Confirm Password</label>
							<input type="password" class="form-control" id="Email" placeholder="" name="cPassword" required>
						</div>
                        <div class="form-group mb-4">
							<label  for="Password">Profile Picture</label>
							<input type="file" class="form-control" id="Email" name="uploadfile" >
						</div>
						<div class="custom-control custom-checkbox text-left mb-4 mt-2">
                        
                        <input type="radio" id="male" name="role"  value="Farmer">
                        <label  class="floating-label"  chec="">Farmer</label>
                        <input type="radio"  id="female" name="role" value="Buyer">
                        <label  class="floating-label" >Buyer</label>
							<!-- <input type="checkbox" class="custom-control-input" id="customCheck1">
							<label class="custom-control-label" for="customCheck1">Save credentials.</label> -->
						</div>
                        <input type="submit" class="btn btn-block btn-primary mb-4" value="Sign In" name="Sign">
                        <div class="form-group mb-4" align="center">
						
						<p class="mb-0 text-muted">Already have an account? <a href="http://localhost/manndi/auth-signin.html" class="f-w-400">Signin</a></p>
						<p class="mb-0 text-muted"> <a href="http://localhost/manndi/" class="f-w-400">Home</a></p>
                        </div>    
                    </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>



</body>

</html>
