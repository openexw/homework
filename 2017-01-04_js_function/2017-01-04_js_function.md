## 1. 什么是闭包？闭包的作用是什么？

(1).闭包是一个函数，一个能访问另一个函数作用域的变量的函数；

(2).其作用是：一个是读取函数内部的变量，另一个就是让这些变量的值始终保持在内存中。

## 2. 简要说明function和Function的区别

`Function`是一个`构造函数`，用于动态构建一个函数。
`function`是`关键字`，通过function生成的函数实际上是一个Function对象实例;

`例如`

fn = new `Function`("arg1","alert(arg1)");这是新建一个函数，
Function 是一个类，类似Array,String,Number,Object  等的原型

如var arr=new Array();

而所有的function 是继承了Function的属性

## 3. 创建函数的几种方式

(1).函数声明：

    function func(){}

    function sum(a,b){
        return a+b;
    }

(2).函数表达式：

    var func = function(){} >>匿名函数
    var sum = function(a,b){
        return a+b;
    }

(3). 函数对象：

    var sum = new Function("a","b","return a+b");

注意`Function`大小写

## 4. 什么是立即执行函数？怎么实现？

    不用再调用函数名称，能自己运行的函数是立即执行函数。

例如

    (function sum(){
    ...code...
    })();
   或者

    (function sum(){
     ...code...
     }());
例如：

     (function(a){
         console.log(a);   //输出123,使用（）运算符
     })(123);

     (function(a){
         console.log(a);   //输出1234，使用（）运算符
     }(1234));
引申：

     !function(a){
         console.log(a);   //输出12345,使用！运算符
     }(12345);

     +function(a){
         console.log(a);   //输出123456,使用+运算符
     }(123456);

     -function(a){
         console.log(a);   //输出1234567,使用-运算符
     }(1234567);

     var fn=function(a){
         console.log(a);   //输出12345678，使用=运算符
     }(12345678)

可以看到输出结果，在function前面加！、+、 -甚至
是逗号等到都可以起到函数定义后立即执行的效果，而
（）、！、+、-、=等运算符，都将函数声明转换成函
数表达式，消除了javascript引擎（浏览器）识别函数
表达式和函数声明的歧义，告诉javascript引擎这是一
个函数表达式，不是函数声明，可以在后面加括号，并
立即执行函数的代码。

加括号是最安全的做法，因为！、+、-等运算符还会和
函数的返回值进行运算，有时造成不必要的麻烦。

javascript中没用私有作用域的概念，如果在多人开发的
项目上，你在全局或局部作用域中声明了一些变量，可能
会被其他人不小心用同名的变量给覆盖掉，根据
javascript函数作用域链的特性，可以使用这种技术可以
模仿一个私有作用域，用匿名函数作为一个“容器”，“
容器”内部可以访问外部的变量，而外部环境不能访问“
容器”内部的变量，所以( function(){…} )()内部定义
的变量不会和外部的变量发生冲突，俗称“匿名包裹器”
或“命名空间”。

JQuery使用的就是这种方法，将JQuery代码包裹在
(function (window,undefined){…jquery代码…} (window)中，
在全局作用域中调用JQuery代码时，可以达到保护
JQuery内部变量的作用。


## 5. 使用循环完成下面的题，并使用函数封装。
   1. 求1-100的和
   2. 求 1,3,5,7,9,...第n项的结果和前n项和,序号从0开始
   3. 求10!

1 .(1)求和

    var sum = 0;
    for(var i=1; i<=100; i++){
        sum +=i;
    }
    console.log(sum);

(2).使用函数封装

    function x() {
            var sum = 0;
            for(var i=1; i<=100; i++){
                sum +=i;
            }
            console.log(sum);
            }
            x();

#### 2 .求 1,3,5,7,9,...第n项的结果和前n项和,序号从0开始

(1)第n(n=100)项结果：197

    var sum1 = 0;
            for(var i=1; i<100; i++){
                sum1 =i*2-1;
            }
            console.log(sum1);

封装：

    function x() {
            var sum = 0;
            for(var i=1; i<100; i++){
                sum =i*2-1;
            }
            console.log(sum);
            }
            x();

i是从1到100，而所求项是正奇数，得规律：该奇数=i*2-1，
因为数列的序号从0开始，所以用此方法求第n项实际上是求n-1项，
所以循环里面i<100,如果i<=100则会求到第n+1项。

2 .(2).求前n(100)项之和：

    function x() {
            var sum = 0;
            for(var i=1; i<=197; i+=2){
                sum +=i;
            }
            console.log(sum);
            }
            x();



