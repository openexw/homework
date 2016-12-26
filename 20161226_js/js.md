
1 列举JavaScript中的数据类型（六种）。列举布尔类型、Undefined、Null的值。
 ~~~~
 基本数据类型：
 1 number（数值）
 2 string（字符串）
 3 boolean（布尔值）true or false
 4 Nulla：表示空缺（应该有一个值的）
 5 Undefine：表示“未定义”或不存在，即此处目前没有任何值
 6：复合数据类型：{侠义的对象 。数组 ，函数}？
 ~~~~

2 谈谈你对undefined和null的理解
~~~~
同：
都表示空！


区别
null表示空值，即该处的值现在为空。（null是有值的。。只是值为空）
ndefined表示“未定义”。（就是没定义。不晓得是什么）
~~~~

3 怎么判断一个值得类型，并举例说明
~~~~
JavaScript有三种方法，可以确定一个值到底是什么类型。
first：
typeof运算符
`console.log(typeof 123)`#number
`console.log(typeof "123")`#string
second:
instanceof运算符
third:
Object.prototype.toString方法
~~~~

4 JavaScript中数据类型的转换方式有？请一一列举，并举例说明

~~~~
1. 强制转换:
强制转换主要指使用Number、String和Boolean三个构造函数，手动将各种类型的值，转换成数字、字符串或者布尔值。
 Number()
使用Number函数，可以将任意类型的值转化成数值或者NuN
eg：
Number(324) 转换为 324
Number('324abc') 转换324abc为 NaN
Number('') // 0（因为这字符串是空的所以是0）
Number(true) // 1
Number(false) // 0 （真就是1、假就是0）
Number方法的参数是对象时，将返回NaN
eg：
Number({a: 1}) // NaN
Number([1, 2, 3]) // NaN
 string函数
 使用String函数，可以将任意类型的值转化成字符串。
String(123) // "123" 数值：转为相应的字符串
String('abc') // "abc" 字符串：转换后还是原来的值。
String(true) // "true"布尔值：true转为”true”，false转为”false”。
String(undefined) // "undefined" undefined：转为”undefined
String(null) // "null" null：转为”null”。

String方法的参数如果是对象，返回一个类型字符串；如果是数组，返回该数组的字符串形式。
String({a: 1}) // "[object Object]"
String([1, 2, 3]) // "1,2,3"

2. 自动转换:
当JavaScript遇到预期为布尔值的地方（比如if语句的条件部分），就会将非布尔值的参数自动转换为布尔值。系统内部会自动调用Boolean函数。
因此除了以下六个值，其他都是自动转为true.
undefined
null
-0
0或+0
NaN
‘’（空字符串）
~~~~