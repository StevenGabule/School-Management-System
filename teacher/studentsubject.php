<?php    
require("common.php");   
$s_id = htmlentities($_SESSION['user']['username']);
$sub_id = $_GET['id'];
$sec_id = $_SESSION['sec_id'];	
$_SESSION['sub_id'] = $sub_id; 
include("connection.php");
$sql = "SELECT * from tblstudent where s_id = '$s_id' ";
$select = mysql_query($sql);

$query3 = " 
			SELECT
			a.*,
			b.*
			FROM
			tblstudent a 
			INNER JOIN
			tblstdsub b ON
			a.s_id = b.ssub_id
			WHERE        
			(b.sub_id ='$sub_id')  and (a.sec_id='$sec_id')
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
               <li class="home active"><a href="index.php">Section</a></li>
	            <li class="services"><a href="./../logout.php">Logout</a></li>
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
	            <li class="home"><a href="index.php">Section</a></li>
	            <li class="services"><a href="./../logout.php">Logout</a></li>
	        </ul>
		</div> <!-- /.navigation -->

	</div> <!-- /#main-sidebar -->

	<div id="main-content">
		<div class="container-fluid">

			<div id="about" class="section-content">
				<div class="row">
					<div class="col-md-14">
                            <div class="section-title">
                                <h2>My Student</h2>
                            </div>
                            <?php while ($row = mysql_fetch_assoc($select))
								{
									echo "Name: " . $row["fname"] . " " . $row["mname"] . " " . $row["lname"] ;
								} 
							?>
					</div>
					<div class="col-md-14">                
						<table class="table table-striped" id="resultTable">                            
                            <thead>
                                <tr>
                                <th> <strong>Name</strong> </th>
                                <th> <strong>First Grading</strong> </th>
                                <th> <strong>Second Grading</strong> </th>
                                <th> <strong>Third Grading</strong> </th>
                                <th> <strong>Fourth Grading</strong> </th>
                                <th> <strong>Final Grade</strong> </th>
                                <th> <strong></strong> </th>
                                </tr>
                            </thead>
                            <tbody>
									<?php foreach($rows3 as $row3): ?>                                	
                                        <tr> 
                                            <td><?php echo htmlentities($row3['fname'], ENT_QUOTES, 'UTF-8'); ?>
                                            <?php echo htmlentities($row3['mname'], ENT_QUOTES, 'UTF-8'); ?>
                                            <?php echo htmlentities($row3['lname'], ENT_QUOTES, 'UTF-8'); ?>
                                            </td> 
                                            <td><?php echo htmlentities($row3['firstg'], ENT_QUOTES, 'UTF-8'); ?></td> 
                                            <td><?php echo htmlentities($row3['secondg'], ENT_QUOTES, 'UTF-8'); ?></td> 
                                            <td><?php echo htmlentities($row3['thirdg'], ENT_QUOTES, 'UTF-8'); ?></td> 
                                            <td><?php echo htmlentities($row3['fourthg'], ENT_QUOTES, 'UTF-8'); ?></td> 
                                            <td><?php echo htmlentities($row3['finalg'], ENT_QUOTES, 'UTF-8'); ?></td>
                                            <td>
                                            <a href="studentgradeupdate.php?id=<?php echo htmlentities($row3['s_id'], ENT_QUOTES, 'UTF-8'); ?>">
											Update </a>
                                            </td>
                                        </tr> 
                                    <?php endforeach; ?>  
                            </tbody>
   
        
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