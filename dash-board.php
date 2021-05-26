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
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
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
    <style>
.btn-primary{display:none;}
    </style>
    

</head>
<body class=""><div id="google_translate_element" ></div>
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
							<li class="list-group-item"><a href="http://localhost/manndi/dash-board.php"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
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
					    <a href="index.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
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
					    <a href="http://localhost/manndi/Users.php" class="nav-link "><span class="pcoded-micon"><i class="fa fa-address-book"></i></span><span class="pcoded-mtext">Farmer Directory</span></a>
					    <ul class="pcoded-submenu">
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
					    </ul>
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
										<a href="logout.php" class="dud-logout" title="Logout">
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
                            <h5 class="m-b-10">Buyer Dashboard </h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Home / Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <!-- support-section start -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card support-bar overflow-hidden">
                            <div class="card-body pb-0">
                                <h2 class="m-0">259</h2>
                                <span class="text-c-blue">Mandis</span>
                                <p class="mb-3 mt-3">There are 259  mandis in Madhya Pradesh.</p>
                            </div>
                            <div id="support-chart"></div>
                            <div class="card-footer bg-primary text-white">
                                <div class="row text-center">
                                    <div class="col">
                                        <h5 class="m-0 text-white"></h5>
                                        <span></span>
                                    </div>
                                    <div class="col">
                                    <h5 class="m-0 text-white"></h5>
                                        <span></span>
                                    </div>
                                    <div class="col">
                                    <h5 class="m-0 text-white"></h5>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card support-bar overflow-hidden">
                            <div class="card-body pb-0">
                                <h2 class="m-0">6,630</h2>
                                <span class="text-c-green">Mandis</span>
                                <p class="mb-3 mt-3">There are  6,630 mandis in India.</p>
                            </div>
                            <div id="support-chart1"></div>
                            <div class="card-footer bg-success text-white">
                                <div class="row text-center">
                                    <div class="col">
                                        <h4 class="m-0 text-white"></h4>
                                        <span></span>
                                    </div>
                                    <div class="col">
                                        <h4 class="m-0 text-white"></h4>
                                        <span></span>
                                    </div>
                                    <div class="col">
                                        <h4 class="m-0 text-white"></h4>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- support-section end -->
            </div>

            <?php $result5 = $conn->query("SELECT * FROM post"); $sum=0;?>
            <?php  if($result5){ while($info = mysqli_fetch_array($result5)) {
                $str = $info['req1'];
                $sum=$sum+substr_count($str,$user);
            } }?>
            <div class="col-lg-5 col-md-12">
                <!-- page statustic card start -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-yellow"><?php echo $sum; ?></h4>
                                        <h6 class="text-muted m-b-0">total buying request </h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-bar-chart-2 f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-yellow">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">% change</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $result5 = $conn->query("SELECT count(*) AS count FROM user where Role='Farmer'"); $tot=0; ?>
                    
            <?php  if($result5){   $row=  mysqli_fetch_array($result5); $tot=$row['count'];  }else{echo "hello";}  ?>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-green"><?php echo $tot; ?> </h4>
                                        <h6 class="text-muted m-b-0">Total farmers </h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="fa fa-address-book f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-green">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">% change</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-red"><p id="date"></p></h4>
                                        <script> n =  new Date();
                        y = n.getFullYear();
                       m = n.getMonth() + 1;
                        d = n.getDate();
                      document.getElementById("date").innerHTML = m + "/" + d + "/" + y; </script>
                                        <h6 class="text-muted m-b-0">Date</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-calendar f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-red">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">% change</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-down text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $res = $conn->query("SELECT count(*) AS count FROM user where Role='Buyer'"); $tota=0; ?>
                    
                    <?php  if($res){   $row=  mysqli_fetch_array($res); $tota=$row['count'];  }else{echo "hello";}  ?>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-blue"><?php echo $tota; ?></h4>
                                        <h6 class="text-muted m-b-0">Total Buyers</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="fa fa-address-card f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-blue">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">% change</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-down text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- page statustic card end -->
            </div>
            <!-- prject ,team member start -->
            <div class="col-xl-6 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                             <?php $result2 = $conn->query("SELECT * FROM user where user='$user'"); ?> 
                        <h5>Projects</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                        <table class="table">
                                <thead>
  
                                        <?php  if($result2){ while($info = mysqli_fetch_array($result2)) { ?>
                                           <tr>
                                            <th>Name</th>
                                           <td><?php echo$info['name'];?></td></tr>
                                           <tr>
                                            <th>Email</th>
                                            <td><?php echo$info['email'];?></td></tr>
                                            <tr>
                                            <th>Mobile</th>
                                            <td><?php echo$info['mob'];?></td>    
                                      </tr>
                                    
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="card latest-update-card">
                    <div class="card-header">
                        <h5>Latest Updates</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-inverse">
                                <thead>
                              
                                           <tr>
                                            <th>Address</th>
                                           <td><?php echo$info['Address']."  ".$info['City']."  ".$info['State'];?></td></tr>
                                           <tr>
                                            <th>Adhar Number</th>
                                            <td><?php echo$info['Adhar'];?></td></tr>
                                             
                                      <?php  } }else{ echo"none";} ?>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- prject ,team member start -->
            <!-- seo start -->
            <div class="col-xl-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h3>$16,756</h3>
                                <h6 class="text-muted m-b-0">Visits<i class="fa fa-caret-down text-c-red m-l-10"></i></h6>
                            </div>
                            <div class="col-6">
                                <div id="seo-chart1" class="d-flex align-items-end"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h3>49.54%</h3>
                                <h6 class="text-muted m-b-0">Bounce Rate<i class="fa fa-caret-up text-c-green m-l-10"></i></h6>
                            </div>
                            <div class="col-6">
                                <div id="seo-chart2" class="d-flex align-items-end"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h3>1,62,564</h3>
                                <h6 class="text-muted m-b-0">Products<i class="fa fa-caret-down text-c-red m-l-10"></i></h6>
                            </div>
                            <div class="col-6">
                                <div id="seo-chart3" class="d-flex align-items-end"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- seo end -->

            <!-- Latest Customers start -->
            <!-- <div class="col-lg-8 col-md-12">
                <div class="card table-card review-card">
                    <div class="card-header borderless ">
                        <h5>Customer Reviews</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="review-block">
                            <div class="row">
                              
                            <h1>JavaScript Progress Bar</h1>

                        <div id="myProgress" style=" width: 100%; background-color: #ddd;">
                        <div id="myBar" style="width: 1%; height: 30px; background-color: #4CAF50;   text-align: center;  line-height: 30px;color: white; ">50%</div>
                         </div>
                        <br><br>
                        <div id="myProgress" style=" width: 100%; background-color: #ddd;">
                        <div id="myBar1" style="width: 1%; height: 30px; background-color: #4CAF50;   text-align: center;  line-height: 30px;color: white; ">50%</div>
                         </div>       
                        </div>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-3">Power</h5>
                                <h2>2789<span class="text-muted m-l-5 f-14">kw</span></h2>
                                <div id="power-card-chart1"></div>
                                <div class="row">
                                    <div class="col col-auto">
                                        <div class="map-area">
                                            <h6 class="m-0">2876 <span> kw</span></h6>
                                            <p class="text-muted m-0">month</p>
                                        </div>
                                    </div>
                                    <div class="col col-auto">
                                        <div class="map-area">
                                            <h6 class="m-0">234 <span> kw</span></h6>
                                            <p class="text-muted m-0">Today</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-3">Temperature</h5>
                                <h2>7.3<span class="text-muted m-l-10 f-14">deg</span></h2>
                                <div id="power-card-chart3"></div>
                                <div class="row">
                                    <div class="col col-auto">
                                        <div class="map-area">
                                            <h6 class="m-0">4.5 <span> deg</span></h6>
                                            <p class="text-muted m-0">month</p>
                                        </div>
                                    </div>
                                    <div class="col col-auto">
                                        <div class="map-area">
                                            <h6 class="m-0">0.5 <span> deg</span></h6>

                                            <p class="text-muted m-0">Today</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-lg-4 col-md-12">
                <div class="card chat-card">
                    <div class="card-header">
                        <h5>Chat</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row m-b-20 received-chat">
                            <div class="col-auto p-r-0">
                                <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40">
                            </div>
                            <div class="col">
                                <div class="msg">
                                    <p class="m-b-0">Nice to meet you!</p>
                                </div>
                                <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
                            </div>
                        </div>
                        <div class="row m-b-20 send-chat">
                            <div class="col">
                                <div class="msg">
                                    <p class="m-b-0">Nice to meet you!</p>
                                </div>
                                <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
                            </div>
                            <div class="col-auto p-l-0">
                                <img src="assets/images/user/avatar-3.jpg" alt="user image" class="img-radius wid-40">
                            </div>
                        </div>
                        <div class="row m-b-20 received-chat">
                            <div class="col-auto p-r-0">
                                <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40">
                            </div>
                            <div class="col">
                                <div class="msg">
                                    <p class="m-b-0">Nice to meet you!</p>
                                    <img src="assets/images/widget/dashborad-1.jpg" alt="">
                                    <img src="assets/images/widget/dashborad-3.jpg" alt="">
                                </div>
                                <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
                            </div>
                        </div>
                        <div class="form-group m-t-15">
                            <label class="floating-label" for="Project">Send message</label>
                            <input type="text" name="task-insert" class="form-control" id="Project">
                            <div class="form-icon">
                                <button class="btn btn-primary btn-icon">
                                    <i class="feather icon-message-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card user-card2">
                    <div class="card-body text-center">
                        <h6 class="m-b-15">Project Risk</h6>
                        <div class="risk-rate">
                            <span><b>5</b></span>
                        </div>
                        <h6 class="m-b-10 m-t-10">Balanced</h6>
                        <a href="#!" class="text-c-green b-b-success">Change Your Risk</a>
                        <div class="row justify-content-center m-t-10 b-t-default m-l-0 m-r-0">
                            <div class="col m-t-15 b-r-default">
                                <h6 class="text-muted">Nr</h6>
                                <h6>AWS 2455</h6>
                            </div>
                            <div class="col m-t-15">
                                <h6 class="text-muted">Created</h6>
                                <h6>30th Sep</h6>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success btn-block">Download Overall Report</button>
                </div>
            </div> -->
            <!-- Latest Customers end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>


<!-- custom-chart js -->
<script src="assets/js/pages/dashboard-main.js"></script>
<script>
var i = 0;

if (i == 0) {
i = 1;
var elem = document.getElementById("myBar");
var elem1 = document.getElementById("myBar1");
var width = 1;
var id = setInterval(frame, 10);
function frame() {
if (width >= 50) {
clearInterval(id);
i = 0;
} else {
width++;
elem.style.width = width + "%";
elem1.style.width =50  + "%";
}
}
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