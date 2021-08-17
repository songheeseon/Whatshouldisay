<?php

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">

            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-3" src="img/cooking.png" width="150" onclick="location.href='index.php'"/></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
         
			<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav">
			<!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="link_1.html">점심메뉴 추천</a></li> -->
			<li class="nav-item"><a class="nav-link js-scroll-trigger" href="link_1.php">점심메뉴 추천</a></li>
			<li class="nav-item"><a class="nav-link js-scroll-trigger" href="link_2.php">야식메뉴 추천</a></li>
			<li class="nav-item"><a class="nav-link js-scroll-trigger" href="link_3.php">디저트 추천</a></li>
			<li class="nav-item"><a class="nav-link js-scroll-trigger" href="link_6.php">맥주 추천</a></li>
			<li class="nav-item"><a class="nav-link js-scroll-trigger" href="list.php">게시판</a></li>
			
			<?php 
				
				if(!$userid){
			?>    
			
			<li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">로그인</a></li>
			<li class="nav-item"><a class="nav-link js-scroll-trigger" href="jjjoin.php">회원가입</a></li>
			
			<?php 
				}else if($userid){	
					$logged = $username."(".$userid.")";
			?>
			<li class="nav-item"><a href="#" class="nav-link js-scroll-trigger"><b><?=$logged ?></b>님이 접속중<span class="caret"></span></a>
			<li class="nav-item"><a class="nav-link js-scroll-trigger" href="logout.php">로그아웃</a></li>
			</ul>
			<?php }?>
			</div>
	</nav>


