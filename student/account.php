<?php 	
    require("common.php"); 
	 if(empty($_SESSION['user'])) 

?>
<!DOCTYPE html>
<html>
<head>
    <title>PWCDES</title>
	<meta name="keywords" content="sonic, responsive, free template, fluid layout, bootstrap, templatemo" />
	<meta name="description" content="Sonic is one-page responsive free template using Bootstrap. This layout is suitable for creative portfolio showcase." />
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/templatemo_misc.css">
	<link rel="stylesheet" href="css/templatemo_style.css">
</head>
<body>

	<!-- This one in here is responsive menu for tablet and mobiles -->
    <div class="responsive-navigation visible-sm visible-xs">
        <a href="#" class="menu-toggle-btn">
            <i class="fa fa-bars fa-2x"></i>
        </a>
        <div class="navigation responsive-menu">
            <ul>
	            <li class="about"><a href="#about">Accounts</a></li>
	            <li class="services"><a href="#services">Grades</a></li>
	            <li class="portfolio"><a href="#portfolio">Logout</a></li>
            </ul> <!-- /.main_menu -->
        </div> <!-- /.responsive_menu -->
    </div> <!-- /responsive_navigation -->

	<div id="main-sidebar" class="hidden-xs hidden-sm">
		<div class="logo">
			<a href="index.php" rel="nofollow"><h1>STUDENTS</h1></a>
			<span>Philippine Wide Continuing Distance Education Systems</span>
		</div> <!-- /.logo -->

		<div>
	        <ul class="main-menu">
	            <li class="about"><a href="account.php">Accounts</a></li>
	            <li class="services"><a href="grades.php">Grades</a></li>
	            <li class="account"><a href="./../logout.php">Logout</a></li>
	         
	        </ul>
		</div> <!-- /.navigation -->

	</div> <!-- /#main-sidebar -->

	<div id="main-content">

		<div id="templatemo">
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="welcome-text">
							<h2>Welcome to Account</h2>
							<p>Aim for success, not perfection. Never give up your right to be wrong, because then you will lose the ability to learn new things and move forward with your life. Remember that fear always lurks behind perfectionism.</p>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /#sTop -->

		<div class="container-fluid">

			<div id="about" class="section-content">
				
				
						
                      
                      
				
			</div> <!-- /#about -->

			<div id="services" class="section-content">
				
				<div class="row">
					<div class="col-md-4">
						<div class="service-item clearfix">
							<div class="service-icon">
								<i class="fa fa-bolt fa-2x"></i>
							</div>
							
						</div> <!-- /.service-item -->
					</div> <!-- /.col-md-4 -->
                    
                    <div class="col-md-4">
						
					</div> <!-- /.col-md-4 -->
                    
                    <div class="col-md-4">
						<div class="service-item clearfix">
							
							
						</div> <!-- /.service-item -->
					</div> <!-- /.col-md-4 -->                    
                    
				</div> <!-- /.row -->
				<div class="row our-skills">
					<div class="col-md-8">
						
					</div>
					<div class="col-md-4">
						<ul class="progess-bars">
							
							<li>
								<div class="progress">
									
							</li>
							<li>
								<div class="progress">
									
							</li>
							<li>
								<div class="progress">
									
							</li>
						</ul>
					</div>
				</div>
			</div> <!-- /#services -->

			<div id="portfolio" class="section-content">
				<div class="row">
					
				</div> <!-- /.row -->
				<div class="row">
					
					<div class="col-md-4">
					
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4">
						
					</div> <!-- /.col-md-4 -->
				</div> <!-- /.row -->
								<div class="row">
					<div class="col-md-12">
						
					</div>
				</div>
			</div> <!-- /#portfolio -->

			<div id="contact" class="section-content">
				<div class="row">
					
				</div> <!-- /.row -->
				<div class="row">
					
				</div> <!-- /.row -->
				<div class="row contact-form">
									
				
			</div> <!-- /#contact -->
            <div id="account" class="section-content">
				
				
			</div> <!-- /#account -->

		</div> <!-- /.container-fluid -->

		<div class="site-footer">
			<div class="first-footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="social-footer">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-dribbble"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-rss"></a></li>
								</ul>
							</div> <!-- /.social-footer -->
						</div> <!-- /.col-md-12 -->
					</div> <!-- /.row -->
				</div> <!-- /.container-fluid -->
			</div> <!-- /.first-footer -->
			<div class="bottom-footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<p class="copyright">Copyright © 2014 <!-- <a href="#">Allblue Technology</a> -->
                            </p>
						</div> <!-- /.col-md-6 -->
					</div> <!-- /.row -->
				</div> <!-- /.container-fluid -->
			</div> <!-- /.bottom-footer -->
		</div> <!-- /.site-footer -->

	</div> <!-- /#main-content -->

	<!-- JavaScripts -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery.singlePageNav.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$(document).ready(function(){
			$("a[data-gal^='prettyPhoto']").prettyPhoto({hook: 'data-gal'});
		});

        function initialize() {
          var mapOptions = {
            zoom: 11,
            center: new google.maps.LatLng(7.9064,125.0942)
          };

          var map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);
        }

        function loadScript() {
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
              'callback=initialize';
          document.body.appendChild(script);
        }

        window.onload = loadScript;
    </script>

</body>
<script type='text/javascript' src='js/logging.js'></script>
</html>