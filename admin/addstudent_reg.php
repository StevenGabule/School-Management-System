<?php 
    require("common.php"); 
   if(!empty($_POST)) 
    {  
	
        $query = " 
            INSERT INTO tblstudent ( 
				fname, 
                mname, 
                lname, 
                gender,
				bdate,
				center_id,
				contactno,
				email,
				address,
				fathername,
				mothername,
				s_id,
				sec_id
            ) VALUES ( 
				:fname, 
                :mname, 
                :lname, 
                :gender,
				:bdate,
				:c_id,
				:contactno,
				:email,
				:address,
				:fathername,
				:mothername,
				:s_id,
				:sec_id
            ) 
        "; 
 
        $query_params = array(
				':fname' => $_POST['fname'], 
                ':mname'=> $_POST['mname'], 
                ':lname' => $_POST['lname'], 
                ':gender' => $_POST['gender'],
				':bdate' => $_POST['bdate'],
				':c_id' => $_POST['center'],
				':contactno' => $_POST['cno'],
				':email' => $_POST['email'],
				':address' => $_POST['address'],
				':fathername' => $_POST['fathername'],
				':mothername' => $_POST['mothername'],
				':s_id'=> $_POST['s_id'],
				':sec_id'=> $_POST['sec_id']
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
        header("Location: index.php"); 
        die("Redirecting to index.php"); 
	}
     
     
?> 
