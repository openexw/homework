### jquer 选择器
1 基本选择器

2 关系选择器

3 伪 类选择器

4 关系选择器

$ ("# mydiv")

window.onload:需要页面中dom数、图片、的所有资源加载完之后才运行JavaScript

$（document）.read():当dom树加载完成后就可以运行JavaScript

# 事件
### $（“#div ”）.on( "click",function(){}
)//添加事件
### $("#div").off("click",function(){})//删除事件
# ajaxs
~~~
13:37:05
张德瑶 2017/1/13 13:37:05
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script>
    // AJAX
    //1.创建XMLHTTPRequest
    /*
     if(window.XMLHttpRequest){
     var ajax = new XMLHttpRequest();
     }else{//非IE6
     var ajax = new ActiveXObject("Microsoft.XMLHTTP");
     }
    */


    //2.与服务器之间进行连接
    /*
     方法 文件名 是否异步
     ajax天生就是异步操作的
     同步：一件一件来
     异步：多件事一起
    */
    //ajax.open("GET", url, true);

    //GET与POST的区别
    /*
    GET:通过网站
    能在浏览器地址看到请求的内容数据
    长度有限:4k-10k 容量小
    安全性差
    有缓存
    更适合获取数据
     */
    /*
    POST:通过HTTP content
    容量相对比较大：2G
    安全性好一点
    没有缓存
    更适合上传数据
    安全性高的走法：走https协议
     */


    //3.发送请求
   // xmlhttp.send()


    //4.接受响应
    /*ajax.onreadystatechange = function(){
      0 未初始化，还没有调用open
      1 载入，已经调用send方法，正在发送请求
      2 载入完成，send已经完成，已接受到全部响应内容
      3 解析，正在解析响应内容
      4 完成，响应内容解析完成，可以在客户端调用了
        if(ajax.readyState == 4){ //浏览器与服务器进行到哪一步 4表示整个过程已经完成
            if(ajax.status == 200){
                fnS(ajax.readAsText);
                //console.log("成功了", ajax.readAsText);
            }else{
                if(fnF){
                    fnF(ajax.status);
                }
            }
        }
    }*/

</script>
</body>
</html>
~~~
