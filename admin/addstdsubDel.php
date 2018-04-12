<?php 
    require("common.php"); 
     
	
        $query = " 
            DELETE FROM tblStdSub
			WHERE id = :id	
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
        header("Location: managestudent.php?id=" . $_GET['s_id']); 
        die("Redirecting to managestudent.php"); 
	
     
     
?> 
