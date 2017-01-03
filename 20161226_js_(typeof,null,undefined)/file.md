1. 列举JavaScript中的数据类型（六种）。列举布尔类型、
Undefined、Null的值。
```bash
1.数值（Number）：整数和小数（比如2和3.14）
2.字符串（String）：字符组成的文本（比如”Hello World”）
3.布尔值（Boolean）：true（真）和false（假）两个特定值
4.Undefined：表示“未定义”或不存在，即此处目前没有任何值
5.Null：表示空缺，即此处应该有一个值，但目前为空
6.复合类型
```
2. 谈谈你对undefined和null的理解。
null和undefined都可以表示“没有”，含义非常相似。
null是一个表示”无”的对象，转为数值时为0；undefined是一个表示”无”
的原始值，转为数值时为NaN。
null undefined比较:
```html
    var q = null;
    var w = undefined;
    if(q == w){
        console.log("真的");
    }
    console.log(Number(null));//强制转换结果：0
    console.log(Number(true));//强制转换结果：1
    console.log(Number([]));//强制转换结果：0
    console.log(Number(["456"]));//强制转换结果：456
    console.log(Number(undefined));//强制转换结果：NaN

    /*值为undefined的情况：

    1.变量声明了但没有赋值
    2.调用函数时应该提供的参数却没有提供，参数为undefined
    3.对象的属性没有赋值
    4.函数没有返回值时默认返回undefined
    */
```
     
3. 怎么判断一个值得类型，并举例说明。
```html
//判断一个值为什么类型

    var s = "f";//字符串string
    var n = null;//对象object
    var arr = [];//对象object
    var d ={};//对象object
    var t =6;//数值number
    var y = false;//布尔值boolean
    var u = undefined;//undefined
    var i = function ss(){};//undefined
    console.log("数据类型:"+typeof n);
    //typeof 的用法
    if(typeof jkj== "undefined"){
        console.log("未声明");
    }
```
4. JavaScript中数据类型的转换方式有？请一一列举，并举例说明。
数据转换：
```html
1.
// 数值：转换后还是原来的值
Number(456); // 456
2.
// 字符串：如果可以被解析为数值，则转换为相应的数值
Number("456"); // 456
// 字符串：如果不可以被解析为数值，返回NaN
Number("13248abc"); // NaN
// 空字符串转为0
Number(""); // 0
3.
// 布尔值：true 转成1，false 转成0
Number(true); // 1
Number(false); // 0
4.
// undefined：转成 NaN
Number(undefined); // NaN
5.
// null：转成0
Number(null); // 0
6.
Number([]);// 0
Number(true);// 1
Number(false);// 0
```