<?php 
    require("common.php"); 
	$s_id = $_POST['s_id'];
	if ($s_id<2000)
	{
		$username = $_POST['username'];	
		$admin = 1;
	}
	else
	{
		$username = $s_id;
		$admin = 2;
	}
    if(!empty($_POST)) 
    {  
        $query = " 
            INSERT INTO tblusers ( 
				admin, 
				username, 
                password, 
                salt, 
                email,
				e_id
            ) VALUES ( 
				:admin,
				:username, 
                :password, 
                :salt, 
                :email,
				:e_id
            ) 
        "; 
        $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 

        $password = hash('sha256', $_POST['password'] . $salt); 
 
        for($round = 0; $round < 65536; $round++) 
        { 
            $password = hash('sha256', $password . $salt); 
        } 
 
        $query_params = array(

			':admin' => $admin, 
			':username' => $username,
            ':password' => $password, 
            ':salt' => $salt, 
            ':email' => $_POST['email'],
			':e_id' => $s_id
        ); 
         
        try 
        { 

            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex) 
        {  
            die("Failed to run query: " . $ex->getMessage()); 
        } 
        header("Location: managestudent.php?id=$s_id" ); 
        die("Redirecting to managestudent.php?id=" . $s_id); 
    } 
     
?> 
