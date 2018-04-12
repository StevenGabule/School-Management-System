<?php 
    require("common.php"); 
	$s_id = $_POST['s_id'];
   if(!empty($_POST)) 
    {  
	
        $query = " 
            INSERT INTO tblacctspayable ( 
				sap_id,
				inv,
				ammount
            ) VALUES ( 
				:sap_id, 
                :inv,
				:ammount
            ) 
        "; 
 
        $query_params = array(
				':sap_id' => $s_id, 
                ':inv'=> $_POST['sub_id']
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
