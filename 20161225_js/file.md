###js作业
#### 一.概念
1. 什么是变量？什么是常量？
```bash
1. 变量（Variable）：用来储存数据的容器；
在javascript中声明变量时必须以字母开头；
变量也能以$和_开头（不推荐使用）；
变量对大小写敏感（y和Y是不同的变量）；
变量有全局变量和局部变量两种形式
在函数外声明的变量称为全局变量，反之为局部变量;
不用var声明的变量都为全局变量；
eg:
if(1){
var as  = 12; #if不是函数，故为全局变量
af = 15; #为全局变量
function han(){
   var ag = 20; #为局部变量
}
2. 常量（Constant）:不变的值；
常量名首字符为字母或下划线，其后可跟数字；
常量对大小写敏感；
```
2. 什么是标识符？
```bash
标识符必须是以字母、下划线、美元号等符号开头的,
其后可跟若干个字母、数字、下划线等；
标识符还能为π和中文（不推荐）；
```

3. 理解JavaScript中的区块。
```bash
JS是按照代码块来进行编译和执行的，代码块间相互独立，但变量和方法共享。
JS代码块是从上到下依次执行。
```

4. 理解JavaScript中语句。
```bash
语句是发给浏览器的命令，告诉浏览器要做的事情。
```

#### 二.简答题
1. JavaScript的组成，他们的全称是什么？中文名字是什么？
```bash
JavaScript是一种专门为网页交互而设计的脚本语言，由以下三部分组成：
1、核心(ECMAScript)；
2、文档对象模型(DOM)；
3、浏览器对象模型(BOM)。
```

2. 简述JavaScript的发展简史。
```bash
布兰登·艾奇（Brendan Eich，1961年～），JavaScript之父；
Douglas Crockford ，JavaScript一代宗师；
John Resig ，JQuery创始人。
JavaScript是由Netscape公司与Sun公司合作开发的，诞生于1995年，
它的出现使网页内容不再局限于枯燥的文本，使网页实现了可交互性。
当时走在技术革新最前沿的Netscape（网景）公司，决定着手开发一种客户端语言，
用来处理这种装简单的验证。当时就职于Netscape公司的布兰登·艾奇开始着手计划
将1995年2月发布的LiveScript同时在浏览器和服务器中使用。为了赶在发布日期前
完成LiveScript的开发，Netscape与Sun公司成立了一个开发联盟。而此时，
Netscape为了搭上媒体热炒Java的顺风车，临时把LiveScript改名为JavaScript。
```
3. 简述JavaScript的能干的事。
```bash
JavaScript能做的事情主要有两方面：
1.Web页面
在Web页面上，目前主要有三种元素：HTML, CSS, JavaScript。
JavaScript做动态的东西。比如在网页完全加载完成后，自动发送一些数据或者从
服务器端获取一些数据并展示在页面上。
2.Web服务器端
实现更高效的通信技术。
```
4. 标识符的命名规则。
```bash
（1）标识符由字母、数字和下划线组成；
（2）标识符的第一位必须是字母或者下划线，不能是数字；
（3）JavaScript中的标识符区分大小写；
（4）在JavaScript中预定义的运算符如：+、-、*、/、%不可以用于定义标识符。
```
5. JavaScript中的保留关键字。
```bash
JavaScript 中，一些标识符是保留关键字，不能用作变量名或函数名。
abstract  arguments	 boolean  break  byte  case  catch	char   
const  continue  debugger	default	 delete	do  double	else  
eval  false	final	finally	 float  for	function  goto	if	
implements  in	instanceof	int	interface  let	long	native	
new	 null   package	private	 protected	public	return   short	
static	switch	synchronized  this	throw	throws	transient	
truetry	 typeof  var  void  volatile   while	with	yield
```
6. 简述JavaScript中的注释种类，并举例说明。
```bash
JavaScript可以添加注释来进行解释内容，提高代码的可读性，不会执行注释。
单行注释以 // 开头。
eg:
//单行注释
多行注释以 /* 开始，以 */ 结尾。
/*
第一行代码
第二行代码
第三行代码
*/
多行注释还可用<!--  -->;
```
7. 简述JavaScript中的输出方式。
```bash
JavaScript 可以通过不同的方式来输出数据：
 (1)使用 window.alert() 弹出警告框。
 eg:
 alert("弹框");
 (2)使用 document.write() 方法将内容写到 HTML 文档中。
 eg:
  document.write()("文本");
 (3)使用 innerHTML 写入到 HTML 元素。
  eg:
   document.innerHTML("文本");
 (4)使用 console.log() 写入到浏览器的控制台。
 eg:
    console.log("打印");
    console.info ( "信息" );
    console.error（ "错误" ）;
    console.warn ( "警告"  );
```
