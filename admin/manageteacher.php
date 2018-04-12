<?php    
require("common.php");
		$t_id = $_GET['id'];
		$_SESSION['t_id'] = $t_id;
include("connection.php");

$sql = "SELECT * from tblteacher where t_id = '$t_id' ";
$select = mysql_query($sql);
$query3 = " 
			SELECT
			DISTINCT
			a.secdes,
			a.secyear,
			b.sec_id
			FROM
			tblsection a 
			INNER JOIN
			tblteachsub b ON
			a.sec_id = b.sec_id
			WHERE        
			(b.t_id ='$t_id')  
		";      
		try 
		{ 
			$stmt3 = $db->prepare($query3); 
			$stmt3->execute(); 
		} 
		catch(PDOException $ex3) 
		{ 
			die("Failed to run query: " . $ex3->getMessage()); 
		} 
		$rows3 = $stmt3->fetchAll();

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
			<a href="index.php" rel="nofollow"><h1>ADMIN PANEL</h1></a>
			<span>Logged as: <b> <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?> </b> </span>
		</div> <!-- /.logo -->
		<div>
	        <ul class="main-menu">
	            <li class="home"><a href="index.php"><span style="padding-right:20px;"><img src="images/students.png"></span>Student</a></li>
	            <li class"about"><a href=" Teacher.php"><span style="padding-right:20px;"><img src="images/teacher.png"></span>Teacher</a></li>
	           
	            <li class="portfolio"><a href="Settings.php"><span style="padding-right:20px;"><img src="images/settings.png"></span>Settings</a></li>
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
                                <h2>Teacher Management</h2>
                                <div class="contact-form">  
                                 </div>
                            </div>
					</div>
				
					<div class="col-md-6">                
						<table class="table table-striped" id="resultTable">                            
                            <thead>
                                <tr>
                                <th> <strong>Section</strong> </th>
                                <th> <strong>Year</strong> </th>
                                </tr>
                            </thead>
                            <tbody>
									<?php foreach($rows3 as $row3): ?>                                	
                                        <tr> 
                                            <td><a href="teachersub.php?id=<?php echo htmlentities($row3['sec_id'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlentities($row3['secdes'], ENT_QUOTES, 'UTF-8'); ?> </a></td> 
                                            <td><?php echo htmlentities($row3['secyear'], ENT_QUOTES, 'UTF-8'); ?></td> 
                                        </tr> 
                                    <?php endforeach; ?>  
                            </tbody>
                            </table>
                            <table style=" width: 100%;">
                            <tr>
                            <td>
                            <div class="row">
                                <div class="col-md-4">
                                <a href="<?php echo "addsecsub.php?id=" . $t_id;?>" class="submit-btn largeButton contactBgColor">ADD Subject</a>
                                </div> <!-- /.col-md-3 -->
                            </div> <!-- /.row-->
                            </td>
                            <td>
                            <div class="row">
                                <div class="col-md-4 ">
                                <a href="<?php echo "adduser.php?id=" . $t_id;?>" class="submit-btn largeButton contactBgColor">ADD Account</a>
                                </div> <!-- /.col-md-3 -->
                            </div> <!-- /.row-->
                            </td>
                            </tr>
                            </table>
					</div>
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