<?php 
    require("common.php"); 
     
	
        $query = " 
            DELETE FROM tblteacher
			WHERE t_id = :id	
        "; 
 
        $query_params = array
		(
				':id'=> $_GET['id']
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
	
     
     
?> 
