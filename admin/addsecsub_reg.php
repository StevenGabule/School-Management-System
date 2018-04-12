<?php 
    require("common.php"); 
	$t_id = $_POST['t_id'];

	echo $_POST['t_id'];
        $query = " 
            INSERT INTO tblteachsub ( 
				subj_id,
				sec_id,
				t_id
            ) VALUES ( 
				:subj_id, 
                :sec_id,
				:t_id
            ) 
        "; 
 
        $query_params = array(
				':subj_id' => $_POST ['subj_id'], 
                ':sec_id' => $_POST['sec_id'],
				':t_id' => $t_id
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
        header("Location: manageteacher.php?id=$t_id"); 
        die("Redirecting to managesteacher.php"); 

  
?> 
