<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <style>
        .container{
            text-align: center;
        }
        .content .col-md-11{
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
        .form-group{
            width:200px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="h1">注册</h1>
    <form action="" >
        <form action="">
            <div class="addnew">
                <div class="form-group has-feedback">
                    <label for="username">用户名</label>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                        <input type="text" class="form-control" id="username" placeholder="请输入用户名">
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label for="username">密码</label>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                        <input type="password" class="form-control" id="password" placeholder="请输入密码">
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label for="email">邮箱</label><label id="label-email"></label>
                    <div class="input-group">
                        <span class="input-group-addon">@</span>
                        <input type="email" class="form-control" id="email" placeholder="请输入邮箱">
                        <span class="glyphicon glyphicon-ok form-control-feedback hide" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="verify">验证码</label>
                    <input type="text" id="verify" placeholder="请输入验证码">
                    <img src="coding.php" alt="" id="verify-img" onclick="veri()">
                </div>
                <br>
                <input type="button" id="submit" value="注册" class="btn btn-primary"/>
                <a href="login_1.php" class="btn btn-success">登录</a>
            </div>
        </form>
    </form>
</div>

<script src="dist/js/jquery.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script>
    function veri(){
        $("#verify-img").attr("src","coding.php?temp="+(new Date().getTime()));
    }
</script>
<script>


	$("#submit").click(function(){
			var username = $("#username").val(),
				password = $("#password").val(),
                email = $("#email").val(),
			    verify = $("#verify").val();
			console.log(username,password,email);
			if(username == "" || password == "" || email == "" || verify == ""){
				alert("请输入内容");
			}else{
				$.ajax({
						url:'action.php',
						type:"POST",
						data:{
							username:username,
                            password:password,
                            email:email,
                            verify:verify
						},
						success:function(data){
						    console.log(data);
							if(data == 1){
                                $("#username").val("");
                                $("#password").val("");
                                $("#email").val("");
                                $("#verify").val("");
                                alert("注册成功!");
                                }else if(data == 2){
                                    alert("验证码输入失败");
                                $("#verify").val("");
                                }
						},
						error: function(XMLHttpRequest, textStatus, errorThrown){
                            console.log(XMLHttpRequest, textStatus, errorThrown);
                        }
					})
			    }
		})
</script>
</body>
</html>