<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
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
    <h1 class="h1">登录</h1>
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
                <div class="form-group">
                    <label for="verify">验证码</label>
                    <input type="text" id="verify" placeholder="请输入验证码">
                    <img src="coding.php" alt="" id="verify-img" onclick="veri()">
                </div>
                <br>
                <input type="button" id="login" value="登录" class="btn btn-primary"/>
                <a href="login_2.php" class="btn btn-success">注册</a>
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


	$("#login").click(function(){
			var username = $("#username").val(),
				password = $("#password").val(),
			    verify = $("#verify").val();
			console.log(username,password);
			if(username == "" || password == "" || verify == ""){
				alert("请输入内容");
			}else{
				$.ajax({
						url:'action_2.php',
						type:"POST",
						data:{
							username:username,
                            password:password,
                            verify:verify
						},
						success:function(data){
						    console.log(data);
							if(data == 1){
                                window.location.href = "comment.php";
                                }else{
                                    alert("验证码或密码错误!");
                                    $("#verify").val("");
                            }
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) {
                            console.log(XMLHttpRequest, textStatus, errorThrown);
                        }
					})
                 }
		})
</script>
</body>
</html>