# 一、概念题

**1. 什么是变量？什么是常量？**

广义的讲，变量就是可以变化的量，但在编程语言中，它指的就是内存的一块空间。

常量：在程序运行时不允许改变的量。（常量只允许赋值一次）

**2. 什么是标识符？**

标识符（identifier）是用来识别具体对象的一个名称。

**3. 理解JavaScript中的区块。**

JavaScript使用大括号，将多个相关的语句组合在一起，称为“区块”（block）。

**5. 理解JavaScript中语句。**

语句（statement）是为了完成某种任务而进行的操作。比如：

```js
var a = 1+2;
```
上述语句中有几个操作：

+ 声明变量`a`
+ 计算表达式`1+2`
+ 将计算的结果赋值给变量`a`

# 二、简答题

**1. JavaScript的组成，他们的全称是什么？中文名字是什么？**

+ ECMAScript: JavaScript的核心。
    + 语法
    + 错误处理机制
    + 类型
    + 全局对象（window）
    + 基于原型的继承机制
    + 内置对象和函数
    + 严格模式
+ DOM：Document Object Model，文档对象模型（宿主对象）
    + 文档结构
    + 树模型
    + DOM事件架构
+ BOM：Browser Object Model，浏览器对象模型

**2. 简述JavaScript的发展简史。**

+ 1995年，网景公司的布兰登·艾奇用10天时间，设计出了JavaScript第一版；
+ 1995年12月，Netscape公司与Sun公司联合发布了JavaScript语言；
+ 1997年，以JavaScript1.1为蓝本交给了欧洲计算机制造商协会（ECMA），并发布了ECMA-262
+ 1998年，ECMAScript 2.0版发布；
+ 1999年12月，ECMAScript 3.0版发布，成为JavaScript的通行标准；
+ 2007年10月，ECMAScript 4.0版草案发布；
+ 2009年12月，ECMAScript 5.0版正式发布；
+ 2011年6月，ECMAscript 5.1版发布，并且成为ISO国际标准；
+ 2013年12月，ECMAScript 6草案发布；
+ 2015年6月，ECMAScript 6正式发布。

**3. 简述JavaScript的能干的事。**

+ 浏览器端的网页特效，主要负责网页中的“行为”部分；
+ 服务器端的开发，基于Node
+ 操作数据库，如PostgreSQL
+ 跨移动平台应用，如PhoneGap、React Native、cordova等
+ 嵌脚本语言 越来越多的应用程序
+ 桌面应用，框架如：nw.js，应用如：VSCode、atom
+ ...


**4. 标识符的命名规则。**


1. js语言对标识符大小写敏感；
2. js的标识符包含字母、数字、下划线(_)、美元符号($)、π和数字；
3. 标识符的首字母不能为数字;
4. 保留关键字不能作为变量；
5. `Infinity`、`NaN`、`undefined`不能作为标识符。

**5. JavaScript中的保留关键字。**

参考链接：[菜鸟教程](http://www.runoob.com/js/js-reserved.html)

**6. 简述JavaScript中的注释种类，并举例说明。**

注释种类：

+ 单行注释,如：`// comment`
+ 多行注释，如：`/* comment */`
+ 使用html注释
    + `<!--`
    + `-->`, 它只能写在首行

**7. 简述JavaScript中的输出方式。**

+ 弹出窗口，`alert()`或者`window.alert()`；
+ 在网页中输出html内容，`dom.innerHtml = "sddd"`；
+ 在网页中输出文本内容， `dom.innerText = ""`；
+ 在网页中输出内容, `document.write()`；
+ 在控制台中打印日志，`console.log()/warn()/info()/erro()`