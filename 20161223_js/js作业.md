# js作业

### 一、 概念

1. 什么是变量？什么是常量
变量即在程序运行过程中它的值是允许改变的量。
常量即在程序运行过程中他的值是不允许改变的量。

2. 什么是标识符？
编程时用来表示变量或函数的变量名或者函数名等，由字母、数字、下划线“_”组成，并且首字母不能是数字，不能是编程语言的保留关键字。

3. 理解JavaScript中的区块。


4. 理解JavaScript中语句。
JavaScript语句向浏览器发出的命令。语句的作用是告诉浏览器该做什么。

### 二、 简答

1. JavaScript的组成，他们的全称是什么？中文名字是什么？
- ECMAscript，一套标准
- BOM:Browser Object Model,浏览器对象模型
- DOM:document Object Model，文档对象模型

2. 简述JavaScript的发展简史。
JavaScript诞生于1995年。起初它的主要目的是处理以前由服务器端负责的一些表单验证。
JavaScript 1.0获得了巨大的成功，Netscape随后在Netscape Navigator 3（网景浏览器）中发布了JavaScript 1.1。
1997年，以JavaScript1.1为蓝本的建议被提交给了欧洲计算机制造商协会，该协会指定39号技术委员会负责将其进行标准化。

3. 简述JavaScript的能干的事。
图形处理、PDF生成、建立服务器、编译解释器、图形界面、数据库、各种测试工具、视频和音频播放和处理、通信、多人协作等等。

4. 标识符的命名规则。
- 标识符命名必须保证不能以数字作为开始符号
- 标识符命名应当保证其具有见文识意的取名方式
- 自定义标识符不允许与关键字和保留名同名
- $符号应当写在标识符的首字母处
- js语言对标识符大小写敏感

5. JavaScript中的保留关键字。
abstract	arguments	boolean	break	byte
case	catch	char	class*	const
continue	debugger	default	delete	do
double	else	enum*	eval	export*
extends*	false	final	finally	float
for	function	goto	if	implements
import*	in	instanceof	int	interface
let	long	native	new	null
package	private	protected	public	return
short	static	super*	switch	synchronized
this	throw	throws	transient	true
try	typeof	var	void	volatile
while	with	yield

6. 简述JavaScript中的注释种类，并举例说明。
- 单行注释//
- 多行注释/**/

7. 简述JavaScript中的输出方式。
    1、alert("要输出的内容");
    ->在浏览器中弹出一个对话框,然后把要输出的内容展示出来 
    ->alert都是把要输出的内容首先转换为字符串然后在输出的
    2、document.write("要输出的内容"); ->直接的在页面中展示输出的内容
    3、console.log("要输出的内容");->在控制台输出内容
    4、value ->给文本框(表单元素)赋值内容
    5、innerHTML/innerText ->给除了表单元素的标签赋值内容

### 三、 完成有道云笔记的界面布局