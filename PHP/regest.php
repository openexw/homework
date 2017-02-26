<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ghost中文网</title>
    <link rel="stylesheet" href="css/regest.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
 <script src="js/jquery.js"></script>
</head>
<body>
<div class="content">
    <div class="main-login">
    <form action="back_end1.php" id="left">
      <div class="center-conten">
          <div class="logo">
              <a href="">
               <img src="imegs/Ghost-Transparent-for-LIGHT-BG (1).png" />
              </a>
          </div>
          <h3 class="logoback">注册新用户</h3>
          <input class="info"  type="text" placeholder="用户名"  id="username">
          <input class="info"  type="password" placeholder="密码"   id="password">
          <input class="info"  type="password" placeholder="确认密码" id="repassword">
          <div class="line">
              <a href="">更多信息</a>
              <div class="lin-line"></div>
          </div>
          <div class="yanzheng">
              <input type="text" placeholder="验证码" id="yzm">
              <img src="zyangz.php" alt=""  id="verify_img" onclick="verifition()">
          </div>
          <p>
              <label for="" class="lab">
                  <input type="checkbox" name="" id="">
                  我同意
                  <a href="">用户协议</a>
                  <a href="http://wenda.ghostchina.com/login/" class="pull-right">已有账号?</a>
              </label>
          </p>
            <input type="button"  id="regist" value="注册"/>
      </div>
        <div class="mod-footer">
            <span>使用第三方账号直接登录</span>&nbsp;&nbsp;
            <a style="background-image: url(./imegs/QQ截图20170207152743.png);" href="http://wenda.ghostchina.com/account/openid/sina/" class="btn btn-weibo"><i class="icon icon-weibo"></i> </a>
            <a style="background-image: url(./imegs/qq-login.png)"  href="http://wenda.ghostchina.com/account/openid/qq_login/" class="btn btn-qq"> <i class="icon icon-qq"></i></a>
        </div>
        </form>
    </div>
</div>
<script  >
function verifition(){
    $("#verify_img").attr("src","zyangz.php?temp="+(new Date().getTime()));
}
	 $("#regist").click(function(){
		 var username = $("#username").val(),
               password = $("#password").val(),
               yzm=$("#yzm").val(),
               repassword=$("#repassword").val();
         console.log(username,password,repassword);
         if(username == "" || password == ""){
             alert("请输入正确的用户名或密码");
                    }else if(repassword=="")
                           {
                            alert("请重复密码");
                             }
                    else if(repassword !=password)
                        {
                                   alert("	请输入相同的密码");
                           }
                  /*   else if(yzm!=$str)
                    {
                               alert("	请输入验证码");
                       } */
                    else {
                                $.ajax({
                                url:"refistyz.php",
                               type:"POST",
                               data:{username:username,
                               password:password,
                               repassword},
                               success:function(data){                    
                              if(data==1)
                                {window.location.href = "../daqiandauan/index.php";}
                              else if(data==2)
                               {  alert("没成功");}
                           else{
                         	  alert("不成功");
                         }
                       },
                       error:function(XMLHttpRequest,textStatus,errorThrown){
                           console.log(XMLHttpRequest,textStatus,errorThrown);
                           alert("eee");
                       }
                  });
              }
          });

</script>
</body>
</html>