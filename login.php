<?php
	include_once "./config.php";
?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>로그인</title>
    <link rel="icon" type="image/x-icon" href="/img/fork.png"/>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="./css/bootstrap.min - .css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form name="loginSbmt" id="loginSbmt" method="post" action="login_ok.php">
    <img class="mb-4" src="./img/turkey.png" onclick="location.href='index.php'" width="90" height="70">
    <h1 class="h3 mb-2 fw-normal"><strong>로그인</strong></h1>

    <div class="form-floating mt-3">
      <input type="email" class="form-control" name="id" placeholder="ID" maxlength="15">
      <label for="floatingInput">아이디를 입력하세요</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="pass" placeholder="Password" maxlength="20">
      <label for="floatingPassword">비밀번호를 입력하세요</label>
    </div>

    <div class="checkbox mb-1 mt-3" >
      <label>
        <input type="checkbox" value="remember-me"> 회원정보 기억하기
      </label>
    </div>
    <a href="#"><span class="btn btn-primary form-control" onclick="check_input()">로그인</span></a>
    <!-- <button class="w-100 btn btn-lg btn-warning mt-3" type="submit">로그인</button> -->
    <p class="mt-3 mb-3 text-muted">&copy; 2021 sunmoon project</p>
  </form>
</main>

     <script src="./js/login.js"></script>
    
  </body>
</html>

</body>
</html>