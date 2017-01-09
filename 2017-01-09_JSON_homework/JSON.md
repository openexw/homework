### 1.将获取的数据转换成字符串

```
<script>
    var ss = {
        "error": false,
        "results": [
            {
                "_id": "575cb383421aa96b20cafaca",
                "createdAt": "2016-06-12T08:57:39.269Z",
                "desc": "\u6ee4\u955cSDK",
                "publishedAt": "2016-06-12T12:04:04.308Z",
                "source": "chrome",
                "type": "Android",
                "url": "https://github.com/Zomato/AndroidPhotoFilters",
                "used": true,
                "who": "MVP"
            },
            {
                "_id": "572c61ca67765974f5e27eaa",
                "createdAt": "2016-05-06T17:20:10.329Z",
                "desc": "\u4e00\u952e\u6d4b\u51fa\u4f60\u4e0e\u7167\u7247\u4e2d\u7269\u4f53\u7684\u8ddd\u79bb",
                "publishedAt": "2016-05-09T12:05:34.903Z",
                "source": "web",
                "type": "Android",
                "url": "https://github.com/shixinzhang/DistanceMeasure",
                "used": true,
                "who": "Shixin Zhang"
            },
            {
                "_id": "56cc6d23421aa95caa707977",
                "createdAt": "2015-11-08T08:47:38.808Z",
                "desc": "\u9002\u7528\u4e8eJava\u548cAndroid\u7684\u5feb\u901f\u3001\u4f4e\u5185\u5b58\u5360\u7528\u7684\u6c49\u5b57\u8f6c\u62fc\u97f3\u5e93",
                "publishedAt": "2015-11-09T04:20:34.105Z",
                "type": "Android",
                "url": "https://github.com/promeG/TinyPinyin",
                "used": true,
                "who": "mthli"
            },
            {
                "_id": "56cc6d23421aa95caa707a18",
                "createdAt": "2015-07-11T01:08:06.680Z",
                "desc": "Android\u4e0a\u7684\u4e00\u4e2a\u4e0b\u8f7d\u5e93",
                "publishedAt": "2015-07-14T06:16:34.769Z",
                "type": "Android",
                "url": "https://github.com/majidgolshadi/Android-Download-Manager-Pro",
                "used": true,
                "who": "mthli"
            },
            {
                "_id": "56cc6d29421aa95caa708337",
                "createdAt": "2016-02-23T05:41:44.207Z",
                "desc": "Android 6.0 \u8fd0\u884c\u65f6\u6743\u9650\u5904\u7406\u5b8c\u5168\u89e3\u6790",
                "publishedAt": "2016-02-24T04:42:32.50Z",
                "type": "Android",
                "url": "http://blog.csdn.net/lmj623565791/article/details/50709663",
                "used": true,
                "who": "\u9c8d\u6c38\u7ae0"
            },
            {
                "_id": "56e9155167765933dbbd2059",
                "createdAt": "2016-03-16T16:12:01.130Z",
                "desc": "\u4e00\u4e2a\u7528\u4e8e\u5c55\u793a\u6ce8\u518c\u8fdb\u5ea6\u7684view ",
                "publishedAt": "2016-03-17T11:14:16.306Z",
                "source": "chrome",
                "type": "Android",
                "url": "https://github.com/jiang111/ProgressView",
                "used": true,
                "who": "NewTab"
            },
            {
                "_id": "56f881de677659164d56442d",
                "createdAt": "2016-03-28T08:59:10.205Z",
                "desc": " \u8bbe\u7f6e\u72b6\u6001\u680f\u7684\u5de5\u5177\u7c7b",
                "publishedAt": "2016-03-28T11:43:51.83Z",
                "source": "chrome",
                "type": "Android",
                "url": "https://github.com/laobie/StatusBarUtil",
                "used": true,
                "who": "MVP"
            },
            {
                "_id": "56cc6d26421aa95caa708022",
                "createdAt": "2015-12-18T03:49:42.306Z",
                "desc": "Java 8 Stream and why you should use it",
                "publishedAt": "2015-12-23T03:52:41.868Z",
                "type": "Android",
                "url": "https://medium.com/@nicopasso/java-8-stream-on-android-c629e4237d5f#.95m9yht7j",
                "used": true,
                "who": "\u72c4\u5bb6\u6021"
            },
            {
                "_id": "570c61ba6776590f608f0be9",
                "createdAt": "2016-04-12T10:47:22.803Z",
                "desc": "\u53ef\u5bf9\u6587\u5b57\u8fdb\u884c\u653e\u5927\u7f29\u5c0f\u548c\u5c55\u793a\u672a\u8bfb\u63d0\u793a\u7684PageIndicator",
                "publishedAt": "2016-04-12T11:47:37.342Z",
                "source": "chrome",
                "type": "Android",
                "url": "https://github.com/jiang111/ScalingIndicator",
                "used": true,
                "who": "NewTab"
            },
            {
                "_id": "57c520df421aa9125d96f534",
                "createdAt": "2016-08-30T13:59:59.568Z",
                "desc": "Android \u6743\u9650\u5224\u65ad\u5de5\u5177\uff0c\u5e76\u4e14\u5bf9\u5c0f\u7c73\u624b\u673a\u505a\u4e86\u7279\u522b\u5224\u65ad",
                "publishedAt": "2016-08-31T11:41:56.41Z",
                "source": "web",
                "type": "Android",
                "url": "https://github.com/a1018875550/PermissionDispatcher",
                "used": true,
                "who": "JokAr"
            },
            {
                "_id": "5714b12c67765974fbfcf915",
                "createdAt": "2016-04-18T18:04:28.120Z",
                "desc": "Android\u952e\u76d8\u9762\u677f\u51b2\u7a81 \u5e03\u5c40\u95ea\u52a8\u5904\u7406\u65b9\u6848",
                "publishedAt": "2016-04-20T11:46:37.909Z",
                "source": "chrome",
                "type": "Android",
                "url": "https://github.com/Jacksgong/JKeyboardPanelSwitch",
                "used": true,
                "who": "AndWang"
            },
            {
                "_id": "56cc6d26421aa95caa707d18",
                "createdAt": "2015-09-15T15:04:39.157Z",
                "desc": "Android Floating Action Button based on Material Design specification",
                "publishedAt": "2015-09-16T03:34:05.101Z",
                "type": "Android",
                "url": "https://github.com/Clans/FloatingActionButton",
                "used": true,
                "who": "lxxself"
            },
            {
                "_id": "57e085e6421aa95bcb130152",
                "createdAt": "2016-09-20T08:42:14.877Z",
                "desc": "\u76ee\u524d\u6765\u770b Android \u4e0a\u6700\u68d2\u7684\u4e00\u6b3e\u5bcc\u6587\u672c\u7f16\u8f91\u5668\u3002",
                "images": [
                    "http://img.gank.io/bcd15b76-c92e-4444-adf6-74301176fbf5"
                ],
                "publishedAt": "2016-09-21T11:37:24.210Z",
                "source": "chrome",
                "type": "Android",
                "url": "https://github.com/wasabeef/richeditor-android",
                "used": true,
                "who": "\u4ee3\u7801\u5bb6"
            },
            {
                "_id": "57a9a6ef421aa90b3aac1ed9",
                "createdAt": "2016-08-09T17:48:31.172Z",
                "desc": "\u5b89\u5353\u97f3\u9891\u5f55\u5236",
                "images": [
                    "https://raw.githubusercontent.com/adrielcafe/AndroidAudioRecorder/master/screenshots.png"
                ],
                "publishedAt": "2016-08-11T12:07:01.963Z",
                "source": "chrome",
                "type": "Android",
                "url": "https://github.com/adrielcafe/AndroidAudioRecorder",
                "used": true,
                "who": "\u848b\u670b"
            },
            {
                "_id": "58608596421aa9723a5a77ce",
                "createdAt": "2016-12-26T10:51:02.683Z",
                "desc": "Android HTML to TextView Builder \u8f85\u52a9\u5de5\u5177\u5e93\u3002",
                "images": [
                    "http://img.gank.io/47df6353-9a3e-47e1-af56-9c36502720a5"
                ],
                "publishedAt": "2016-12-26T11:40:05.242Z",
                "source": "chrome",
                "type": "Android",
                "url": "https://github.com/jrummyapps/html-builder",
                "used": true,
                "who": "\u4ee3\u7801\u5bb6"
            },
            {
                "_id": "57e31e0c421aa95bcb13016e",
                "createdAt": "2016-09-22T07:55:56.609Z",
                "desc": "\u952f\u9f7f\u8fb9\u6846\uff0c\u7c7b\u4f3c\u4f18\u60e0\u52b5\u6548\u679c\u7684\u81ea\u5b9a\u4e49 View",
                "images": [
                    "http://img.gank.io/eac94de0-a778-4d6f-902f-4ef1a201009b"
                ],
                "publishedAt": "2016-09-22T11:44:08.156Z",
                "source": "chrome",
                "type": "Android",
                "url": "https://github.com/dongjunkun/CouponView",
                "used": true,
                "who": "\u4ee3\u7801\u5bb6"
            },
            {
                "_id": "56cc6d1d421aa95caa7076bc",
                "createdAt": "2015-06-25T01:45:33.941Z",
                "desc": "RecyclerView\u7684\u6ed1\u52a8\u5220\u9664\u4e0e\u62d6\u52a8\u6392\u5e8f\u7c7b\u5e93",
                "publishedAt": "2015-06-26T04:31:57.953Z",
                "type": "Android",
                "url": "https://github.com/iPaulPro/Android-ItemTouchHelper-Demo",
                "used": true,
                "who": "Jason"
            },
            {
                "_id": "56cc6d1d421aa95caa707611",
                "createdAt": "2015-06-12T05:54:02.168Z",
                "desc": "\u4e00\u6b3e\u57fa\u4e8eMaterial Design \u8bbe\u8ba1\u7684\u5f00\u6e90\u7b14\u8bb0\u672c\u5e94\u7528",
                "publishedAt": "2016-03-10T12:54:31.68Z",
                "type": "Android",
                "url": "https://github.com/lguipeng/Notes",
                "used": true,
                "who": "mthli"
            },
            {
                "_id": "56cc6d23421aa95caa707abc",
                "createdAt": "2015-06-10T04:45:12.156Z",
                "desc": "\u4e3aAndroid\u63d0\u4f9b\u4e0d\u53ef\u6539\u53d8\u7684\u6570\u636e\u96c6\u652f\u6301",
                "publishedAt": "2015-06-11T03:30:39.976Z",
                "type": "Android",
                "url": "https://github.com/konmik/solid",
                "used": true,
                "who": "mthli"
            },
            {
                "_id": "56cc6d26421aa95caa70809f",
                "createdAt": "2015-12-28T01:46:24.186Z",
                "desc": "\u70b9\u8d5e\u6309\u94ae\u7684\u52a8\u753b\u6548\u679c",
                "publishedAt": "2015-12-28T04:17:42.961Z",
                "type": "Android",
                "url": "https://github.com/jd-alexander/LikeButton",
                "used": true,
                "who": "MVP"
            }
        ]
    };

for(var i in ss){
        console.log(ss);
}
var s = JSON.stringify(ss ,"" ," ");
    console.log(s);
</script>
```

