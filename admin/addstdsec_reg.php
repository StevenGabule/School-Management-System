<?php 
    require("common.php"); 
   if(!empty($_POST)) 
    {  
	
        $query = " 
            INSERT INTO tblstdsubinfo ( 
				std_id,
				sec_id
            ) VALUES ( 
				:std_id, 
                :sec_id
            ) 
        "; 
 
        $query_params = array(
				':std_id' => $_SESSION['s_id'], 
                ':sec_id'=> $_POST['sub_id']
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
        header("Location: managestudent.php"); 
        die("Redirecting to managestudent.php"); 
	}
     
     
?> 
