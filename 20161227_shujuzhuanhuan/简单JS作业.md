1. 哪些情况会自动转换成布尔值中的false？
值为null，undefined，NaN，"",0,+0,-0
2. 一个值怎么转换成数值、字符串？请用多种方法实现并列举案例。
var a = "4564";
var b = Number(a);
var c = parseInt(a);
var d = parseFloat(a);
var e = +a

var a2 = 123;
var b2 = String(a2);
var c2 = ""+a2
3. 将 154 分别转换成二进制、十六进制、八进制，要求书写过程。用特定的表示方式书写。
154/2=77,77/2=38-1,38/2=19,19/2=9-1,9/2=4-1,4/2=2,2/2=1
二进制: 10011010
154/8=19,19/8=2-3
八进制：232
十六进制：9A
4. 如何判断一个数是NaN，请书写方法（用代码块表示）。
isNaN(a)
选择题

5. 变量a和b，以下哪种情况a+b的值为NaN？
AC
A. var a = undefined, b = NaN; B. var a = '123', b = NaN; C. var a = undefined, b = NaN; D. var a = NaN, b = 'undefined';
6. Javascript中，以下代码运行的结果是？
d
var x = ["a", 1234];
var y = typeof typeof x[1];
A. "function" b. "object" c. "number" d. string

7. 下面哪两个变量的值不是==
B
A. var a = 0, b= -0; B. var a = NaN, b = NaN; C. a = null, b = undefined; D. var a = [], b = false;

8. 下面那个变量语句声明是不正确的？
D
A. var aa; B. var bb = 3; cc = 'good'; C. var dd = ee = 100; D. var ff = 3, gg = 'he's good';

9. 下面哪个不正确？
B
A. NaN != null; B. NaN == NaN; C. {} != false; D. null != false;

10. 下面有一个表达式，它console.log()后的值为：
C
    var a = typeof string + 100 + 50 + NaN;
A. function150NaN B. function10050NaN C. undefined10050NaN D. NaN