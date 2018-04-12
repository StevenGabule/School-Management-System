<?php    
require("common.php");
$s_id = $_GET['id'];
$query = " 
        SELECT 
        *
        FROM tblsubject
		ORDER BY subdes
		"; 

    try 
    { 
        $stmt = $db->prepare($query); 
        $stmt->execute(); 
    } 
    catch(PDOException $ex) 
    { 
        die("Failed to run query: " . $ex->getMessage()); 
    } 
        
    $rows = $stmt->fetchAll(); 
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
			<a href="index.php" rel="nofollow"><h1>TEACHER PANEL</h1></a>
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
					<div class="col-md-14">
                            <div class="section-title">
                                 <h2><a href="<?php echo "managestudent.php?id=" . $s_id;?>">Student Management</a></h2>
                                <h2><a href="<?php echo "managestudentap.php?id=" . $s_id;?>">Invoice</a></h2>
                            </div>
                            
					</div>
				<form action="studentgradeupdate_reg.php" method="post"> 
					<div class="row add-form"> 
                   			<label for="sub_id" class="required">Select subject:</label>    <br />      
							<select name="grading" class="col-md-2">
                                    <option value="1" /> First Grading
                                    <option value="2" /> Second Grading
                                    <option value="3" /> Third Grading
                                    <option value="4" /> Fourth Grading
                            </select>
                             <div class="col-md-2 ">
                            <input name="grade" type="text" class="col-md-1" />
                             <input name="s_id" type="hidden" value="<?php echo $s_id;?>" />
                            </div>
					</div>
                    <div class="row add-form">  		
                            <div class="col-md-2 ">
                            
                                <!-- <a href="#" class="submit-btn largeButton contactBgColor">Login</a> -->
                                <input type="submit" class="submit-btn largeButton accountBgColor" value="Submit" />
                            </div> <!-- /.col-md-2 -->
                     </div>
                    	
                  </form>  		
                 <!--   <div class="row col-md-3 ">
                    	<a href="addstdsub.php" class="submit-btn largeButton contactBgColor">Add Subject</a>
                    </div>  /.col-md-3 -->	
                 
			</div> <!-- /#about -->
			
			
            <div id="account" class="section-content">
				<div class="row contact-form">
                <form action="login.php" method="post">
                <div class="row contact-form">  
					<div class="col-md-4">
						
						<input name="name-id" type="hidden" id="name-id" maxlength="40">
					</div> <!-- /.col-md-4 -->
               </div>
                 <div class="row contact-form">   
					<div class="col-md-4">
						
						<input name="email-id" type="hidden" id="email-id" maxlength="40">
					</div> <!-- /.col-md-4 -->  
                 </div>            
					
						<div class="col-md-2 ">
							<!-- <a href="#" class="submit-btn largeButton contactBgColor">Login</a> -->
                            <input type="hidden" class="submit-btn largeButton accountBgColor" value="Login" />
						</div> <!-- /.col-md-2 -->
                   </form>
				</div>
				</div> <!-- /#account -->
			</div>
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