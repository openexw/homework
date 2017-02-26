<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>发表评论</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <style>
        .content .col-md-11{
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="h1">我的评论</h1>
    <div class="con_list">
        <?php
        require_once 'db_pl.php';
        $mysqli = connent();
        $rows = queryData($mysqli);

        $html = "";
        for($i = 0; $i < count($rows); $i++){
            $html .= '<div class="content">
        <div class="row">
            <div class="col-md-2">
                <h2 class="h2 text-primary">'.$rows[$i]["title"].'</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-11 text-left">
                '.$rows[$i]["content"].'
            </div>
        </div>
    </div>';
        }
        echo $html;
        ?>
    </div>


    <form action="" >
        <form action="">
            <div class="addnew">
                <div class="form-group has-feedback">
                    <label for="username">标题</label>
                    <input type="text" class="form-control" id="title" placeholder="请输入标题">
                </div>
                <div class="form-group">
                    <label for="comment">评论</label>
                    <textarea class="form-control" rows="3" id="content"></textarea>
                </div>
                <div class="form-group">
                    <label for="verify">验证码</label>
                    <input type="text" id="verify" placeholder="请输入验证码">
                    <img src="coding.php" alt="" id="verify-img" onclick="veri()">
                </div>
                <input type="button" id="submit" value="发表" class="btn btn-default"/>
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
        var title = $("#title").val(),
            content = $("#content").val(),
        verify = $("#verify").val();
        console.log(title,content);
        if(title == "" || content == "" || verify == ""){
            alert("请输入内容");
        }else{
            $.ajax({
                url:'action_3.php',
                type:"POST",
                data:{
                    title:title,
                    content:content,
                    verify:verify
                },
                success:function(data){
                    console.log(data);
                    if(data == 1){
                        var html = '<div class="content">'+
                            '<div class="row">'+
                            '<div class="col-md-2">'+
                            '<h2 class="h2 text-primary">'+title+'</h2>'+
                            '</div>'+
                            '</div>'+
                            '<div class="row">'+
                            '<div class="col-md-11 text-left">'+content+'</div>'+
                            '</div>'+
                            '</div>';
                        $(".con_list").append(html);
                        $("#title").val("");
                        $("#comment").val("");
                        $("#verify").val("");
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