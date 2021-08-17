<?php
	!empty($_POST['id']) ? $id = $_POST['id'] : $id="";
	$ret['check'] = false;	
	if($id != ""){
 		$con = mysqli_connect("localhost", "w1004mesmg", "sunmoons1s2s3!", "w1004mesmg");
		$sql = "select 
					id 
				from 
					user
				where
					id = '{$id}' 
				";
		$result = mysqli_query($con, $sql);
		$num = mysqli_num_rows($result);
		
		if($num==0){
			$ret['check'] = true;
		}
	}
	echo json_encode($ret);
?>