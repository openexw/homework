+ 什么是闭包？闭包的作用是什么？
+ 简要说明function和Function的区别
+ 创建函数的几种方式
+ 什么是立即执行函数？怎么实现？

+ 使用循环完成下面的题，并使用函数封装。
    1. 求1-100的和
    2. 求 1,3,5,7,9,...第n项的结果和前n项和,序号从0开始
    3. 求10!
    
    

[个](http://www.cnblogs.com/liu666/p/5745301.html)
http://blog.csdn.net/agileclipse/article/details/8551228
3. 
```js
function factorial(n){
    if(n == 0 ){
        return 1;
    }else{ 　　　
        return n*factorial(n-1); 
    } 
}
```