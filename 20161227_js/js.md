## 哪些情况会自动转换成布尔值中的false？
~~~~
undefined
null
-0
0或+0
NaN
‘’（空字符串）
以上6个值会自动转化为false
~~~~
## 一个值怎么转换成数值、字符串？请用多种方法实现并列举案例
1 转换为数值
~~~~
使用number（）函数：
比如Number(34) // 324
Number("3.14")    // 返回 3.14
又如Number('34') // 324 -把字符串324转换为数值34
再如：Number('') // 0   空字符串转换为数值0
布尔值也可以转换
Number(true) // 1
Number(false) // 0
或者用parseInt()函数，
如parseInt("14354sdafdf"));//转换结果为14345。

字符串的转换：
方法 String()函数：
String(x)         // 将变量 x 转换为字符串并返回
String(123)       // 将数字 123 转换为字符串并返回
String(100 + 23)  // 将数字表达式转换为字符串并返回console.log(string(100+100))得到string
也可用 用+号
+""的方法
console.log(12345+"");//转换结果为字符串"12345"
console.log(1245+["543","ad","98"]);//转换结果为字符串"1245543,asd,98"
console.log("12345"+null);//转换结果为字符串"12345null"
console.log("12345"+function(){});//转换结果为字符串"12345function(){}"

~~~~
## 将 154 分别转换成二进制、十六进制、八进制，要求书写过程。用特定的表示方式书写。
~~~~
154：
二进制：154=2^7+2^4+2^3+2^1就是10011010
十六进制：154/16=9余10.所以十六进制就是9A。
八进制：154
154/8=19余2 19/8=2余3所以答案及时232
就是十进制数直接除以8,得出得整数就是八进制的十位以前的数,余数是八进制个位数
~~~~
## 如何判断一个数是NaN，请书写方法（用代码块表示）。
~~~~
if(a==NaN){document.write(要的)}
else{document.write(bxing)}
~~~~
## 选择题
变量a和b，以下哪种情况a+b的值为NaN？

A. var a = undefined, b = NaN;

B. var a = '123', b = NaN;

C. var a = undefined, b = NaN;

D. var a = NaN, b = 'undefined';

~~答案是A~~

 Javascript中，以下代码运行的结果是？

var x = ["a", 1234];

var y = typeof typeof x[1];

A. "function"

b. "object"

c. "number"

d. string
~~答案是d~~

 下面哪两个变量的值不是==

A. var a = 0, b= -0;

B. var a = NaN, b = NaN;

C. a = null, b = undefined;

D. var a = [], b = false;
~~NaN是js中唯一不自等的量~~

下面那个变量语句声明是不正确的？

A. var aa;

B. var bb = 3; cc = 'good';

C. var dd = ee = 100;

D. var ff = 3, gg = 'he's good';

~~错了~~
~~~~
正确的声明方式：
  var ff = 3;gg = 'he\'s good';
~~~~
 下面哪个不正确？

A. NaN != null;

B. NaN == NaN;

C. {} != false;

D. null != false;

~~ B错了、NaN是js中唯一不自等的~~

 下面有一个表达式，它console.log()后的值为：

    var a = typeof string + 100 + 50 + NaN;

A. function150NaN

B. function10050NaN

C. undefined10050NaN  对了

D. NaN

