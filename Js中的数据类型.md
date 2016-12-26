1. 列举JavaScript中的数据类型（六种）。列举布尔类型、Undefined、Null的值。
```
    1) 数值（Number）：整数和小数（比如1和3.14）
    2) 字符串（String）：字符组成的文本（比如”Hello World”）
    3) 布尔值（Boolean）：true（真）和false（假）两个特定值
    4) Undefined：表示“未定义”或不存在，即此处目前没有任何值
    5) Null：表示空缺，即此处应该有一个值，但目前为空
    6) 对象
```
2. 谈谈你对undefined和null的理解。
```
   null和undefined都可以表示“没有”，含义非常相似。讲一个变量赋值为undefined或null，老实说，语法效果几乎没区别。
   在if语句中，它们都会被自动转为false，相等运算符（==）甚至直接报告两者相等
   null和undefined的区别：null的特殊之处在于，JavaScript把它包含在对象类型（object）之中。
```
3. 怎么判断一个值得类型，并举例说明。
```
    1) typeof运算符
    2) instanceof运算符
    3) Object.prototype.toString方法
```
4. JavaScript中数据类型的转换方式有？请一一列举，并举例说明。
```
    强制转换主要指使用Number、String和Boolean三个构造函数，手动将各种类型的值，转换成数字、字符串或者布尔值。
        1) number
            (1) 原始类型值的转换规则
                原始类型的值主要是字符串、布尔值、undefined和null，它们都能被Number转成数值或NaN。
                Number函数将字符串转为数值，要比parseInt函数严格很多。基本上，只要有一个字符无法转成数值，整个字符串就会被转为NaN。
            (2) 对象的转换规则
                Number方法的参数是对象时，将返回NaN。
        2) string
            (1) 原始类型值的转换规则
                数值：转为相应的字符串。
                字符串：转换后还是原来的值。
                布尔值：true转为”true”，false转为”false”。
                undefined：转为”undefined”。
                null：转为”null”。
            (2) 对象的转换规则
                String方法的参数如果是对象，返回一个类型字符串；如果是数组，返回该数组的字符串形式。
        3) Boolean()
            使用Boolean函数，可以将任意类型的变量转为布尔值。除了以下六个值的转换结果为false，其他的值全部为true。
           (1) undefined
           (2) null
           (3) -0
           (4) 0或+0
           (5) NaN
           (6)‘’（空字符串）
```