<?php 
    require("common.php"); 
	$s_id = $_POST['s_id'];
   if(!empty($_POST)) 
    {  
	
        $query = " 
            UPDATE tblstudent SET
				fname = :fname, 
                mname = :mname, 
                lname = :lname,  
                gender = :gender,
				bdate = :bdate,
				center_id = :c_id,
				contactno = :contactno,
				email = :email,
				address = :address,
				fathername = :fathername,
				mothername = :mothername,
				s_id = :s_id,
				sec_id = :sec_id
			WHERE s_id = :s_id	
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
        header("Location: managestudent.php?id=$s_id"); 
        die("Redirecting to index.php"); 
	}
     
     
?> 
