<?php    
    require("common.php");   
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
                 <li ><a href="index.php">Student</a></li>
	            <li ><a href="Teacher.php">Teacher</a></li>
	            <li><a href="Subject.php">Subject</a></li>
	            <li><a href="Settings.php">Settings</a></li> 
            </ul> <!-- /.main_menu -->
        </div> <!-- /.responsive_menu -->
    </div> <!-- /responsive_navigation -->

	<div id="main-sidebar" class="hidden-xs hidden-sm">
		<div class="logo">
			<a href="Subjects.php" rel="nofollow"><h1>ADMIN PANEL</h1></a>
			<b>Logged as: <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?> </b>
		</div> <!-- /.logo -->

		<div>
	        <ul class="main-menu">
	             <li ><a href="index.php">Student</a></li>
	            <li ><a href="Teacher.php">Teacher</a></li>
	            <li><a href="Subject.php">Subject</a></li>
	            <li><a href="Settings.php">Settings</a></li>
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
							<h2>Welcome to PWCDES</h2>
							<p>Aim for success, not perfection. Never give up your right to be wrong, because then you will lose the ability to learn new things and move forward with your life. Remember that fear always lurks behind perfectionism.</p>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /#sTop -->

		<div class="container-fluid">

			<div id="about" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>About Us</h2>
						</div>
					</div>
				</div>
				<div class="row our-story">
					<div class="col-md-12">
						<h3>Mission</h3>
						The Philippine Wide Continuing Distance
Education Systems views the whole person
with both eclectic and holistic understanding.
In each person is some special gift from God
that is unique, in each of the learner.
This uniqueness in each learner must be given
maximum focus in his total development,
without disregarding the development of the
whole individual, who also, like any other
person possesses what the whole approach
 to total development, called holistic.
He is very good in one or two subjects;
good in others.  But he must excel some
special focus on where one can become very
productive.  In this context a person is deemed
primarily as the “image and likeness of God”
and is distained to do something great in areas
where he is most gifted.
                        <br><br>
                        <h3>Vision</h3>
						The Philippine Wide Continuing Distance Education
Systems views education in a totality of each learner
being.  He is viewed to be good and must be guided to be good, and to become very good/excellent in areas where God our creator has assigned him the tasks of being a very useful person in our society.  Being good is the reason why he is to be developed to become better and ultimately, the best in his leading talents to do the best.  His best is to reach the level of excellence in some sciences or areas of studies and become so each can complete, can excel most and productive citizen.  One way must be very good in Mathematics and Sciences, but can pass and excel most in TLE or in MAPEH or Social Sciences or in leadership or in being a very productive follower.
						<br><br>
                        <h3>Goals</h3>
						Goals are objectives.  Each learner must set a goal to be accomplished. Each one of the learners must maximize his performance in each subject according to their specific potentials.  Such is the reason why different areas of disciplines/subjects are to be learned, so the learner becomes a refined total personality that is expected to do his best in the areas of his greater potentials. Specific goals include the maximization of learning in every given lesson each time he takes it.  His facilitators are there to guide, to motivate to assure that what one is doing is in line with the total personality actualization.  Some are good in abstract reasoning, let him excel and attain maximum fulfilment in abstract reasoning.  Some are very good in understanding people, and have great interest  in people; their spiritual, intellectual, socio-cultural, skills related very challenging technical subjects.  Some tend to excel in music, in dancing, in socials, in paintings and drawings, in mechanical related  works; while others are inclined to lead, to manage, to administer, to conceptualize, to actualize.  These must be given due monitoring and guidance; but the whole person should always be on top of all
developmental activities of the whole person.
 Each learner must be guided and ably directed to discover himself or herself and be at home in any areas of development that he has to undergo. In all these learning activities, the focus of our
