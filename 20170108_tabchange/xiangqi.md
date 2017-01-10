<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    #box2{
        width: 420px;
        height: 481px;
        position: absolute;
        left: 50%;
        top: 50%;
        margin-left: -300px;
        margin-top: -240px;
        background-color: #b19408;
    }

    #box{
        width: 555px;
        height: 480px;
        position: absolute;
        left: 50%;
        top: 50%;
        margin-left: -204px;
        margin-top: -223px;
    }
    #box div{
        width: 405px;
        height: 50px;
    }
    #box span{
        padding-left: 46px;
        padding-bottom: 30px;
        border: 3px solid #676767;
    }
</style>
<body>
<div id="box2">
    <div id="box">

    </div>
</div>
<script>

    var box1 = document.getElementById("box");
    for(var j=1;j<10;j++) {
        var div1 = document.createElement("div");
        for (var i = 1; i < 9; i++) {
            var span = document.createElement("span");
            div1.appendChild(span);
            if(j == 5){
                span.style.border = "none";
                span.style.fontSize = "20px";
                span.innerHTML = "³þ ºº ±ß ½ç";
                span.style.paddingLeft = "148px";
                span.style.lineHeight = "2";
                break;
            }
            if(j==1 && i ==4){
                var i1 = document.createElement("i");
                span.appendChild(i1);
                i1.style.perspectiveOrigin="right top";
                i1.style.position="absolute";
                i1.style.width = "70px";
                i1.style.display="inline-block";
                i1.style.height="2px";
                i1.style.background = "#000";
                i1.style.transform = "rotate(45deg)";
            }
        }
        box1.appendChild(div1);
    }
</script>
</body>
</html>