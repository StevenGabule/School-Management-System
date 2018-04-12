<?php    
require("common.php");   
//$s_id = date('Y-hs');
$s_id = $_GET['id'];
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    </head>
<body>

	<!-- This one in here is responsive menu for tablet and mobiles -->
    <div class="responsive-navigation visible-sm visible-xs">
        <a href="#" class="menu-toggle-btn">
            <i class="fa fa-bars fa-2x"></i>
        </a>
        <div class="responsive-menu">
            <ul>
               <li class="home"><a href="index.php">Student</a></li>
	            <li class"about"><a href=" Teacher.php">Teacher</a></li>
	            <li class="services"><a href="Subject.php">Subject</a></li>
	            <li class="portfolio"><a href="Settings.php">Settings</a></li>
                <li class="account"><a href="./../logout.php">Logout</a></li> 
            </ul> <!-- /.main_menu -->
        </div> <!-- /.responsive_menu -->
    </div> <!-- /responsive_navigation -->

	<div id="main-sidebar" class="hidden-xs hidden-sm">
		<div class="logo">
			<a href="index.php" rel="nofollow"><h1>ADMIN PANEL</h1></a>
			<span>Logged as: <b> <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?> </b> </span>
		</div> <!-- /.logo -->
		<div>
	        <ul class="main-menu">
	            <li class="home"><a href="index.php"><span style="padding-right:20px;"><img src="images/students.png"></span>Student</a></li>
	            <li class"about"><a href=" Teacher.php"><span style="padding-right:20px;"><img src="images/teacher.png"></span>Teacher</a></li>
                <li class="account"><a href="./../logout.php"><span style="padding-right:20px;"><img src="images/exit.png"></span>Logout</a></li> 
	        </ul>
		</div> <!-- /.navigation -->

	</div> <!-- /#main-sidebar -->

	<div id="main-content">

		

		<div class="container-fluid">
            <div id="about" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
                                <h2><a href="<?php echo "managestudent.php?id=" . $s_id;?>" >Student Management</a></h2>
                                <h2><a href="<?php echo "managestudentap.php?id=" . $s_id;?>" >Invoice</a></h2>
                                <h2 style="background-color:#38e340">Add Invoice</h2>
						</div> <!-- /.section-title -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
                    <div class="row add-form">               
                       <form id='register' action='addinvoice_reg.php' method='post'>                    
						<div class="row add-form">	
                            <div class="col-md-3">
                                <label for="series" class="required">Series #</label>
                                <input name="series" type="text" >
                                <input name="s_id" type="hidden" value="<?php echo $s_id ?>" >
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-3">
                                <label for="mname" class="required">Stab #:</label>
                                <input name="stabno" type="text">
                            </div> <!-- /.col-md-4 --> 
                            
						</div> <!-- /.add-form -->
                        
                        <div class="row add-form">	
                            <div class="col-md-3">
                                <label for="regfee" class="required">Registration Fee</label>
                                <input name="regfee" type="text" class="input" value="">
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-3">
                                <label for="tuition" class="required">Tuition Fee</label>
                                <input name="tuition" type="text" class="input" value="">
                            </div> <!-- /.col-md-4 --> 
                        </div> <!-- /.add-form -->
                        <div class="row add-form">	
                            <div class="col-md-3">
                                <label for="regfee" class="required">Date</label>
                                <input name="datep" type="date" >
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-3">
                                <label for="mname" class="required">Remarks</label>
                                <input name="remarks" type="text">
                            </div> <!-- /.col-md-4 --> 
                        </div> <!-- /.add-form -->
						<div class="row add-form">
                            <div class="col-md-2 ">
                                <!-- <a href="#" class="submit-btn largeButton contactBgColor">Login</a> -->
                                <input type="submit" class="submit-btn largeButton accountBgColor" value="Submit" />
                            </div> <!-- /.col-md-2 -->
                        </div> 
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
									<li><a href="facebook.com" class="fa fa-facebook"></a></li>
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
    <script>

        //When DOM loaded we attach click event to button
        $(document).ready(function() {
            
            //attach keypress to input
            $('.input').keydown(function(event) {
                // Allow special chars + arrows 
                if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 
                    || event.keyCode == 27 || event.keyCode == 13 
                    || (event.keyCode == 65 && event.ctrlKey === true) 
                    || (event.keyCode >= 35 && event.keyCode <= 39)){
                        return;
                }else {
                    // If it's not a number stop the keypress
                    if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                        event.preventDefault(); 
                    }   
                }
            });
            
        });

    </script>
     
    <script src="js/filterme.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/application.js" type="text/javascript" charset="utf-8"></script> 
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery.singlePageNav.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/custom.js"></script>
	

</body>
<script type='text/javascript' src='js/logging.js'></script>
</html>