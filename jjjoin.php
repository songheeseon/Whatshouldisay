
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<meta charset="utf-8">
<!------ Include the above in your HEAD tag ---------->
<title>회원가입</title>
<link rel="icon" type="image/x-icon" href="/img/fork.png"/>

<link rel="stylesheet" href="./css/checkout2.css">

<div class="container">
<!--회원가입-->

<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
    <img class="d-block mx-auto mb-4" src="./img/groceries.png" onclick="location.href='index.php'" width="90" height="70">
	<h4 class="card-title mt-3 text-center"><b>회원가입</b></h4>
	<p>
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   트위터로 가입하기</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   페이스북으로 가입하기</a>
	</p>
	<p class="divider-text">
        <span class="bg-light">OR</span>
  </p>
	<form name="join"  method="post" action="join_ok.php" class="needs-validation" novalidate>
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input type= "text" class="form-control" id="id" name="id" maxlength="15" placeholder="아이디를 입력하세요" value="" required>
        
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input type="password" class="form-control" id="pass" name="pass" maxlength="20" placeholder="비밀번호를 입력하세요" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input type="password" class="form-control" placeholder="비밀번호를 확인" name="pass_confirm" id="pass_confirm" maxlength="20"  required>
    </div> <!-- form-group// -->
    
    <div class="form-group">
							<span id="pass_check_msg" data-check="0"></span>	<!--커스텀 속성:data-check="0"  -->
						</div>    

	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text">🍙</span>
		 </div>

    

        <input type="text" class="form-control" id="nickname" name="nickname" maxlength="20" placeholder="닉네임을 입력하세요" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input type="text" class="form-control" id="email" name="email" maxlength="20" placeholder="이메일을 입력하세요" required>
    </div> <!-- form-group// -->
    <!-- <div class="form-group input-group">
    	<div class="input-group-prepend"> -->
		    <!--<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 120px;">
		    <option selected="">+82</option>
		    <option value="1">+972</option>
		    <option value="2">+198</option>
		    <option value="3">+701</option>
		</select>
    	<input name="" class="form-control" placeholder="전화번호" type="text">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
		<select class="form-control">
			<option selected="">신분</option>
			<option>학생</option>
			<option>직장인</option>
			<option>백수</option>
            <option>취준생</option>
		</select> -->
	<!-- </div>  -->
    
	<div class="col-12" style="margin-left: -15;" >
		<div class="btn-group" data-toggle="buttons">
		   <label class="btn btn-outline-info" style="font-size: small;">
			  <input type="radio" name="gender" id="gender1" autocomplete="off" value="남자" checked>남자
		   </label>&nbsp;&nbsp;
		   <label class="btn btn-outline-info" style="font-size: small;">
       <input type="radio" name="gender" id="gender2" autocomplete="off" value="여자">여자
		   </label>
		</div>
	 </div>                               
    <div class="form-group">
    <span class="btn btn-primary form-control" type="submit" style="margin-bottom: 5px; background-color:#01A9DB;" onclick="check_input()">회원가입</span>
						<span class="btn btn-primary form-control" type="submit" style="background-color:#FF4000" onclick="reset_form()">초기화</span>
    </div> <!-- form-group// -->
	<p class="text-center" style="margin-left: 0;">이미 회원이신가요? &nbsp; <a href="login.php">Log In</a> </p>                                                       
</form>
</article>

</div> 

<script>

  /* 아이디 중복 체크(비동기통신) */
  $(function(){/*문서가 로드되면 function을 실행하라  */
    $("#id").blur(function(){/*아이디가 id인것을 찾아 포커즈를 빠져나갈때 발생하는 이벤트  */
      if($(this).val()==""){
        $("#id_check_msg").html("아이디를 입력하세요.").css("color","red").attr("data-check","0");/*선택자를 .연사자추가해서 계속 사용가능  */
        $(this).focus();
      }else{
        checkIdAjax();				
      }
    });
  });

  $(function(){/*문서가 로드되면 function을 실행하라  */
    $("#pass_confirm").blur(function(){/*아이디가 id인것을 찾아 포커즈를 빠져나갈때 발생하는 이벤트  */
      if( $(this).val()!=$("#pass").val() ) {
        $("#pass_check_msg").html("비밀번호가 일치하지 않습니다.").css("color","red");
      }else if( ($("#this").val()=="") || ($("#pass").val()=="") ){
        $("#pass_check_msg").html("비밀번호를 입력하세요.").css("color","red");
      }else{
        $("#pass_check_msg").html("비밀번호가 일치합니다.").css("color","blue");
      }
    });
  });

  /* 아이디 중복 체크(비동기통신) */
  function checkIdAjax(){//id값을 post로 전송해서 서버와 통신하여 중복 결과 json 형태로 받아오는 함수
    $.ajax({				//비동기통신방법, 객체로 보낼때{}사용
      url : "./ajax/check_id.php",
      type : "post",
      dataType : "json",
      data : {
        "id" : $("#id").val()
      },
      success : function(data){
        if(data.check){			//json사용했기때문에 data.으로 접근가능
          $("#id_check_msg").html("사용 가능한 아이디입니다.").css("color", "blue").attr("data-check","1");
        }else{
          $("#id_check_msg").html("중복된 아이디입니다.").css("color", "red").attr("data-check","0");
          $("#id").focus();
        }
      }
    });
  }

  function check_input()
     {
     if (!$("#id").val()) {
            alert("아이디를 입력하세요!");    
            $("#id").focus();
            return;
        }

     if (!$("#pass").val()) {
            alert("비밀번호를 입력하세요!");    
            $("#pass").val().focus();
            return;
        }

     if (!$("#pass_confirm").val()) {
            alert("비밀번호확인을 입력하세요!");    
            $("#pass_confirm").focus();
            return;
        }
        
     if (!$("#nickname").val()) {
            alert("닉네임을 입력하세요!");    
            $("#nickname").focus();
            return;
        }

      if (!$("#email").val()) {
            alert("이메일을 입력하세요!");    
            $("#email").focus();
            return;
        }

        if ( $("#pass").val() != 
              $("#pass_confirm").val()) {
            alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
            $("#pass").focus();
            $("#pass").select();
            return;
        }

        document.join.submit();
     }

     function reset_form() {
        document.join.id.value = "";  
        document.join.pass.value = "";
        document.join.pass_confirm.value = "";
        document.join.nickname.value = "";
        document.join.email.value = "";
        document.join.gender.value = "";
        document.join.id.focus();
        return;
     }
</script>
