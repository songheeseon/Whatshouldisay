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
    <link rel="stylesheet" href="./css/rullet.css">
    <script type=text/javascript src=https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js></script>
    <script type=text/javascript src=jquery.tinysort.min.js></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jit/2.0.2/Extras/excanvas.min.js"></script>
    <script type=text/javascript src=./js/rullet_yasik.js></script>

    </head>
    <body id="page-top">
        <?php  include_once "./fragments/header.php"; ?>
        <!-- rullet here -->
        <div id="rullet">
			<div id="venues"><ul></ul></div>
			<div id="wheel">
				<canvas height=600 id="canvas" width=800></canvas><br>
				<button class="btn btn-outline-secondary" id="start_button">Start!</button>
			</div>
			<div id="stats">
			</div>
		</div>
		<hr>
		<div style="display:flex; justify-content: center;">
			<button href="#" class="btn btn-outline-secondary"  onclick="location.href='http:\/\/map.naver.com/v5/search/'+ wheel.segments[wheel.segments.length - Math.floor((wheel.angleCurrent / (Math.PI * 2))	* wheel.segments.length) - 1]; return false;">네이버지도에서 찾아보기</button>
		</div>
        <!-- Page Content-->
        <!-- <div class="container-fluid p-0">
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
        </div>             -->

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="./js/login.js"></script>
    </body>
</html>