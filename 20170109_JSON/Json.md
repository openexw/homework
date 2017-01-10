<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    ul li{
        width: 800px;
        height: 50px;
        border: 1px solid #000;
    }
</style>
<body>

<ul id="list">
    <li>
        <img src="" alt="">
        <br>
        <a href="http://baidu.com">����</a>
        <br>
        <em>����ʱ�䣺 <span></span></em>
        <br>
        <em>����: <span></span></em>
        <br>
        <em>����: <span></span></em>
    </li>
</ul>
<script src="data.js"></script>
<script>
    var list = document.getElementById("list");
   var d = data.results;
   var html = "";
    for(var i=0; i< d.length; i++){
        html += createList(d[i]);
    }
    list.innerHTML = html;
    function createList(data){
        var imgUrl = "";
        if(data["images"]){
            imgUrl = data["images"][0];
        }
        var html = ' <li>'+
                '<img src="'+imgUrl+'" alt="">'+
                '<a href="'+data["url"]+'">����</a>'+
                '<i>����ʱ�䣺 <span>'+data["publishedAt"]+'</span></i>'+
                '<i>����: <span>'+data["who"]+'</span></i>'+
                '<i>����: <span>'+data["type"]+'</span></i>'+
                '</li>';
        return html;
    }
</script>

</body>
</html>