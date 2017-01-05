### 什么是闭包？闭包的作用是什么？
```brsh
1.获取函数内部的局部变量
2.封装对象的私人属性和私有方法（函数）
```
### 简要说明function和Function的区别
```brsh
函数：指被调用执行时可重复使用的代码块
函数又分为;命名函数和匿名函数；
 

```
### 创建函数的几种方式
```brsh
1.普通函数声明
function a(){
    
  }
2.创建匿名函数表达式
var a=function(){
    
}
3.创建命名函数表达式
var a=function fun(){
    
}
3.创建带参数函数表达式
function fun(n1,n2){
    return n1+n2;
}
```
### 什么是立即执行函数？怎么实现？
```brsh
（function fun(){
alert(1);
}）();
```

### 使用循环完成下面的题，并使用函数封装。
    求1-100的和
```html
    function as(){
        var sum=0;
        for(i=1;i<=100;++i){
            sum +=i
        }
        return sum;
    } 
    as()
```
求 1,3,5,7,9,...第n项的结果和前n项和,序号从0开始
```html
function as(){
        var sum =0;
        var  a=-1;
        for(var i=0;i<20;++i){
            a += 2;
            sum += a;
        }
    }
as();
```
求10!

```html
function as(){
        var sum =1;
        var  a=[10,9,8,7,6,5,4,3,2,1];
        for(var i=0;i<10;++i){
            sum *= a[i];
        }
        console.log(sum);
    }
as();
```
