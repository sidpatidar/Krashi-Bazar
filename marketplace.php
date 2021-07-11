<?php  
session_start();
include 'connect.php';
if(isset($_SESSION["id"])){
    $user=$_SESSION["user"];
     $uid=$_SESSION["id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 
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
.btn-primary{display:none;}
.img-fluid{
    height:250px;
}
.but1{background-color: #4CAF50;font-size: 20px;border-radius: 4px;transition-duration: 0.4s;float: left;}
.but1:hover {
  background-color: white; /* Green */
  color:black;
}  
.but{background-color: #008CBA;font-size: 20px;border-radius: 4px;transition-duration: 0.4s;float: left;}
.but:hover {
  background-color: white; /* Green */
  color:black;
}  
 
 </style>

</head>
<body class=""><div id="google_translate_element"></div>
<script type="text/javascript">
       function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
         }
         </script>
		  
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
					<?php    $result1 = $conn->query("SELECT * FROM profile_picture where user='$user'"); if($result1->num_rows > 0){while($row = $result1->fetch_assoc()){ ?>
                            <img class="img-radius" src="images/<?php echo ($row['filen']); ?>" alt="User-Profile-Image"><?php } } ?> 
						<div class="user-details">
							<div id="more-details"><?php if(isset($_SESSION["id"])){  echo $_SESSION["user"]; }?><i class="fa fa-caret-down"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href="http://localhost/manndi/Redirect.php"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
							<li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
							<li class="list-group-item"><a href="logout.php"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
						</ul>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
					    <label>Navigation</label>
					</li>
					<li class="nav-item">
					    <a href="http://localhost/manndi/Redirect.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext" active>Dashboard</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
					<a href="http://localhost/manndi/Marketplace.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-shopping-cart"></i></span><span class="pcoded-mtext">Market</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="layout-vertical.html" target="_blank">Vertical</a></li>
					        <li><a href="layout-horizontal.html" target="_blank">Horizontal</a></li>
					    </ul>
					</li>
					<li class="nav-item pcoded-menu-caption">
					    <label>UI Element</label>
					</li>
					<li class="nav-item pcoded-hasmenu">

					<a href="http://localhost/manndi/Users.php" class="nav-link "><span class="pcoded-micon"><i class="fa fa-address-book"></i></span><span class="pcoded-mtext">Directory</span></a>
				
					    <!-- <ul class="pcoded-submenu">
					        <li><a href="bc_alert.html">Alert</a></li>
					        <li><a href="bc_button.html">Button</a></li>
					        <li><a href="bc_badges.html">Badges</a></li>
					        <li><a href="bc_breadcrumb-pagination.html">Breadcrumb & paggination</a></li>
					        <li><a href="bc_card.html">Cards</a></li>
					        <li><a href="bc_collapse.html">Collapse</a></li>
					        <li><a href="bc_carousel.html">Carousel</a></li>
					        <li><a href="bc_grid.html">Grid system</a></li>
					        <li><a href="bc_progress.html">Progress</a></li>
					        <li><a href="bc_modal.html">Modal</a></li>
					        <li><a href="bc_spinner.html">Spinner</a></li>
					        <li><a href="bc_tabs.html">Tabs & pills</a></li>
					        <li><a href="bc_typography.html">Typography</a></li>
					        <li><a href="bc_tooltip-popover.html">Tooltip & popovers</a></li>
					        <li><a href="bc_toasts.html">Toasts</a></li>
					        <li><a href="bc_extra.html">Other</a></li>
					    </ul> -->
					</li>
					<!-- <li class="nav-item pcoded-menu-caption">
					    <label>Forms &amp; table</label>
					</li>
					<li class="nav-item">
					    <a href="form_elements.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Forms</span></a>
					</li>
					<li class="nav-item">
					    <a href="tbl_bootstrap.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Bootstrap table</span></a>
					</li>
					<li class="nav-item pcoded-menu-caption">
					    <label>Chart & Maps</label>
					</li>
					<li class="nav-item">
					    <a href="chart-apex.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Chart</span></a>
					</li>
					<li class="nav-item">
					    <a href="map-google.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Maps</span></a>
					</li>
					<li class="nav-item pcoded-menu-caption">
					    <label>Pages</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="auth-signup.html" target="_blank">Sign up</a></li>
					        <li><a href="auth-signin.html" target="_blank">Sign in</a></li>
					    </ul>
					</li>
					<li class="nav-item"><a href="sample-page.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li> -->

				</ul>
				
				<!-- <div class="card text-center">
					<div class="card-block">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="feather icon-sunset f-40"></i>
						<h6 class="mt-3">Download Pro</h6>
						<p>Getting more features with pro version</p>
						<a href="https://1.envato.market/qG0m5" target="_blank" class="btn btn-primary btn-sm text-white m-0">Upgrade Now</a>
					</div>
				</div> -->
				
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						<!-- <img src="assets/images/logo.png" alt="" class="logo">
						<img src="assets/images/logo-icon.png" alt="" class="logo-thumb"> -->
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
								<button type="button" class="close" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<li>
							<div class="dropdown">
								<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
								<div class="dropdown-menu dropdown-menu-right notification">
									<div class="noti-head">
										<h6 class="d-inline-block m-b-0">Notifications</h6>
										<div class="float-right">
											<a href="#!" class="m-r-10">mark as read</a>
											<a href="#!">clear all</a>
										</div>
									</div>
									<ul class="noti-body">
										<li class="n-title">
											<p class="m-b-0">NEW</p>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
													<p>New ticket Added</p>
												</div>
											</div>
										</li>
										<li class="n-title">
											<p class="m-b-0">EARLIER</p>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
													<p>Prchace New Theme and make payment</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
													<p>currently login</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
													<p>Prchace New Theme and make payment</p>
												</div>
											</div>
										</li>
									</ul>
									<div class="noti-footer">
										<a href="#!">show all</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="feather icon-user"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										<img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
										<span>John Doe</span>
										<a href="auth-signin.html" class="dud-logout" title="Logout">
											<i class="feather icon-log-out"></i>
										</a>
									</div>
									<ul class="pro-body">
										<li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
										<li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
										<li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
	<div class="pcoded-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Marketplace</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#!">Dashboard </a></li>
							<li class="breadcrumb-item"><a href="#!">Market</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->
		<div class="row">
			<!-- [ basic-carousel ] start -->
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header">
						<h5></h5>
					</div>
					<div class="card-body">
						<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
							<div class="carousel-item active">
									<img class="img-fluid d-block w-100" src="manndi/garlic1.jpg" alt="Second slide">
								</div>
							<?php    $result1 = $conn->query("SELECT * FROM post where crop='Wheat' OR crop='Maize' OR crop='jowar' "); if($result1->num_rows > 0){while($row = $result1->fetch_assoc()){ ?>
								<div class="carousel-item ">						
									<img class="img-fluid d-block w-100" src="post_images/<?php echo ($row['ifile']); ?>" alt="First slide"  style="height:250px;width:250px;">
								</div>
								<?php }} ?>
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- [ basic-carousel ] end -->
			<!-- [ carousel-control ] start -->
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header">
						<h5></h5>
					</div>
					<div class="card-body">
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								
								<div class="carousel-item active">
									<img class="img-fluid d-block w-100" src="manndi/channa.jpg" alt="First slide">
								</div>
								<?php    $result1 = $conn->query("SELECT * FROM post where crop='tur' OR crop='Bajra' OR crop='Millets' "); if($result1->num_rows > 0){while($row = $result1->fetch_assoc()){ ?>
								<div class="carousel-item">
									<img class="img-fluid d-block w-100" src="post_images/<?php echo ($row['ifile']); ?>" alt="Second slide">
								</div>
								<?php }} ?>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
							<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- [ carousel-control ] end -->
			<!-- [ carousel-indicators ] start -->
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header">
						<h5></h5>
					</div>
					<div class="card-body">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="img-fluid d-block w-100" src="manndi/sugarcane.jpg" alt="First slide">
								</div>
								<?php    $result1 = $conn->query("SELECT * FROM post where crop='moong' OR crop='masur' OR crop='arhar' "); if($result1->num_rows > 0){while($row = $result1->fetch_assoc()){ ?>
								<div class="carousel-item">
									<img class="img-fluid d-block w-100" src="post_images/<?php echo ($row['ifile']); ?>" alt="Second slide">
								</div>
								<?php }} ?>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- [ carousel-indicators ] end -->
			<!-- [ carousel-Crossfade ] start -->
			<div class="col-sm-6">
				<div class="card">
					<div class="card-header">
						<h5></h5>
					</div>
					<div class="card-body">
						<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="img-fluid d-block w-100" src="manndi/alsi.jpg" alt="First slide">
								</div>
								<?php    $result1 = $conn->query("SELECT * FROM post where crop='Garlic' OR crop='Soyabeens' OR crop='groundnut' "); if($result1->num_rows > 0){while($row = $result1->fetch_assoc()){ ?>
								<div class="carousel-item">
									<img class="img-fluid d-block w-100" src="post_images/<?php echo ($row['ifile']); ?>" alt="Second slide">
								</div>
								<?php }} ?>
								
							</div>
							<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
							<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- [ carousel-Crossfade ] end -->
			<!-- [ carousel-Caption ] start -->
			<div class="col-sm-6">
				<div class="card">
					<div class="card-header">
						<h5></h5>
					</div>
					<div class="card-body">
						<div id="carouselExampleIndicatorscaption" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="img-fluid d-block w-100" src="post_images/jowar
									.jpg" alt="First slide">
									<div class="carousel-caption d-none d-md-block">
										<h5 class="text-white"></h5>
										<p></p>
									</div>
								</div>
								<?php    $result1 = $conn->query("SELECT * FROM post where crop='turmeric' OR crop='gram' OR crop='Onion' "); if($result1->num_rows > 0){while($row = $result1->fetch_assoc()){ ?>
								<div class="carousel-item">
									<img class="img-fluid d-block w-100" src="post_images/<?php echo ($row['ifile']); ?>" alt="Second slide">
									<div class="carousel-caption d-none d-md-block">
										<h5 class="text-white"></h5>
										<p></p>
									</div>
								</div>
								<?php }} ?>
									
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicatorscaption" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
							<a class="carousel-control-next" href="#carouselExampleIndicatorscaption" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- [ carousel-Caption ] end -->


			<!-- <div class="col-xl-12">
				
				<hr>
			    <div class="card-group">
			      <?php    $result1 = $conn->query("SELECT * FROM post where  pid<=10 "); if($result1->num_rows > 0){while($row = $result1->fetch_assoc()){ ?>
					<div class="card">
						<img class="img-fluid card-img-top" src="post_images/<?php echo ($row['ifile']); ?>" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title"><?php echo ($row['Crop']); ?></h5>
							<p class="card-text"><?php echo ($row['Subject']); ?></p>
							<p class="card-text"><?php echo ($row['Message']); ?></p>
							<p><form method="Post" action="Show.php"><input type="text" value="<?php echo $row['pid'];  ?>" name="pid" hidden><input type="submit" value="See the" name="See" class="but1"></form></p>
							<p><form method="Post" action="request.php"><input type="text" value="<?php echo $row['pid'];  ?>" name="pid" hidden><input type="submit" value=" request to buy" name="request" class="but"></form></p>
						</div>
						<div class="card-footer">
							<small class="text-muted">Last updated 3 mins ago</small>
						</div>
					</div>
					<?php }} ?>
				
				</div>
			</div> -->
			<?php $result2 = $conn->query("SELECT * FROM user where user='$user'"); 
    $srole="null";
    
    ?>	
    <?php $check=0;  if($result2){ while($info = mysqli_fetch_array($result2)) { ?>
        <?php $check=strcmp("Farmer",$info['Role']);   } } ?>
     
			
	
			<?php  $count=0; $cc=6; $res1 = $conn->query("SELECT count(pid) as c FROM post");if($res1->num_rows > 0){while($row11 = $res1->fetch_assoc()){ $count= $row11['c']; }}  $ch=$count%3;   $count=$count-$ch; $count=$count/3; echo $count;  ?>
			<div class="col-xl-12">
			<?php while($count>0){  ?>
			
				<hr>
				<div class="card-deck">
				<?php   $result1 = $conn->query("SELECT * FROM post where  pid>=$cc AND pid<=$cc+3 "); if($result1->num_rows > 0){while($row = $result1->fetch_assoc()){ ?>
					<div class="card">
						<img class="img-fluid card-img-top" src="post_images/<?php echo ($row['ifile']); ?>" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title"><?php echo ($row['Crop']); ?></h5>
							<p class="card-text"><?php echo ($row['Subject']); ?></p>
							<p class="card-text"><?php echo ($row['Message']); ?></p>
							<p><form method="Post" action="Show.php"><input type="text" value="<?php echo $row['pid'];  ?>" name="pid" hidden><input type="submit" value="See the" name="See" class="but1"></form></p>
						    <?php    if($check!=0){?>
        <p><form method="Post" action="request.php" class="req"><input type="text" value="<?php echo $row['pid'];  ?>" name="pid" hidden><input type="submit" value="request to buy" name="request" class="but"></form></p>  <?php   }?>
							<p><form method="Post" action="profile.php"><input type="text" value="<?php echo $row['uid'];  ?>" name="uid" hidden><input type="submit" value="Owner" name="profile" class="but"></form></p>
						</div>
						<div class="card-footer">
							<small class="text-muted">Last updated 3 mins ago</small>
						</div>
					</div>
					<?php }} ?>
					<!-- <div class="card">
						<img class="img-fluid card-img-top" src="assets/images/slider/img-slide-1.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
						</div>
						<div class="card-footer">
							<small class="text-muted">Last updated 3 mins ago</small>
						</div>
					</div>
					<div class="card">
						<img class="img-fluid card-img-top" src="assets/images/slider/img-slide-4.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
						</div>
						<div class="card-footer">
							<small class="text-muted">Last updated 3 mins ago</small>
						</div>
					</div> -->
				
			</div>

 <?php  $cc=$cc+4;  $count--; } ?>


		</div>
		<!-- [ Main Content ] end -->
	</div>
</div>
<!-- [ Main Content ] end -->
  
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>



</body>
</html>
<?php } 
 else{
    header("Location: auth-signin.html");
 }