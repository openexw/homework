简答题

1. 哪些情况会自动转换成布尔值中的false？
```brsh
能自动转换布尔值false的为：
false  0/-0  ""  NaN undefined  null
```
2. 一个值怎么转换成数值、字符串？请用多种方法实现并列举案例。
```html
1.
// Number 转换为数值
Number(null); //转换结果为：0
Number(undefined); //转换结果为：NaN
Number("456"); //转换结果为数值：456
Number([]); //转换结果为：0
Number(true); //转换结果为：1
Number(false); //转换结果为：0
自动转换
console.log(Number(+"12345"));转换结果为：12345
console.log(ParseInt("1345fdffa"));转换结果为：1345
console.log(ParseInt("852.1234"));转换结果为：852
console.log(ParseInt("852.1234"));转换结果为：852.1234
2.
// String 转换为字符串
String(456);  //转换结果为字符串："456"
String([]);  //转化结果为：空
String(null);  //转化结果为字符串："null"
String(undefined);  //转化结果为字符串："undefined"
自动转换
console.log(String(1234+""));  //转化结果为字符串："1234"
console.log(String134+["526","asd","889"]);  //转化结果为字符串："134526asd889"
console.log(String(1234+"null"));  //转化结果为字符串："1234null"
console.log(String(undefined));  //转化结果为字符串："undefined"
console.log(String("123"+function(){}));  //转化结果为字符串："123function (){}}"
```
3. 将 154 分别转换成二进制、十六进制、八进制，要求书写过程。用特定的表示方式书写。

```bran
转换成二进制:10011010
转换成八进制:232
转换成十六进制:9A
```
4. 如何判断一个数是NaN，请书写方法（用代码块表示）。

选择题

5. 变量a和b，以下哪种情况a+b的值为NaN？
```bran
答案为：C
```
A. var a = undefined, b = NaN;

B. var a = '123', b = NaN;

C. var a = undefined, b = NaN;

D. var a = NaN, b = 'undefined';

6. Javascript中，以下代码运行的结果是？
```bran
答案为：B
```
var x = ["a", 1234];
var y = typeof typeof x[1];
A. "function"

b. "object"

c. "number"

d. string

7. 下面哪两个变量的值不是==
```bran
答案为：B
```
A. var a = 0, b= -0;

B. var a = NaN, b = NaN;

C. a = null, b = undefined;

D. var a = [], b = false;

8. 下面哪个变量语句声明是不正确的？
```bran
答案为：D
```
A. var aa;

B. var bb = 3; cc = 'good';

C. var dd = ee = 100;

D. var ff = 3, gg = 'he's good';

9. 下面哪个不正确？
```bran
答案为：B
```
A. NaN != null;

B. NaN == NaN;

C. {} != false;

D. null != false;

10. 下面有一个表达式，它console.log()后的值为：
```bran
答案为：C
```
    var a = typeof string + 100 + 50 + NaN;
A. function150NaN

B. function10050NaN

C. undefined10050NaN

D. NaN
