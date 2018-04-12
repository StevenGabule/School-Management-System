<?php 
    require("common.php"); 
	$sap_id = $_POST['s_id'];
   if(!empty($_POST)) 
    {  
	
        $query = " 
            INSERT INTO tblacctspayable ( 
				sap_id, 
                seriesno, 
                stabno, 
                regfee,
				tuition,
				subtotal,
				remarks,
				datep
            ) VALUES ( 
				:sap_id, 
                :seriesno, 
                :stabno, 
                :regfee,
				:tuition,
				:subtotal,
				:remarks,
				:datep
            ) 
        "; 
 
        $query_params = array(
				':sap_id' => $_POST['s_id'], 
                ':seriesno'=> $_POST['series'], 
                ':stabno' => $_POST['stabno'], 
                ':regfee' => $_POST['regfee'],
				':tuition' => $_POST['tuition'],
				':subtotal' =>$_POST['tuition']+$_POST['regfee'],
				':remarks' => $_POST['remarks'],
				':datep' => $_POST['datep']
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
        header("Location: managestudentap.php?id=$sap_id"); 
        die("Redirecting to managestudentap.php?id=$sap_id"); 
	}
     
     
?> 
