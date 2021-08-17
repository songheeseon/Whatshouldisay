<!-- DB 연동 -->
<?php
	// $db_id="w1004mesmg";
	// $db_pw="sunmoons1s2s3!";
	// $db_name="w1004mesmg";
	// $db_domain="localhost";
	// $db=mysqli_connect($db_domain,$db_id,$db_pw,$db_name);

	$db_id='w1004mesmg';
	$db_pw='sunmoons1s2s3!';
	$db_name='w1004mesmg';
	$db_domain='localhost';
	$db=mysqli_connect($db_domain,$db_id,$db_pw,$db_name);

	// $db_id="pf";
	// $db_pw="1234";
	// $db_name="web";
	// $db_domain="localhost";
	// $db=mysqli_connect($db_domain,$db_id,$db_pw,$db_name);
	
	// 페이징, 조회수 처리 등 코드 간소화를 위해 사용할 함수
	function mq($sql){
		global $db;
		return $db->query($sql);
	}
?>