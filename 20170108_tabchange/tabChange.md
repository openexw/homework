<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    li{
        list-style: none;
        float: left;
        padding-left: 30px;
    }
    #tabCon li{
        display:none;
    }
    ul .active{
        display: block;
        background-color: #fff;
    }
    .box{
        width: 300px;
        height: 500px;
        border: 1px solid #000;
    }
</style>
<body>
<div class="box">
    <ul id="tabTit">
        <li><a href="#">Ò³Ãæ1</a></li>
        <li><a href="#">Ò³Ãæ2</a></li>
    </ul>
    <br>
    <ul id="tabCon">
        <li class="active">hheheheh</li>
        <li>hahaahhaha</li>
    </ul>
</div>
<script>
        var tbt1 = document.getElementById("tabTit");
        var li1 = tbt1.children;
        var tbt2 = document.getElementById("tabCon");
        var li2 = tbt2.children;

        for(var i=0;i<li1.length;i++){
            li1[i].index =i;
            li1[i].onmouseover = function () {
                for(var j =0;j<li2.length;j++){
                    li2[j].style.display ="none";
                }
                li2[this.index].style.display = "block";
            }
        }
</script>
</body>
</html>