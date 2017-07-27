# HTML新增元素

## 主体结构元素

+ article：文章
+ section：定义文档中的节（section、区段）。比如章节、页眉、页脚或文档中的其他部分。
+ nav：导航
+ aside：页面内容之外的内容。通常用于侧边栏
+ time：定义日期/时间。

## 非主体结构元素

+ header：定义 section 或 page 的页眉
+ hgroup：
+ footer：定义 section 或 page 的页脚

用在article或者section里面

```html
<body>
    <!-- 网页标题 -->
    <header>
        <h1>网页标题</h1>
        <!-- 网站导航链接 -->
        <nav>
            <li>
                <a href="example.html"></a>
            </li>
            <li>
                <a href="example.html"></a>
            </li>
        </nav>
    </header>
    <!-- 文章正文 -->
    <article>
        <hgroup>
            <h1>文章主标题</h1>
            <h2>文章子标题</h2>
        </hgroup>
        <p>文章正文</p>
        <!-- 文章评论 -->
        <section class="comment">
            <h1>评论标题</h1>
            <p>评论正文</p>
        </section>
    </article>
    <!-- 版权信息 -->
    <footer>
        <small>版权所有：hawen</small>
    </footer>

</body>
```

# 本地存储
+ Local Storage
+ Session Storage


## Local Storage

**检测浏览器是否支持**

```js
if(window.localStorage){
    console.log("浏览器支持");
    //some code
}else{
    console.log("浏览器不支持");
    //some code 
}
```

Note: 增、删、改、查

**存储数据（增、改）——`setItem(key, data)`**

参数说明：

- key: 存储的名字,string
- data: 本地存储的数据,string（如果传值不是string类型的，js会自动转换成string类型的数据）

```js
localStorage.setItem("user", "34");
//localStorage.setItem("user", 34);
//localStorage.setItem("user", {"user":"jac"});
//localStorage.setItem("user", [1,"34"]);

//getItem后面再说
var usr = localStorage.getItem("user");

console.log(typeof usr); //string
```

**获取数据（查）——`getItem(key)`**

- key: 存储的名字,string

```js
//第一种方式
var usr = localStorage["user"];

//第二种方式（推荐）
var usr = localStorage.getItem("user");
```

**删除（）——`getItem(key)`**

+ 删除全部的本地存储——`clear()`
+ 删除指定的存储——`removeItem(key)`

参数说明

    - key：存储的key值
    
```js
localStorage.removeItem("user");
localStorage.clear();
```

**补充**

+ JSON.stringify(value): 将JSON数据转换成字符串
+ JSON.parse(jsonString)：将字符串转换成json

# video/audio

**第一种方式：**
```html
<video src="mv.mp4" controls width="500" height="400" poster="">
    您的浏览器不支持video标签！
</video>
```

**第二种方式：**

```html
<video width="320" height="240" controls="controls">
    <!--浏览器将识别第一个-->
    <source src="mv.mp4" type="video/mp4">
    <source src="mv.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>
```

## video的属性介绍：

+ autoplay: 视频在就绪后马上播放
+ controls: 向用户显示控件
+ height: 设置播放器的高度
+ width: 设置播放器的宽度
+ loop: 视频循环播放
+ preload: 视频在页面加载时进行加载，并预备播放。如果使用 "autoplay"，则忽略该属性。
+ src: 要播放的视频的 URL
+ poster: 设置视频没播放之前的封面

## Video API
### 事件
+ oncanplay: 当文件就绪可以开始播放时运行的脚本（缓冲已足够开始时）。
+ ontimeupdate：当播放位置改变时（比如当用户快进到媒介中一个不同的位置时）运行的脚本。
+ onended：当媒介已到达结尾时运行的脚本（可发送类似“感谢观看”之类的消息）。

 
### 常用API属性
+ duration：返回当前音频/视频的长度（以秒计）
+ paused：设置或返回音频/视频是否暂停
+ currentTime：设置或返回音频/视频中的当前播放位置（以秒计）
+ muted: 设置或返回视频是否应该被静音
+ volume:： 设置视频/音频的音量大小
### 常用API方法
+ play()：开始播放音频/视频
+ pause()：暂停当前播放的音频/视频


http://www.imooc.com/article/details/id/11369

https://github.com/openexw/homework/tree/master/homework/20170109_json
