<?php
    include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <script src="./js/jquery-1.10.2.js"></script>
	<script src="./js/jquery-1.10.2.min.js"></script>
	<script src="./js/jquery-3.2.1.min.js"></script>

        <?php include_once "./fragments/head.php";?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
<!-- 
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">

            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-3" src="img/cooking.png" width="150" onclick="location.href='index.php'"/></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
         
			<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav">
			 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="link_1.html">점심메뉴 추천</a></li> -
			<li class="nav-item"><a class="nav-link js-scroll-trigger" href="link_2.html">야식메뉴 추천</a></li>
			<li class="nav-item"><a class="nav-link js-scroll-trigger" href="link_3.html">디저트 추천</a></li>
			<li class="nav-item"><a class="nav-link js-scroll-trigger" href="link_6.html">맥주 추천</a></li>
			<li class="nav-item"><a class="nav-link js-scroll-trigger" href="list.php">게시판</a></li>
            
			<?php
				// if(!$userid){
			?>    
			
			<li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">로그인</a></li>
			<li class="nav-item"><a class="nav-link js-scroll-trigger" href="jjjoin.php">회원가입</a></li>
			
			<?php 
				
				// }else if($userid){	$logged = $username."(".$userid.")";
			?>
			
			<li class="nav-item"><a class="nav-link js-scroll-trigger" href="logout.php">로그아웃</a></li>
			</ul>
			<?php //}?>
			</div>
	</nav> -->



        <?php  include_once "./fragments/header.php"; ?>
      
        </nav> 
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content  " >
                    <h1 class="mb-0 text-center">
                        오늘
                        <span class="text-primary">뭐먹지?</span>
                    </h1>
                    <div class="subheading mt-4 text-center">
                        뭐 먹을지 고민될 때 내가 도와줄게🍽
                    </div>
                    
                </div>
            </section>
        </div>s
            
        
            <!-- Experience-->
            <!-- <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Senior Web Developer</h3>
                            <div class="subheading mb-3">Intelitec Solutions</div>
                            <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">March 2013 - Present</span></div>
                    </div>
                
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Web Developer</h3>
                            <div class="subheading mb-3">Intelitec Solutions</div>
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">December 2011 - March 2013</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Junior Web Designer</h3>
                            <div class="subheading mb-3">Shout! Media Productions</div>
                            <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">July 2010 - December 2011</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Web Design Intern</h3>
                            <div class="subheading mb-3">Shout! Media Productions</div>
                            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">September 2008 - June 2010</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" /> -->
            <!-- Education-->
            <!-- <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">University of Colorado Boulder</h3>
                            <div class="subheading mb-3">Bachelor of Science</div>
                            <div>Computer Science - Web Development Track</div>
                            <p>GPA: 3.23</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">August 2006 - May 2010</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">James Buchanan High School</h3>
                            <div class="subheading mb-3">Technology Magnet Program</div>
                            <p>GPA: 3.56</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">August 2002 - May 2006</span></div>
                    </div>
                </div>
            </section> -->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="./js/login.js"></script>
    </body>
</html>
