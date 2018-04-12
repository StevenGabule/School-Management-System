<?php 
    require("common.php"); 
	$grading = $_POST['grading'];
	$sec_id = $_SESSION['sec_id'];
	$sub_id = $_SESSION['sub_id'];
	$s_id = $_POST['s_id'];
	
		
	if ($grading == 1)
		{
			$query = " 
				UPDATE tblstdsub
				SET
				firstg = :grading
				where ssub_id = :s_id
				and
				sub_id = :sub_id
			";
		}
	else if ($grading == 2)
		{
			$query = " 
				UPDATE tblstdsub
				SET
				secondg = :grading
				where ssub_id = :s_id
				and
				sub_id = :sub_id
			";
		}
	else if ($grading == 3)
		{
			$query = " 
				UPDATE tblstdsub
				SET
				thirdg = :grading
				where ssub_id = :s_id
				and
				sub_id = :sub_id
			";
		}
	else 
		{
			$query = " 
				UPDATE tblstdsub
				SET
				fourthg = :grading
				where ssub_id = :s_id
				and
				sub_id = :sub_id
			";
		}
		
 
        $query_params = array(
				':grading' => $_POST['grade'],
				':s_id' => $s_id,
				':sub_id' => $sub_id
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
		
		
		$query3 = " 
			SELECT
			*
			FROM
			tblstdsub
			where
			ssub_id = '$s_id'
			and
			sub_id = '$sub_id'
		";      
		try 
		{ 
			$stmt3 = $db->prepare($query3); 
			$stmt3->execute(); 
		} 
		catch(PDOException $ex3) 
		{ 
			die("Failed to run query: " . $ex3->getMessage()); 
		} 
		$rows3 = $stmt3->fetchAll();
		
		foreach($rows3 as $row3):
		$firstg = htmlentities($row3['firstg'], ENT_QUOTES, 'UTF-8');
		$secondg = htmlentities($row3['secondg'], ENT_QUOTES, 'UTF-8');
		$thirdg = htmlentities($row3['thirdg'], ENT_QUOTES, 'UTF-8');
		$fourthg = htmlentities($row3['fourthg'], ENT_QUOTES, 'UTF-8');
		endforeach;
	
	$final = ($firstg + $secondg + $thirdg + $fourthg)  ;
	$final = $final / 4;
			$query = " 
				UPDATE tblstdsub
				SET
				finalg = :final
				where ssub_id = :s_id
				and
				sub_id = :sub_id
			";
		
 
        $query_params = array(
				':s_id' => $s_id,
				':sub_id' => $sub_id,
				':final' =>$final
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
		
		
		
		
        header("Location: studentsubject.php?id=$sub_id"); 
        die("Redirecting to studentsubject.php"); 

  
?> 
