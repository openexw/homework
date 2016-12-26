#homework of first js-couse

1 什么是变量？什么是常量？
~~~~
与代数一样，JavaScript 变量可用于存放值（比如 x=5）和表达式（比如 z=x+y）。
变量可以使用短名称（比如 x 和 y），
也可以使用描述性更好的名称（比如 age, sum, totalvolume）。

常量：老师说是只能赋值一次的量。
~~~~

2 什么是标识符？
~~~~
标识符必须是以字母、下划线、美元号等符号开头的,其后可以是零个或若干个字母、
数字、下划线、美元好等符号组成的字符串。
在JavaScript中预定义的运算符如：+、-、*、/、%不可以用于定义标识符。
每个标识符可以有若干个单词左右连接而成，常量标识符应该全部使用大写字母来表示区别
一般标识符应该全部使用小写字母以示区别，特殊常量标识符应该以大写字母开头以示区别
，函数的标识符应该以小写字母开头以示区别，不要使用JavaScript中预定义保留的关键字。
JavaScript严格区分大小写字母。

~~~~

3 理解JavaScript中的区块
~~~~
JS是按照代码块来进行编译和执行的，代码块间相互独立，但变量和方法共享。
JS代码块是从上到下依次执行。
~~~~

4理解JavaScript中语句
~~~~
 JavaScript 语句 :
 JavaScript 语句向浏览器发出的命令。语句的作用是告诉浏览器该做什么。
 JavaScript 语句:
 JavaScript 语句是发给浏览器的命令。
 这些命令的作用是告诉浏览器要做的事情。
 下面的 JavaScript 语句向 id="demo" 的 HTML 元素输出文本 "你好 Dolly" ：
~~~~
```
document.getElementById("demo").innerHTML = "你好 Dolly";
```

二、 简答题

1. JavaScript的组成，他们的全称是什么？中文名字是什么？
~~~~
JS全称为javascript,是一种由Netscape的LiveScript发展而来的脚本语言,
主要目的是为了解决服务器终端语言遗留的速度问题。

ECMAscript 一套标准。最新的标准ES6
基本语法构成，比如操作符、控制结构语句
标准库、Array 、Date、math等
BOM, Browser Objeck Model浏览器对象模型
Dom；document object model文档对象模型

~~~~
2 简述JavaScript的发展简史。
~~~~
JavaScript诞生于1995年。起初它的主要目的是处理以前由服务器端负责的一些表单验证。
在那个绝大多数用户都在使用调制解调器上网的时代，用户填写完一个表单点击提交，需要等待几十秒，
完了服务器反馈给你说某个地方填错了......在当时如果能在客户端完成一些基本的验证绝对是令人兴奋的。
当时走在技术革新最前沿的Netscape（网景）公司，决定着手开发一种客户端语言，用来处理这种装简单的验证。
当时就职于Netscape公司的布兰登·艾奇开始着手计划将1995年2月发布的LiveScript同时在浏览器和服务器中使用。
为了赶在发布日期前完成LiveScript的开发，Netscape与Sun公司成立了一个开发联盟。
而此时，Netscape为了搭上媒体热炒Java的顺风车，临时把LiveScript改名为JavaScript，所以从本质上来说JavaScript和Java没什么关系。
JavaScript 1.0获得了巨大的成功，Netscape随后在Netscape Navigator 3（网景浏览器）中发布了JavaScript 1.1。
之后作为竞争对手的微软在自家的IE3中加入了名为JScript（名称不同是为了避免侵权）的JavaScript实现。
而此时市面上意味着有3个不同的JavaScript版本，IE的JScript、网景的JavaScript和ScriptEase中的CEnvi。
当时还没有标准规定JavaScript的语法和特性。随着版本不同暴露的问题日益加剧，JavaScript的规范化最终被提上日程。
1997年，以JavaScript1.1为蓝本的建议被提交给了欧洲计算机制造商协会
（ECMA，European Computer Manufactures Association）
该协会指定39号技术委员会负责将其进行标准化，
TC39来此各大公司以及其他关注脚本语言发展的公司的程序员组成，
经过数月的努力完成了ECMA-262——定义了一种名为ECMAScript的新脚本语言的标准。
第二年，ISO/IEC（国标标准化组织和国际电工委员会）也采用了ECMAScript作为标准（即ISO/IEC-16262）。

~~~~
3 简述JavaScript的能干的事。
~~~~
用JavaScript能实现很炫的功能，但其实这些功能都是浏览器自己带的功能，
如果浏览器不允许，没有API就很难用JavaScript实现。
而浏览器是用C++等其他语言编写成的。
~~~~
4 标识符的命名规则
~~~~
变量首字不能为数字 和运算符，运算符不能出现在变量名中，
一下不能用于标识符命名：
JavaScript 保留关键字，JavaScript 对象、属性和方法
Windows 保留关键字
HTML 事件句柄
非标准 JavaScript
~~~~

5 JavaScript中的保留关键字
~~~~
Javascript 的保留关键字不可以用作变量、标签或者函数名。
有些保留关键字是作为 Javascript 以后扩展使用
JavaScript 经常与 Java 一起使用。
应该避免使用一些 Java 对象和属性作为 JavaScript 标识符：
也应该避免使用 JavaScript 内置的对象、属性和方法的名称作为 Javascript 的变量或函数名
getClassArray
Date、eval、function、hasOwnProperty、Infinity、isFinite、isNaN、isPrototypeOf、Math
java、JavaArray、javaClass、JavaObject、JavaPackage
~~~~
6 简述JavaScript中的注释种类，并举例说明。
~~~~
JavaScript 不会执行注释。
我们可以添加注释来对 JavaScript 进行解释，或者提高代码的可读性。
单行注释以 // 开头。
本例用单行注释来解释代码：
// 输出标题：
document.getElementById("myH1").innerHTML="欢迎来到我的主页";
~~~~
7 简[M (2述JavaScript中的输出方式
~~~~
JavaScript 没有任何打印或者输出的函数。
JavaScript 显示数据 可以通过不同的方式来输出数据：
使用 window.alert() 弹出警告框。
使用 document.write() 方法将内容写到 HTML 文档中。
使用 innerHTML 写入到 HTML 元素。
使用 console.log() 写入到浏览器的控制台。
~~~~