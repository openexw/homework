### 2、求出1000以内的所有水仙花数。
~~~
 var i;
  for (i=100;i<=999;i++)
  {
      var a=parseInt(i/100);
      var b=parseInt(i/10%10);
      var c=parseInt(i%10);
      if((a*a*a+b*b*b+c*c*c)==i)
      {console.log(i);}
  }

~~~
### 3、一球从100米高度自由落下，每次落地后反跳回原高度的一半；再落下，求它在第10次落地时，共经过多少米？第10次反弹多高？
~~~
  var k=100;
  var po=0;
  for(r=0;r<=9;r++) {
      k = k / 2;
      po=po+k*2;
      if (r == 9) {
          console.log(k);
          console .log(po);
      }
  }
~~~
### 4、一个5位数，判断它是不是回文数。回文数字例：12321是回文数，个位与万位相同，十位与千位相同。
~~~
   for (i = 10000; i <= 99999; i++) {
          var l = parseInt(i / 10000);
          var m = parseInt(i / 1000 % 10);
          var n = parseInt(i / 100 % 10);
          var f = parseInt(i % 100 / 10);
          var o = parseInt(i % 10);
          if ((l == o) && (m == f)) {
              console.log(i);
          }
      }
~~~
### 5、猴子吃桃问题：猴子第一天摘下若干个桃子，当即吃了一半，还不过瘾，又多吃了一个。第二天早上又将剩下的桃子吃掉一半，又多吃了 一个。以后每天早上都吃了前一天剩下的一半零一个。到第10天早上想再吃时，见只剩下一个桃子了。求第一天共摘了多少。
~~~
var fe=0;
for(i=0;i<=9;i++){
     var gh=(2*(i+1));
   fe=fe+gh;
    if(i==9){console .log(fe)}
}

~~~
### 6、计算从1*1+1*2+1*3+1*4+1*5+…+1*9+2*1+2*2+…+2*9+…+9*1+9*2+…+9*9的值

~~~
 var gk=0;
for(i=1;i<=9;i++){
    for(j=1;j<=9;j++){
        gk=gk+i*j;
        if(i==j==9){console.log(gk);}
    }
}
~~~
### 7、计算从1*1+2*1+2*2+3*1+…+3*3+…+9*1+9*2+…+9*9的值
~~~
var lk=0;
for(i=1;i<=9;i++){
    for(j=1;j<=i;j++){
        lk=lk+i*j;
        if(j==9){console .log(lk)}
    }
}

~~~
### 8、一个数如果恰好等于它的因子之和，这个数就称为“完数”。例如6=1＋2＋3.编程。计算出1000以内的完数的个数
~~~
for(i=1;i<=1000;i++){
    var gjk=0;
    var jhk=0;
    for(j=1;j<=i;j++){
     if(i%j==0)

     {jhk=j;
     gjk=gjk+jhk;
     if(gjk==i){console .log(i)}
     }
    }
}

~~~