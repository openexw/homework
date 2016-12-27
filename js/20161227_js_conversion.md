## 1. 哪些情况会自动转换成布尔值中的false？
    Boolean(null),
    Boolean(false),
    Boolean(0)/(-0)
    Boolean('')/("")
    Boolean(undefined)
    boolean(NaN)
## 2. 一个值怎么转换成数值、字符串？请用多种方法实现并列举案例。
    转换成数值：
        var nn = +"111"，-"1111"
        Number（"222"）
        parseInt("2121")
        parseFloat("111abs")
    字符串：
        var a = 551;
        var b = string(s);
        var c = "" + s ;
## 3. 将 154 分别转换成二进制、十六进制、八进制，要求书写过程。用特定的表示方式书写。
    154转换成二进制为10011010.
            154/2…… 0
            77/2…… 1
            38/2…… 0
            19/2…… 1
            9/2…… 1
            4/2…… 0
            2/2…… 0
            1/2…… 1
    154转换成十六进制为9A
            154/16 = 9 …… 10 //9A
            
    154转换成八进制为232
            154/8 = 19 …… 2
            19/8 = 2 …… 3
            2/8 = 0 …… 2
            由下向上依次取余得：232
## 4. 如何判断一个数是NaN，请书写方法（用代码块表示）。
    可以用isNaN()检测
        如果把 NaN 与任何值（包括其自身）相比得到的结果均是 false，所以要判断某个值是否是 NaN，不能使用 == 或 === 运算符。
        isNaN() 函数通常用于检测 parseFloat() 和 parseInt() 的结果，以判断它们表示的是否是合法的数字。当然也可以用 isNaN() 函数来检测算数错误，比如用 0 作除数的情况。
    也可以用正则表达式的 /^(\d)$/来判断
        ^(\d)$就是0-9的任意一个数字，^表示以...开头，\d表示0-9的数字，$表示以...结尾，所以这个就是表示单个数字了
# 选择题
## 5.变量a和b，以下哪种情况a+b的值为NaN？
    A. var a = undefined, b = NaN;

    B. var a = '123', b = NaN;

    C. var a = undefined, b = NaN;

    D. var a = NaN, b = 'undefined';

    答案是：A和C
## 6. Javascript中，以下代码运行的结果是？
```js
var x = ["a", 1234];
var y = typeof typeof x[1];
```
    A. "function"

    b. "object"

    c. "number"

    d. string

    答案是：D
## 7. 下面哪两个变量的值不是==
    A. var a = 0, b= -0;

    B. var a = NaN, b = NaN;

    C. a = null, b = undefined;

    D. var a = [], b = false;

    答案是：D
## 8. 下面那个变量语句声明是不正确的？
    A. var aa;

    B. var bb = 3; cc = 'good';

    C. var dd = ee = 100;

    D. var ff = 3, gg = 'he's good';

    答案是：D
## 9. 下面哪个不正确？
    A. NaN != null;

    B. NaN == NaN;

    C. {} != false;

    D. null != false;

    答案是：D
## 10. 下面有一个表达式，它console.log()后的值为：
```js
var a = typeof string + 100 + 50 + NaN;
```
    A. function150NaN

    B. function10050NaN

    C. undefined10050NaN

    D. NaN

    答案是：C