## 一、概念题
### 1、什么是变量？什么是常量？
    变量是内存中的一块空间；
    常量是在程序运行时，不会被修改的量
### 2、什么是标识符？
    标识符是用来识别具体对象的一个名称。
    常见的标识符就是变量，以及后面要提到的函数名。
    javascript语言的标识符对大小写敏感
### 3、理解JavaScript中的区块。
    在JavaScript中的区域块可以理解为公共区域快和私有区域块，
    公共区域块包含所有的公共变量，
    私有区域块中的每一个函数都是一个独立的区域块
### 4、理解JavaScript中语句。
        在JavaScript中  我们如果需要计算机做出一个事情，我们就需要给计算机发出一个指令，这个指令就是语句。
     意思就是告诉计算机应该做什么。
## 二、简答题
### 1、JavaScript的组成，他们的全称是什么？中文名字是什么？
        ECMAScript:一套标准，最新标准es6
         基本的语法构造：操作符，控制结构，语句
         标准库：Array、 Date、 Math等
        BOM:browser object model, 浏览器对象模型
        DOM:Document Object Model, 文档对象模型
### 2、简述JavaScript的发展简史。
       1995 年Netscape 公司和Sun 公司联合开发出JavaScript 脚本语言，并在其Netscape Navigator 2 中实
    现了JavaScript 脚本规范的第一个版本即JavaScript 1.0 版
       1997 年，为了避免无序竞争，同时解决JavaScript 几个版本语法、特性等方面的混乱，JavaScript 1.1 作为
    草案提交给ECMA（欧洲计算机厂商协会），其定义
    了以JavaScript 为蓝本、全新的ECMAScript 脚本语言。
       1999 年6 月ECMA 发布ECMA-290 标准，其主要添加用ECMAScript 来开发可复用组件的内容。
       2005 年12 月ECMA 发布ECMA-357 标准（ISO/IEC 22537）出台，主要增加对扩展标记语言XML 的有效支持。
       2007年10月，ECMAScript 4.0版草案发布，对3.0版做了大幅升级。
       2009年12月，ECMAScript 5.0版正式发布。
       2011年6月，ECMAscript 5.1版发布，并且成为ISO国际标准（ISO/IEC 16262:2011）。
       2013年12月，ECMAScript 6草案发布。
### 3、简述JavaScript的能干的事。
        JS是一种页面脚本，通过执行程序脚本片段，我们可以对页面及页面上的元素进行操作，
    实现特定的功能与效果。有一些东西，我们用高级编程语言是实现不了的，     而用JS，可
    能几行代码就可搞定。比如，显示当前系统时间等。
### 4、标识符的命名规则。
    ①区分大小写，Myname与myname是两个不同的标识符。
    ②标识符首字符可以是以下划线（_）、美元符($)或者字母开始，不能是数字。
    ③标识符中其它字符可以是下划线（_）、美元符($)、字母或数字组成的。
### 5、JavaScript中的保留关键字。
|abstract |arguments|boolean | break|
|---|---|---|---|
|byte | catch|char | class |
|const | continue|debugger | default|
|delete|do|double|else|
|enum*|eval|export*|extends*|
|false| final|float|for|
|function|goto|if|implements|
|import*|in|instanceof|int|
|interface|let|long|native|
|new|null|package|private|
|protected|public|return|short|
|static|super*|switch|synchronized|
|this|throw|throws|transient|
|true|try|typeof|var|
|void|volatile|while|with|
|yield||||
### 6、简述JavaScript中的注释种类，并举例说明。
    第一种单行注释：
        ①用“//”.例：
```js
       // var a = 1; 双斜杠注释
```
    第二中多行注释“/**/”
```js
    /*
    *var b = 2;
    *var a = 1;
    */
```
### 7、简述JavaScript中的输出方式。
    console.log(); # //日志
    console.info();  信息
    console.warn();  警告
    console.error(); 错误
    document.innerText = "  "; 文本
    document.write();

