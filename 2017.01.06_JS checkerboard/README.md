<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
```css
    <style>
        #div{
            margin:0 auto;
            width: 620px;
            height: 680px;
            background-color: #b19408;
        }
        #di{
            width: 600px;
            height: 915px;
            margin:0 0 0 20px;
            position: absolute;
            top: 25px;
        }
        .che{
            width: 70px;
            height: 70px;
            border: 1px solid #666;
            float: left;
            box-shadow: inset 0 0 10px #0ff;
        }
        .chu{
            width: 600px;
            height: 70px;
            text-align: center;
            line-height: 60px;
            font-size: 40px;
            color: #777;
        }
    </style>
```
</head>
<body>
<div id="div">
    <div id="di"></div>
</div>
</body>
</html>
```js
<script>
    var di = document.getElementById("di");
    var che = document.getElementsByClassName("che");


        for(i=0;i<8;i++){
            var d1=document.createElement("div");
            d1.className = "che";
            di.appendChild(d1);
            for(j=0;j<3;j++){
                var d2=document.createElement("div");
                d2.className = "che";
                di.appendChild(d2);
            }
        }
        for(y=0;y<5;y++){
            var d3=document.createElement("div");
            d3.className = "chu";
            di.appendChild(d3);
            d3.innerHTML = "楚河"+"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+"汉界";
        }
        for(i=0;i<8;i++){
            var d1=document.createElement("div");
            d1.className = "che";
            di.appendChild(d1);
            for(j=0;j<3;j++){
                var d2=document.createElement("div");
                d2.className = "che";
                di.appendChild(d2);
            }
        }

</script>
```