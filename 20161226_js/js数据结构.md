1. 列举JavaScript中的数据类型（六种）。列举布尔类型、Undefined、Null的值。
- 数值(Numbar)
- 布尔型(boolean):值为true和false
- 字符串(string)
- Undefined:值为undefined
- Null:值为null
- Symbol(es6中新增的一种类型)


2. 谈谈你对undefined和null的理解。
undefined就是不存在的或者还没有定义。
null就是为空的值,即有一个值,但这个值为空。


3. 怎么判断一个值得类型，并举例说明。
- 变量值全是数字组成，那么它的类型就是Numbar。例如：var a = 123;
- 变量值为true或false，那么它的类型就是boolean。例如：var b = true;
- 变量值包含在引号中，那么它的类型就是字符串。例如：var c = "123abc";
- 如果一个变量没有赋值，那么它的类型就是Undefined。例如：var d;
- 如果一个变量赋值为空，那么它的类型就是Null。例如：var e = null;


4. JavaScript中数据类型的转换方式有？请一一列举，并举例说明。
- 将字符串转换成数值  例如：Numbar("123");返回值为123
- 将数值转换成字符串  例如：String(123);返回值为"123"
- 将布尔型转换成数值  例如：Numbar(true);返回值为1
- 将布尔型转换成字符串   例如：String(false);返回值为"false"
- 将Null转换成数值    例如：Number(null); 返回值为0
- 将Undefined转换数值 例如：Number(undefined); 返回值为NaN