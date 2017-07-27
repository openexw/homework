1、设学习成绩变量为score，成绩等级变量为grade。学习成绩>=90分的同学用A表示，60-89分之间的用B表示，60分以下的用C表示。最后输 出学生成绩和学生成绩等级。

2、求出1000以内的所有水仙花数。个位^3 + 十位^3 + 百位^3 = 这个数。（1^3 + 2 ^3 + 3^3 ?= 123）

3、一球从100米高度自由落下，每次落地后反跳回原高度的一半；再落下，求它在第10次落地时，共经过多少米？第10次反弹多高？

4、一个5位数，判断它是不是回文数。回文数字例：12321是回文数，个位与万位相同，十位与千位相同。

5、猴子吃桃问题：猴子第一天摘下若干个桃子，当即吃了一半，还不过瘾，又多吃了一个。第二天早上又将剩下的桃子吃掉一半，又多吃了 一个。以后每天早上都吃了前一天剩下的一半零一个。到第10天早上想再吃时，见只剩下一个桃子了。求第一天共摘了多少。

6、计算从1*1+1*2+1*3+1*4+1*5+…+1*9+2*1+2*2+…+2*9+…+9*1+9*2+…+9*9的值

7、计算从1*1+2*1+2*2+3*1+…+3*3+…+9*1+9*2+…+9*9的值

8、一个数如果恰好等于它的因子之和，这个数就称为“完数”。例如6=1＋2＋3.编程。计算出1000以内的完数的个数
<!--因子就是所有可以整除这个数的数,不包括这个数自身 -->
3%3 == 0


# 1
```js
var score=60; 
 var grade; 
 if (score>=90)
 { 
 alert(score=score); 
 alert(grade='A');
 } else if(60<score<=89){ alert(score=score); alert(grade='B'); } else{ alert(score=score); alert(grade='C'); };	
```

# 2
```js
var a=1;
var b=5;
var c=3;
var num=100*a+10*b+c;
if (num==a*a*a + b*b*b + c*c*c ) {
        alert("水仙花数");
}else{
    alert("水仙花数”：指一个三位数，其各位数字立方和等于该数本身。");
}
```

# 3
```js
var m=100; 
 var n=0;
 for(var i=1;i<=10;i++) 
 { 
 	m=m/2; 
 	n=n+m;
 } 
 alert(m); 
 alert(n);
```

# 4

```js
var num=22322;
var a=parseInt(num/10000%10); // 2.2322%10=2
var b=parseInt(num/1000%10);  // 22.322%10=2
var c=parseInt(num/100%10);   // 223.22%10=3
var d=parseInt(num/10%10);    //2232.2%10=2
var e=num%10;                 //2 
if((a==e)&&(b==d)){           //判断万位上的书与个位数上的数是否相等 并且 判断千位上的数与十位上的数是否相等
    alert(num=num+" 是回文数");
}else{
    alert(num=num+" 不是回文数");
}
```

# 5

```js
var t;
var i;
var num=1;
for(i=1;i<=10;i++){
    num=(num+1)*2;		
}
alert(num);
```

# 6

```js
var i;
var j;
var m=0;
var n=0;
for(i=1;i<=9;i++){
    for(j=1;j<=9;j++){
        n=i*j;
        m+=n;	
    }                       
}	
alert(m);
```

# 7

```js
var i;
var j;
var m=0;
for(i=1;i<=9;i++){
    for(j=1;j<=i;j++){
        m+=i*j;
    }
}
alert(m);
```

# 8

```js

var i;
var j;
var count = 0;
var sum = 0;
for(var i=2;i<=1000;i++){
    sum=0;//sum清零，从新用新的i进行循环
    for(var j=1;j<=i/2;j++){
        if(i % j == 0){
            sum = sum + j;
        }
    }
    if(sum == i){
        count++;
        document.write("完数："+i+"<br>");
    }
}
alert(count);
```