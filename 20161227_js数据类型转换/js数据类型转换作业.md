### 简答题

1. 哪些情况会自动转换成布尔值中的false？

值为NaN、undefined、0、-0、null、""或''

2. 一个值怎么转换成数值、字符串？请用多种方法实现并列举案例。

- 转换成数值的有:
-- 强制转换,如：Number(123)、parseInt("123")、parseFloat("1.23")
-- 自动转换,如："3"-"2"、'3'*'2'、true-1、false-1等

- 转换成字符串的有:
-- 强制转换,如：String(123)、String(abc)、String(true)
-- 自动转换,如：""+任何数值

3. 将 154 分别转换成二进制、十六进制、八进制，要求书写过程。用特定的表示方式书写。

  154转二进制过程如下：
  154/2=77  //余0
  77/2=38   //余1
  38/2=19   //余0
  19/2=9    //余1
  9/2=4     //余1
  4/2=2     //余0
  2/2=1     //余0
  1/2=0     //余1
  所以结果是：10011010

  154转八进制过程如下：
  154/8=19  //余2
  19/8=2    //余3
  2/8=0     //余2
  所以结果是：232

  154转十六进制过程如下:
  154/16=9  //余a
  9/16=0    //余9
  所以结果是：9a

4. 如何判断一个数是NaN，请书写方法（用代码块表示）。

isNaN(输入一个数)

### 选择题

5. 变量a和b，以下哪种情况a+b的值为NaN？(A)

A. var a = undefined, b = NaN; 
B. var a = '123', b = NaN; 
C. var a = NaN, b = 'undefined';

6. Javascript中，以下代码运行的结果是？(D)

var x = ["a", 1234];
var y = typeof typeof x[1];

A. "function" 
B. "object" 
C. "number" 
D. string

7. 下面哪两个变量的值不是== (B)

A. var a = 0, b= -0; 
B. var a = NaN, b = NaN; 
C. a = null, b = undefined; 
D. var a = [], b = false;

8. 下面那个变量语句声明是不正确的？(D)

A. var aa; 
B. var bb = 3; cc = 'good'; 
C. var dd = ee = 100; 
D. var ff = 3, gg = 'he's good';

9. 下面哪个不正确？(B)

A. NaN != null; 
B. NaN == NaN; 
C. {} != false; 
D. null != false;

10. 下面有一个表达式，它console.log()后的值为：(C)

var a = typeof string + 100 + 50 + NaN; 

A. function150NaN 
B. function10050NaN 
C. undefined10050NaN 
D. NaN