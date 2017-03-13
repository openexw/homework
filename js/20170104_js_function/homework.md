
+ 什么是闭包？闭包的作用是什么？
    1. 闭包就是将函数内部和函数外部连接起来
    2. 一个是前面提到的可以读取函数内部的变量，
    另一个就是让这些变量的值始终保持在内存中。
+ 简要说明function和Function的区别

   1. fn = new Function("arg1","alert(arg1)");这是新建一个函数，
    Function 是一个类
   2. function 是继承了Function的属性
+ 创建函数的几种方式
    1. 声明函数
    最普通最标准的声明函数方法，包括函数名及函数体。
    2. 创建匿名函数表达式
    创建一个变量，这个变量的内容为一个函数
    3. 创建具名函数表达式
    创建一个变量，内容为一个带有名称的函数

+ 什么是立即执行函数？怎么实现？
```js
    (function () {
        alert('watch out!');
    }());
```

+ 使用循环完成下面的题，并使用函数封装。
    1. 求1-100的和
```js
function a(n) {
    var r=0;
    for (var i=1;i<=n;i++){
        r +=i;
    }
    return r;
}
console.log(a(100));
```
    2. 求 1,3,5,7,9,...第n项的结果和前n项和,序号从0开始
```js

```
    3. 求10!
```js
 function b(n) {
    var a = 1;
    for(var i=1;i<=n;i++){
        a*=i;
    }
    return a;
 }
 console.log(b(10))
```