undertaking is the students becoming a very useful and productive person who is called upon to make society progressive and worth living, for each individual in our country.
					</div>
				</div> <!-- /.row -->
			</div> <!-- /#about -->

			<div id="services" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Services</h2>
						</div> <!-- /.section-title -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-md-4">
						<div class="service-item clearfix">
							<div class="service-icon">
								<i class="fa fa-bolt fa-2x"></i>
							</div>
							<div class="service-content">
								<h3>MODULE SERVICE PACKAGE</h3>
							</div>
						</div> <!-- /.service-item -->
					</div> <!-- /.col-md-4 -->
                    
                    <div class="col-md-4">
						<div class="service-item clearfix">
							<div class="service-icon">
								<i class="fa fa-bolt fa-2x"></i>
							</div>
							<div class="service-content">
								<h3>TUTORIAL SERVICE PACKAGE</h3>
							</div>
						</div> <!-- /.service-item -->
					</div> <!-- /.col-md-4 -->
                    
                    <div class="col-md-4">
						<div class="service-item clearfix">
							<div class="service-icon">
								<i class="fa fa-bolt fa-2x"></i>
							</div>
							<div class="service-content">
								<h3>WEEKEND REGULAR CLASS</h3>
							</div>
						</div> <!-- /.service-item -->
					</div> <!-- /.col-md-4 -->                    
                    
				</div> <!-- /.row -->
				<div class="row our-skills">
					<div class="col-md-8">
						<h3>Our Skills</h3>
						Integer hendrerit erat sed tellus pretium, eu sodales eros dignissim. Duis augue eros, mollis ac velit at, rutrum tincidunt ipsum. Morbi semper dui id fringilla semper. Etiam vulputate sagittis vestibulum. Vivamus ac ante cursus, feugiat ipsum et, aliquet justo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, minima soluta numquam perferendis illum alias omnis commodi error veritatis a esse nostrum asperiores recusandae.
					</div>
					<div class="col-md-4">
						<ul class="progess-bars">
							<li>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">Graphics 90%</div>
								</div>
							</li>
							<li>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">HTML5 CSS3 75%</div>
								</div>
							</li>
							<li>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">WordPress 66%</div>
								</div>
							</li>
							<li>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width: 88%;">Marketing 88%</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div> <!-- /#services -->

			<div id="portfolio" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Portfolio</h2>
						</div> <!-- /.section-title -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-md-4">
						<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="images/portfolio/1.jpg" alt="Caption">
								<div class="overlay-p">
									<a href="images/portfolio/1.jpg" data-gal="prettyPhoto">
										<i class="fa fa-arrows-alt fa-2x"></i>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
							<h3 class="portfolio-title"><a href="#">Caption</a></h3>
						</div> <!-- /.portfolio-item -->
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4">
						<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="images/portfolio/2.jpg" alt="Caption">
								<div class="overlay-p">
									<a href="images/portfolio/2.jpg" data-gal="prettyPhoto">
										<i class="fa fa-arrows-alt fa-2x"></i>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
							<h3 class="portfolio-title"><a href="#">Caption</a></h3>
						</div> <!-- /.portfolio-item -->
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4">
						<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="images/portfolio/3.jpg" alt="Caption">
								<div class="overlay-p">
									<a href="images/portfolio/3.jpg" data-gal="prettyPhoto">
										<i class="fa fa-arrows-alt fa-2x"></i>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
							<h3 class="portfolio-title"><a href="#">Caption</a></h3>
						</div> <!-- /.portfolio-item -->
					</div> <!-- /.col-md-4 -->
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-md-4">
						<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="images/portfolio/4.jpg" alt="Caption">
								<div class="overlay-p">
									<a href="images/portfolio/4.jpg" data-gal="prettyPhoto">
										<i class="fa fa-arrows-alt fa-2x"></i>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
							<h3 class="portfolio-title"><a href="#">Caption</a></h3>
						</div> <!-- /.portfolio-item -->
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4">
						<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="images/portfolio/5.jpg" alt="Caption">
								<div class="overlay-p">
									<a href="images/portfolio/5.jpg" data-gal="prettyPhoto">
										<i class="fa fa-arrows-alt fa-2x"></i>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
							<h3 class="portfolio-title"><a href="#">Caption</a></h3>
						</div> <!-- /.portfolio-item -->
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4">
						<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="images/portfolio/6.jpg" alt="Caption">
								<div class="overlay-p">
									<a href="images/portfolio/6.jpg" data-gal="prettyPhoto">
										<i class="fa fa-arrows-alt fa-2x"></i>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
							<h3 class="portfolio-title"><a href="#">Caption</a></h3>
						</div> <!-- /.portfolio-item -->
					</div> <!-- /.col-md-4 -->
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-md-12">
						<div class="load-more">
							<a href="#portfolio" class="largeButton portfolioBgColor">Load More</a>
						</div>
					</div>
				</div>
			</div> <!-- /#portfolio -->

			<div id="contact" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Contact Us</h2>
						</div> <!-- /.section-title -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-md-12">
						<div class="map-holder">
							<div class="google-map-canvas" id="map-canvas" style="height: 400px;">
                    		</div>
						</div> <!-- /.map-holder -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row contact-form">
					<div class="col-md-4">
						<label for="name-id" class="required">Name:</label>
						<input name="name-id" type="text" id="name-id" maxlength="40">
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4">
						<label for="email-id" class="required">Email:</label>
						<input name="email-id" type="text" id="email-id" maxlength="40">
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4">
						<label for="subject-id">Subject:</label>
						<input name="subject-id" type="text" id="subject-id" maxlength="60">
					</div> <!-- /.col-md-4 -->
					<div class="col-md-12">
						<label for="message-id" class="required">Message:</label>
						<textarea name="message-id" id="message-id" rows="6"></textarea>
					</div> <!-- /.col-md-12 -->
					<div class="col-md-12">
						<div class="submit-btn">
							<a href="#" class="largeButton contactBgColor">Send Message</a>
						</div> <!-- /.submit-btn -->
					</div> <!-- /.col-md-12 -->
				</div>
			</div> <!-- /#contact -->
            <div id="account" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Account</h2>
						</div> <!-- /.section-title -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row contact-form">
                <form action="login.php" method="post">
                <div class="row contact-form">  
					<div class="col-md-4">
						<label for="name-id" class="required">Username:</label>
						<input name="name-id" type="text" id="name-id" maxlength="40">
					</div> <!-- /.col-md-4 -->
               </div>
                 <div class="row contact-form">   
					<div class="col-md-4">
						<label for="email-id" class="required">Password:</label>
						<input name="email-id" type="text" id="email-id" maxlength="40">
					</div> <!-- /.col-md-4 -->  
                 </div>            
					
						<div class="col-md-2 ">
							<!-- <a href="#" class="submit-btn largeButton contactBgColor">Login</a> -->
                            <input type="submit" class="submit-btn largeButton accountBgColor" value="Login" />
						</div> <!-- /.col-md-2 -->
                   </form>
				</div>
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