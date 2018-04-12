<?php 
    require("common.php"); 
   if(!empty($_POST)) 
    {  
	
        $query = " 
            INSERT INTO tblteacher ( 
				fname, 
                mname, 
                lname,
				cnum, 
				address
				
           ) VALUES ( 
				:fname, 
                :mname, 
                :lname, 
				:cnum,
				:address
            ) 
        "; 
 
        $query_params = array(
				':fname' => $_POST['fname'], 
                ':mname'=> $_POST['mname'], 
                ':lname' => $_POST['lname'], 
				':cnum' => $_POST['cnum'],
				':address' => $_POST['address']
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
        header("Location: Teacher.php"); 
        die("Redirecting to Teacher.php"); 
	}
     
     
?> 
