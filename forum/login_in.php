<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登陆页面</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="iconfont234/iconfont.css">
    <link rel="stylesheet" href="login_in.css">
</head>
<body>
<div class="debark">
    <div class="debark_top">
        <form action="" id="left">
            <a href="">
                <img src="img/25.png" alt="">
            </a>
            <p>Ghost中文网</p>
            <div class="form-group">
                <input type="text" class="forin" placeholder="邮箱/用户名" id="username">
            </div>
            <div class="form-group">
                <input type="password" class="forin" placeholder="密码" id="password">
            </div>
            <div class="form-group lab">
                <input type="checkbox">
                <lable>记住我</lable>
                <a href="">忘记密码</a>
            </div>
            <div class="form-group">
                <input type="button" class="btn log_in" value="登陆">
            </div>
        </form>
        <div class="right">
            <h5>第三方账号登录</h5>
            <a href="">
                <img src="img/22.png" alt="">
            </a>
            <a href="">
                <img src="img/23.png" alt="">
            </a>
        </div>
    </div>
    <div class="debark_buttom">
        <span>还没有账号?&nbsp;&nbsp;&nbsp;</span>
        <a href="sign_in.php">立即注册&nbsp;•&nbsp;</a>
        <a href="">游客访问&nbsp;•&nbsp;</a>
        <a href="">回答阅读</a>
    </div>
    <div class="ending">Copyright © 2017- 京ICP备11008151号, All Rights Reserved</div>
</div>


<!--Javascript部分-->
<script src="dist/jQuery/jquery.js"></script>
<script src="layer/layer.js"></script>
<script>
    $(".log_in").click(function(){
        var username = $("#username").val(),
            password = $("#password").val();

        if(username == ""){
            layer.open({
                content:"请输入用户名"
            });
        }else if(password == ""){
            layer.open({
                content:"请输入密码"
            });
        }else{
            $.ajax({
                url: "back_end1.php",
                type: "POST",
                data: {
                    username:username,
                    password:password
                },
                success:function(data){
                    console.log(data);
                    //数据库连接成功1
                    if(data == 1){
                        layer.open({
                            content:"登陆成功"
                        });
                        window.location.href="ghost.php";
                    }else if(data == 2){
                        layer.open({
                            content:"登陆失败：用户名或密码错误"
                        });
                    }else{
                        layer.open({
                            content:"登陆失败"
                        });
                    }
                },
                error:function(XMLHttpRequest,textStatus,errorThrown){
                    console.log(XMLHttpRequest,textStatus,errorThrown);
                    layer.open({
                        content:"没有与数据库连接上"
                    });
                }
            });
        }
    });
</script>
</body>
</html>