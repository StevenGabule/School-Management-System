<?php 	
    require("common.php"); 
	 if(empty($_SESSION['admin'])) 
{
    $submitted_username = ''; 
    if(!empty($_POST)) 
    {         
        $query = " 
            SELECT 
                id, 
                username, 
                password, 
                salt, 
                admin,
				e_id
            FROM users 
            WHERE 
                username = :username 
        ";       
        $query_params = array( 
            ':username' => $_POST['username'] 
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
        $login_ok = false; 
        
        $row = $stmt->fetch(); 
        if($row){  
            $check_password = hash('sha256', $_POST['password'] . $row['salt']); 
            for($round = 0; $round < 65536; $round++) 
            { 
                $check_password = hash('sha256', $check_password . $row['salt']); 
            } 
             
            if($check_password === $row['password']) 
            { 
                $login_ok = true; 
            } 
        } 
        if($login_ok) 
        { 
            unset($row['salt']); 
            unset($row['password']); 
            $_SESSION['user'] = $row;  
            header("Location: admin/index.php"); 
            die("Redirecting to: admin/index.php"); 
        } 
        else 
        { 
            $_SESSION['error'] = "Login Failed!"; 
            $_SESSION['submitted_username'] = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8'); 
			 header("Location: index.php#account"); 
            die("Redirecting to: adminprofile.php"); 
        } 
    } 
}

else
{
			header("Location: admin/index.php"); 
            die("Redirecting to: admin/index.php");
}
     
?> 
