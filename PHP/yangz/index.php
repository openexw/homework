<?php
require_once "connect_mysql.php";
$mysqli = connect();
$roww = querydata($mysqli);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        li{
            list-style: none;
        }
        a{
            text-decoration: none;
        }
        .content{
            width: 1024px;
            background-color: #f3f3f3;
            margin:auto;
            padding:50px 0 100px 50px;
        }
        .comman li{
            display: block;
            margin-bottom:20px;
        }
        .comman a{
            display: block;
            font-size: 20px;
            text-decoration: none;
        }
        .comman span{
            color: #666;
            font-size:16px;
            font-family:"楷体";
        }
        .input-group{
            width: 720px;
        }
        .input{
            height: 40px;
        }
        .con{
            position: relative;
            top: 0;
            font-size: 18px;;
        }
       /* .content_login{
            display: none;
        }*/
    </style>
</head>
<body>
<div class="content">
    <h1>评价：zhang</h1>
    <ul class="comman">
        <?php
        $html ="";
        for ($i=0;$i<count($roww);$i++){
            $html .=
            '<li>'.
                '<a href="">'.$roww[$i]["username"].'</a>'.
                '<span>'.$roww[$i]["content"].'</span>'.
            '</li>';
        }
        echo $html;
        ?>
        <li class="con_list">
        </li>
    </ul>
    <br />
    <div class="content_login">
        <label for="basic-url">你的邮箱</label>
        <div class="input-group">
            <span class="input-group-addon ">@</span>
            <input type="text" id="email" class="form-control input" placeholder="请输入邮箱" aria-describedby="basic-addon1">
        </div>
        <br />
        <label for="basic-url">你的昵称</label>
        <div class="input-group">
            <span class="input-group-addon glyphicon glyphicon-user con"></span>
            <input type="text" id="username" class="form-control input" placeholder="请输入用户名" aria-describedby="basic-addon1">
        </div>
        <br />
        <label for="basic-url">评论</label>
        <div class="input-group">
            <textarea name="" id="content" cols="100" rows="6"></textarea>
        </div>
        <br />
        <label for="verify">验证码</label>
        <div class="input-group">
            <input type="text" id="verify" placeholder="请输入验证码">
            <img src="yangzheng2 .php" alt="" id="verify_img" onclick="verifition()" />
        </div>
        
        <div class="input-group">
            <input type="button" class="btn btn-info login1" value="发表">
        </div>
    </div>
</div>
<script src="jquery.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script>
function verifition(){
    $("#verify_img").attr("src","yangzheng2.php?temp="+(new Date().getTime()));
}
    $(".login1").click(function(){
        var email =$("#email").val(),
               username =$("#username").val(),
               content =$("#content").val();

        if(email == "" || username == "" || content == ""){
            alert("请输入内容");
        } else{
            $.ajax({
                url: "back_end.php",
                type: "POST",
                data: {
                    email:email,
                    username:username,
                    content:content
                },
                success: function(data){
                   if(data == 1){
                       var html =
                           '<li>'+
                               '<a href="">'+username+'</a>'+
                               '<span>'+content+'</span>'+
                           '</li>';
                       $(".con_list").append(html);
                       $("#email").val("");
                       $("#username").val("");
                       $("#content").val("");
                   }else{
                       alert("评论失败");
                   }
                },
                error:function(XMLHttpRequest,textStatus,errorThrown){
                    console.log(XMLHttpRequest,textStatus,errorThrown);
                }
            });
        }
    }); 
</script>


</body>
</html>