### 2.将数据保存到local storage，并获取local storage中的数据,
将获取的数据解析为JSON对象。

使用set local storage保存和get local storage获取；
parse转换为JSON对象。

        //存到本地存储
        localStorage.setItem("ss",s);
        //删除指定的localStorage
        localStorage.removeItem("s");
        //获取localStorage中的数据
        var obj = localStorage.getItem("ss");
        //转换为JSON对象
        var S = JSON.parse(s);
        console.log(S);

### 3.将json对象中的数据绑定到html中

![image](D:\wwwroot\2017-01-09_JSON_homework\img\jj.png)


    <style>
        *{
            padding: 0;
            margin: 0;
        }
        div{
            margin:0 auto;
            width: 50%;
            background-color: #ddd;
        }
        li{
            width: 99.9%;
            height: 200px;
            list-style: none;
            border:1px solid #999;
        }
        img{
            width: 20%;
            height: 200px;
        }
        a{
            margin-left: 22%;
            padding:10px 0;
        }
        h2{
            margin-left: 22%;
        }
        i{
            margin-left: 22%;
            font-style: normal;
            font-size: 18px;
        }
    </style>
</head>
<body>
<div>
<ul id="ls">
    <li>
        <img src="" alt="">
        <a href="">标题</a>
        <i>发布时间： <span></span></i>
        <i>作者: <span></span></i>
        <i>分类: <span></span></i>
    </li>
</ul>
</div>
<script src="ss.js"></script>
<script>

    /**
     * 数据绑定
     * json ==> html中
     * @type {Element}
     */
   var ls = document.getElementById("ls");
   var d = ss.results;
   var html = "";
    for(var i=0; i< d.length; i++){
        html += createList(d[i]);
    }
    ls.innerHTML = html;
    function createList(ss){
        var imgUrl = "";
        if(ss["images"]){
            imgUrl = ss["images"][0];
        }
        var html = '<li>'+
                    '<img src="'+imgUrl+'" alt="">'+
                    '<a href="'+ss["url"]+'">标题</a>'+
                    '<i>发布时间： <span>'+ss["publishedAt"]+'</span></i>'+
                    '<i>作者: <span>'+ss["who"]+'</span></i>'+
                    '<i>分类: <span>'+ss["type"]+'</span></i>'+
                    '</li>';
        return html;
    }
</script>