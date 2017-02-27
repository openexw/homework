<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册页面</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="iconfont234/iconfont.css">
    <link rel="stylesheet" href="sign_in.css">
</head>
<body>
    <div class="login">
        <div class="login_top">
            <a href="">
                <img src="img/25.png" alt="">
            </a>
            <h4>注册新用户</h4>
        </div>
        <form action="" id="form">
            <div class="form-group">
                <input type="text" class="forin" placeholder="用户名" id="username" name="username">
            </div>
            <div class="form-group">
                <input type="text" class="forin" placeholder="邮箱" id="email" name="email">
            </div>
            <div class="form-group">
                <input type="password" class="forin" placeholder="密码" id="password" name="password">
            </div>
            <div class="data clearfix">
                <div></div>
                <a href="">更多资料</a>
                <div></div>
            </div>
            <div class="form-group clearFix">
                <input type="text"  placeholder="验证码" id="verify">
                <img src="verification_code.php" alt="" id="verify_img"  />
            </div>
            <div class="form-group deal">
                <input type="checkbox"  id="check" name="agree">
                <span>我同意</span>
                <a href="">用户协议</a>
                <a href="login_in.php">已有账号?</a>
            </div>
            <div class="form-group">
                <input type="button" class="btn btn-primary" value="注册" id="sign_in">
            </div>
        </form>
        <div class="login_buttom">
            <div></div>
            <div>
                <span>使用第三方登陆</span>
                <a href="">
                    <img src="img/22.png" alt="">
                </a>
                <a href="">
                    <img src="img/23.png" alt="">
                </a>
            </div>

        </div>
        <div class="ending">Copyright © 2017- 京ICP备11008151号, All Rights Reserved</div>
    </div>


    <!--Javascript部分-->
    <script src="dist/jQuery/jquery.js"></script>
    <script src="jquery.validate.js"></script>
    <script src="layer/layer.js"></script>
    <script>

        //插件验证
        $("#form").validate({
            rules:{
                username:{
                    required:true,  //必填项目
                    minlength:2,  //最少几个字符
                    maxlength:4  //最多几个字符
                },
                password:{
                    required:true,
                    minlength:6,
                    maxlength:12
                },
                /* repassword:{
                 equalTo: "#password"
                 },*/
                email:{
                    required: true,
                    email: true
                },
                agree: "required"
            },
            messages:{
                username:{
                    required:"请输入用户名",
                    minlength:"用户名最少为2个字符",
                    maxlength:"用户名最多为4个字符"
                },
                password:{
                    required:"请输入密码",
                    minlength:"最少为6个字符",
                    maxlength:"最多为12个字符"
                },
                /* repassword:{
                 equalTo:"两次输入密码不一致"
                 },*/
                email:{
                    required:"email不能为空",
                    email: "请输入正确的邮箱地址"
                },
                agree: "是否同意协议"
            }
        });

        //点击验证码
        $("#verify_img").click(function(){
            $("#verify_img").attr("src","verification_code.php");
        });

        //点击注册
        $("#sign_in").click(function(){
            var username =$("#username").val(),
                email =$("#email").val(),
                password =$("#password").val(),
                verify =$("#verify").val();

            if(username == ""){
                layer.open({
                    content:"请输入用户名"
                });
            }else if(email == ""){
                layer.open({
                    content:"邮箱不能为空"
                });
            }else if(password == ""){
                layer.open({
                    content:"密码不能为空"
                });
            }else if(verify == ""){
                layer.open({
                    content:"请输入验证码"
                });
            }else{
                $.ajax({
                    url: "back_end2.php",
                    type: "POST",
                    data: {
                        username:username,
                        email:email,
                        password:password,
                        verify:verify
                    },
                    success:function(data){
                        if(data == 1){
                            layer.open({
                                content:"恭喜你：注册成功！"
                            });
                            window.location.href="ghost.php";
                        }else if(data == 2){
                            layer.open({
                                content:"验证码错误"
                            });
                            $("#verify").val("");
                        }else{
                            layer.open({
                                content:"注册失败！"
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