+ 什么是闭包？闭包的作用是什么？
```js
    闭包是有权访问另一个函数作用域的变量的函数。Javascript允许使用内部函数---即函数定义和函数表达式位于另一个函数的函数体内。
    而且，这些内部函数可以访问它们所在的外部函数中声明的所有局部变量、参数和声明的其他内部函数。当其中一个这样的内部函数在包含它们的外部函数之外被调用时，就会形成闭包。
    
    闭包可以用在许多地方。它的最大用处有两个:一个是可以读取函数内部的变量，另一个就是让这些变量的值始终保持在内存中。
```
+ 简要说明function和Function的区别
```js
    Function是一个构造函数，用于动态构建一个函数。
    function是关键字，通过function生成的函数实际上是一个Function对象实例
```
+ 创建函数的几种方式
```js
    第一种（函数声明）
        function sum1(num1,num2){
            return num1+num2;
        }
    第二种（函数表达式）
        var sum2 = function(num1,num2){
            return num1+num2;
        }
     第三种（函数对象方式）
        var sum3 = new Function("num1","num2","return num1+num2");
```
+ 什么是立即执行函数？怎么实现？
```js
    立即执行函数模式是一种语法，可以让你的函数在定义后立即被执行.
    比如：
        (function(a){
              console.log(a);  
        })(123);
```
+ 使用循环完成下面的题，并使用函数封装。
    1. 求1-100的和
```js
        //循环方法                                   //递归方法
        function sum(num){                          function sum(n){
            var i = 0;                                 if(n == 1) return 1;
            for(var j=1;j<=num;j++){                   return sum(n-1) + n;
            i +=j;                                  }
            }                                      console.log(sum(100));     
                return i;
        }
        alert(sum(100));
```
    2. 求 1,3,5,7,9,...第n项的结果和前n项和,序号从0开始

```js
        //循环方法                                     //递归方法
    function sum(num){                                 function odd(n){             function sum(n){
        var i = 0;                                         if(n==0) return 1;          if(n == 0) return 1;
        for(var n=0;n<=num;n++){                           return odd(n-1)+2;          return sum(n-1) + odd(n);
        i += 2*n+1;                                    }                            }
        }                                                                           alert(sum(5))
        return i+','+(2*num+1);
    }
    alert(sum(5));
```
    3. 求10!

```js
        //循环方法                                    //递归方法
    function factorial(num){                         function fact(num){
            var i = 1;                                  if (num<=1){
            for(var j=1;j<=num;j++){                        return 1;
                i *=j;                                  }else{
            }                                               return num*fact(num-1);
                return i;                               }
        }                                            }
        alert(factorial(10));                        alert(fact(10));
```