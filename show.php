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
    <title></title>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 
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
    <link rel="stylesheet" href="css/post.css">
    <style>
        .active{display:none; visibility:hidden;}
        .crop {
  transition: transform 2s, filter 1.5s ease-in-out;
  transform-origin: center center;
  filter: brightness(50%);
  
}

/* The Transformation */
.crop:hover{
  filter: brightness(100%);
  transform: scale(1.3);
}
.btn{background-color: Green;font-size: 13px;color:white;border-radius: 4px;transition-duration: 0.4s;float: left;}
.btn:hover {
  background-color: white; /* Green */
  color:black;
}    
.btn1{background-color: Red;font-size: 22px;color:white;border-radius: 4px;transition-duration: 0.4s;float: left;}
.btn1:hover {
  background-color: white; /* Green */
  color:black;
}   
   </style>


</head>
<body class=""><div id="google_translate_element"></div>
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
							<li class="list-group-item"><a href="redirect.php"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
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
					    <a href="redirect.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
					<a href="http://localhost/manndi/Marketplace.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-shopping-cart"></i></span><span class="pcoded-mtext">Market</span></a>
					    <!-- <ul class="pcoded-submenu">
					        <li><a href="layout-vertical.html" target="_blank">Vertical</a></li>
					        <li><a href="layout-horizontal.html" target="_blank">Horizontal</a></li>
					    </ul> -->
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
					<li class="nav-item pcoded-menu-caption">
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
					<li class="nav-item"><a href="sample-page.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li>

				</ul>
				
				<div class="card text-center">
					<div class="card-block">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="feather icon-sunset f-40"></i>
						<h6 class="mt-3">Download Pro</h6>
						<p>Getting more features with pro version</p>
						<a href="https://1.envato.market/qG0m5" target="_blank" class="btn btn-primary btn-sm text-white m-0">Upgrade Now</a>
					</div>
				</div>
				
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
						<img src="assets/images/logo.jpg" alt="" class="logo">
						<img src="assets/images/logo-icon.png" alt="" class="logo-thumb">
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
										<a  href="logout.php" class="dud-logout" title="Logout">
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
	<?php $result2 = $conn->query("SELECT * FROM user where user='$user'"); 
    $srole="null";
    
    ?>	
    <?php  if($result2){ while($info = mysqli_fetch_array($result2)) { ?>
        <?php $check=strcmp("Farmer",$info['Role']);   } }
        if($check==0)
        {
            $srole="Farmer";
			$val=1;
        }
        else{  $srole="Buyer";  $val=0; }
        ?>
	<!-- [ Header ] end -->
	<section class="pcoded-main-container">
    <div class="pcoded-content">
	 <!-- [ breadcrumb ] start -->
     <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Striped Table</h5>
                        <span class="d-block m-t-5">use class <code>table-striped</code> inside table element</span>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <?php
                                if(isset($_POST['See']))
                                {
                                $pid = $conn->real_escape_string($_POST['pid']);
                               

                                // Get image data from database 
                                $result3 = $conn->query("SELECT * FROM post where pid='$pid'"); 
                                    ?>

                        <?php if($result3->num_rows > 0){ ?> 
                        
                         <?php while($row3 = $result3->fetch_assoc()){ ?> 
                            <tr> <th width="20%">Post id</th>  <td><?php echo $row3['pid']; ?>    </td></tr>
                            <tr> <th width="20%"></th>  <td> <img src="post_images/<?php echo ($row3['ifile']); ?>" height="100px" width="100px"  class="crop"/> </td></tr>
                            <tr> <th width="20%">Harvest</th> <td><?php echo $row3['Crop']; ?>    </td></tr>
                            <tr> <th width="20%">Subject</th>  <td><?php echo $row3['Subject']; ?>    </td></tr>
                            <tr> <th width="20%">Message</th> <td ><p class="card-text"><?php $meg=$row3['Message'];echo wordwrap($meg,60,"<br>\n"); ?></p></td></tr>
                            <?php $str = $row3['req1'];
                         $arr =  explode(" ", $str);
                                 
                           //print all the value which are in the array
                         foreach($arr as $v){     if(strcmp($v," ")==1 && $val==1){ $result4 = $conn->query("SELECT * FROM user where user='$v'"); while($row4 = $result4->fetch_assoc()){ $ruid=$row4['Uid'];  } 
                                       ?><tr> <th width="20%">Request</th> <td><form method="Post" action="Profile.php"><input type="number" value="<?php echo $ruid; ?>"  name="uid" hidden><input type="submit" value="<?php echo $v; ?>" name="profile" class="btn"></form>
									   <form method="Post" action="rdelete.php"><input type="text" value="<?php  echo $v; ?>"  name="dreq" hidden><input type="text" value="<?php echo $row3['pid']?>"  name="pid" hidden><input type="submit" value="Delete" name="rdelete" class="btn1"></form></td>
									   
                                        <?php } }  ?>
						  
						  
						  <?php } ?> 

                        <?php }else{ ?> 
                        Image(s) not found... 
                                <?php }
                            
                            }
                            else{  echo"not found post"; 
                            }
                                ?>


                                </thead>
                                <tbody>
                              
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </section>

<!-- [ Main Content ] end -->
 
   
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
</body>
</html>
 <?php }
 else{
    header("Location: auth-signin.html");
 }
 
 
 ?>