<?php
	include_once "./config.php";
	include "./db/db_con.php";
	include_once "./login_check.php";
	
	
	$bno = $_GET['idx']; // $bno에 idx값을 받아와 넣음 
	/* 조회수 올리기  */
	$hit = mysqli_fetch_array(mq("select 
									* 
								  from 
									board 
								  where 
									idx ='".$bno."'
								"));
	$hit = $hit['hit'] + 1;
	mq("update 
		 board 
	   set 
		 hit = '".$hit."' 
	   where 
		 idx = '".$bno."'
	");
	/* 조회수 올리기 끝 */
	
	/* 받아온 idx값을 선택해서 게시글 정보 가져오기 */
	$sql = mq("select 
				 * 
			   from 
				 board 
			   where 
				 idx='".$bno."'
			"); 
	$board = $sql->fetch_array();
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- ajax를 쓸 떄엔 아래의 를 불러주어야 한다 꼭...-->
		<!-- <script src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->

		<script src="./js/jquery.min.js"></script>
		<script src="./js/jquery.modal.min.js"></script>
		<link rel="stylesheet" href="./js/jquery.modal.min.css" />	
		
		
		<script src="./js/event.js"> </script>
		<script src="./js/login.js"> </script>
	
		<?php include_once "./fragments/head.php";?>
		
		
		
	</head>
	<body>
		<!-- 표준 네비게이션 바 (화면 상단에 위치, 화면에 의존하여 확대 및 축소) -->
		<nav class="navbar navbar-default">
		<?php include_once "./fragments/header.php";?>
		</nav>
		<div class="container">
			<!-- 글 불러오기 -->
			<div id="board_read">
				<table class="table table-striped" style="text-align: center; border: 1px solid #ddddda">
					<thead>
						<tr>
							<th colspan="2" style="background-color: #eeeeee; text-align: center;"><h3>게시판 글읽기</h3></th>
						</tr>
					</thead>	
					<tbody>
						<tr>
							<td>글 제목</td>
							<td colspan="2"><?=$board['title']?></td>
						</tr>
						<tr>
							<td>작성자</td>
							<td colspan="2"><?=$board['name']?></td>
						</tr>
						<tr>
							<td>작성일자</td>
							<td colspan="2"><?=$board['date']?></td>
						</tr>
						<tr>
							<td>내용</td>
							<td colspan="2" style="min-height: 200px; text-align: left;"><?=$board['content']?></td>
						</tr>
					</tbody>
				</table>
				<!-- 목록, 수정, 삭제 -->
				<a href="list.php" class="btn btn-primary">목록</a>
				<!-- 자신의 글만 수정, 삭제 할 수 있도록 설정-->
				<?php 
					if($userid==$board['name'] || $role=="ADMIN"){ // 본인 아이디거나, 관리자 계정이거나
				?>
						<a href="update.php?idx=<?=$board['idx']?>" class="btn btn-primary">수정</a>
						<a href="delete.php?idx=<?=$board['idx']?>" class="btn btn-primary">삭제</a>
				<?php } ?>
			</div>
		</div>

		<!-- 댓글 불러오기 끝 -->
	
	
	</body>
</html>