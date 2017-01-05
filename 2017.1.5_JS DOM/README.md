```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .container{
            width: 90%;
            height: 400px;
            margin:0 auto;
        }
        .content{
            width: 100%;
            height: 60px;
            border-bottom: 2px solid #ccf;
        }
        h3,label{
            float: left;
        }
        label{
            margin-top: 15px;
            margin-left: 10px;
        }
        input{
            height: 25px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            background-color: rgba(0,0,90,.5);
            color: #fff;
            font-weight: bold;

        }
        input,p{
            float: left;
        }
        p{
            margin-left: 550px;
            line-height: 30px;
            font-weight: bold;
        }
        #span1{
            display: inline-block;
            width: 50px;
            height: 30px;
            margin:20px 0 0 500px;
            color: #ccc;
            font-weight: bold;
        }
        #span2{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <h3>TodoList</h3>
        <label for="user">
            <input type="text" id="text">
            <input type="button" value="添加" id="button">
        </label>
    </div>

    <script>
        var container = document.getElementsByClassName("container")[0];
        var button = document.getElementById("button");
        var text = document.getElementById("text");


        button.onclick = function () {
            var val = text.value;
            if(val == ""){
                 var div = document.createElement("div");
                 container.appendChild(div);
                 div.className = "content";

                 var content = document.getElementsByClassName("content")[0];
                 var input = document.createElement("input");
                 input.setAttribute("type","checkbox");
                 div.appendChild(input);
                 input.style.marginTop = "15px";

                var p = document.createElement("p");
                div.appendChild(p);
                p.id = "p";
                p.innerText = "你有新的任务啦，快来接受把！";
                p.style.color = "red";

                var span = document.createElement("span");
                div.appendChild(span);
                span.id = "span1";
                span.innerText = "删除";

                var span = document.createElement("span");
                div.appendChild(span);
                span.id = "span2";
                span.innerText = "接受";

                var span1 = document.getElementById("span1");
                span1.onclick = function () {
                    container.removeChild(div);
                };

                var span2 = document.getElementById("span2");
                var p = document.getElementById("p");
                span2.onclick = function () {
                    p.innerText = "你已接受此任务,快去完成吧！";
                    p.style.color = "#ccc";
                    p.style.textDecoration = "line-through";
                }
            }else {
                alert("程序还未完成，请不要输入内容");
            }
        }
    </script>
</div>
</body>
</html>
```