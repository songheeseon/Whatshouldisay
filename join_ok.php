<?php
	include_once "./db/db_con.php";
    $id   = $_POST['id'];
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT); // 입력받은 패스워드를 해쉬값으로 암호화
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];


              
//  $con = mysqli_connect("localhost", "user1", "12345", "bbs");

//  	$sql = "insert into user(id, pass, name, gender, phone, email) ";
//  	$sql .= "values('$id', '$pass', '$name', '$gender', '$phone', '$email')";
// 	mq("INSERT 
// 			user
// 		SET 
// 			id = '$id' ,
// 			pass = '$pass',
// 			name = '$name',
// 			gender = '$gender',
// 			phone = '$phone',
// 			email = '$email'
// 		");    
    mq("insert into user(id,pass,nickname,email,gender) values('".$id."','".$pass."','".$nickname."','".$email."','".$gender."')");
    

    echo "
	      <script>
    	      alert('회원가입이 완료 되었습니다.');
	          location.href = 'index.php';
	      </script>
	  ";
?>

   
