### 1. 列举JavaScript中的数据类型（六种）。列举布尔类型、Undefined、Null的值。
 - Number整数和小数
 - String字符组成的文本（字符串）
 - Boolean布尔值（true或false）
 - Undefined表示未定义、不确定即此处没有任何值
 - Object对象（复合数据类型）
 - Null空（此处应该有个值，但现在是空缺的）
 #### 列举：
- Boolean:true/false
- Undefined:undefined
- Null:null
---

### 2. 谈谈你对undefined和null的理解。
- undefined表示值不确定/null表示值为空，两者意义几乎相同，都表示没有，因为历史遗留原因，一直保留到现在。

### 3. 怎么判断一个值的类型，并举例说明。
#### 判断一个值的类型，可以用++typeof++；
#### (1).原始类型：
-  typeof 123 ``Number``数值返回==Number==
-  typeof "asd" ``String``字符串返回==String==
-  typeof true ``Boolean``布尔值返回==Boolean==

#### (2).函数：

```
function la(){
    code
}

typeof la;//function
```

```
var func = function(){
    //code
}

typeof func;//function
```
### 4. JavaScript中数据类型的转换方式有？请一一列举，并举例说明。
### 有以下几种：
#### 1.强制转换
##### 1.1. Number()

将任何类型的值转换为数值或NaN
```
//数值转数值
Number(123)//123

//字符串可以解析为数值则转换为相应数值
Number("321")//321

//字符串不能解析为数值则返回NaN
Number('123aaa')//NaN

//空字符串转换为0
Number("")//0

//布尔值true为1,false为0
Number(true)//1
Number(false)//0

//undefined转换为NaN
Number(undefined)//NaN

//null转换为0
Number(null)//0

//只要有一个字符无法转换为数值，整个字符串就会转换为NaN
```
- parseInt()

与Number的区别就在于对字符串的转换
```
//转换为123，而Number则是NaN
parseInt('123asd')//123
```
- Number方法是对象时 将返回NaN
```
Number({a:1})//NaN
```
##### 1.2. String()
- 原始类型值转换为相应的字符串
```
如：
String(123)//'123'
String(asd)//'asd'
String(null)//'null'
String(true)//'true'
String(undefined)'undefined'
```
- 对象的转换
```
如：
String({a:1})//[Object Object]是对象则返回类型字符串
String([1,2,3])//"1,2,3"是数组则返回该数组的字符串
```
##### 1.3. Boolean()
以下值转换为布尔值都为false：
```
Boolean(0)//false
Boolean(undefined)//false
Boolean(null)//false
Boolean(NaN)//false
Boolean("")//false
```
==注意，所有对象（包括空对象）的转换结果都是true，甚至连false对应的布尔对象new Boolean(false)也是true==
```
Boolean([])//true
Boolean({})//true
Boolean(new Boolean(false))//true
```