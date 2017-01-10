1、设学习成绩变量为score，成绩等级变量为grade。学习成绩>=90分的同学用A表示，60-89分之间的用B表示，60分以下的用C表示。最后输 出学生成绩和学生成绩等级。
```js
        var bth = document.getElementById("bth");
        var h1 = document.getElementById("h1");

bth.onclick = function () {
    var input = document.getElementById("input-text");
    var score = input.value;
    if(score == ""){
        alert("请输入内容");
    }
    var score = +score;
    if(score != score){
        alert("你输入的不是数字");
    }
    var grade;
    if(score>=90){
        grade="A";
    }else if(score>=60 && score<=89){
        grade="B";
    }else if(score<=59){
        grade="C";
    }
   h1.innerHTML = grade;
}
```
2、求出1000以内的所有水仙花数。
```js
      var i = 100;
      for(i;i<1000;i++){
          var index = i+"";           //将i转换成字符串
          var g = +index.substr(2,1); //从数组第2个开始，提取1个数
          var s = +index.substr(1,1)；//从数组第1个开始，提取1个数
          var b = +index.substr(0,1); //从数组第0个开始，提取1个数

        var str = i+"";     //将i转换成字符串
        var b = str[0];     //提取字符串第0个；
        var s = str[1];     //提取字符串第1个；
        var g = str[2];     //提取字符串第2个；

        var g = i%10;                       //把这个数除以10，提取他的余数，得到他的个位
        var s = parseIng( i % 100 / 10);    //把这个数除以100，提取他的余数，然后在除以10，取整 得到他的十位
        var b = parseIng( i / 100);         //把这个数除以100，取整 得到他的百位


          if(g*g*g+s*s*s+b*b*b == i){
              console.log(i);
          }
      }
```
3、一球从100米高度自由落下，每次落地后反跳回原高度的一半；再落下，求它在第10次落地时，共经过多少米？第10次反弹多高？
    ```js
        var h = 100;            //最高点
        var s = 0;              //最低点
        for(i=0;i<10;i++){      
            h /= 2;            //每次除以2
            s += h;              //
            console.log(+h,s*2+100); //
        }
    ```
4、一个5位数，判断它是不是回文数。回文数字例：12321是回文数，个位与万位相同，十位与千位相同。
    ```js
        function HWS(num) {
            var str = num.toString();
            var flag = true;
            for (var i = 0, len = str.length, n = (len - 1) / 2; i < n; i++) {
                if (str.charAt(i) != str.charAt(len - 1 - i)) {
                    flag = false;
                    break;
                }
            }
            console.log(str, flag ? '是' : '不是', '回文数')
        }
            HWS(78987);
     }
    ```
5、猴子吃桃问题：猴子第一天摘下若干个桃子，当即吃了一半，还不过瘾，又多吃了一个。第二天早上又将剩下的桃子吃掉一半，又多吃了 一个。以后每天早上都吃了前一天剩下的一半零一个。到第10天早上想再吃时，见只剩下一个桃子了。求第一天共摘了多少。
    ```js
        var n= 1;
        for(var i=0; i< 10; i++){
            n=n*(2+1);
            console.log(n);
        }
    ```
6、计算从1*1+1*2+1*3+1*4+1*5+…+1*9+2*1+2*2+…+2*9+…+9*1+9*2+…+9*9的值
 ```js
        var num = 0;
        for (var i=1;i<=9;i++){
            for(var j=1;j<=9;j++){
                num+=i*j;
            }
        }
        alert(num);
    ```
7、计算从1*1+2*1+2*2+3*1+…+3*3+…+9*1+9*2+…+9*9的值
```js
    var a=0;
    for(var b=0;b<10;b++){
        for(c=1;c<b+1;c++){
            a+=b*c;
            console.log(b+"x"+c+":"+a);
        }
    }
```

8、一个数如果恰好等于它的因子之和，这个数就称为“完数”。例如6=1＋2＋3.编程。计算出1000以内的完数的个数
```js
        var n = 1000;                                  var res = "";
        var r,j,i;                                     for (var num=0;num<1000;num++){
        for(i=1;i<n; i++){                                  var sum = 0;
        r=0;                                                for(var i=1;i<num;i++){ 
            for(j=1;j<i;j++){                                   for(num%i==0){
                if(i%j==0){                                         sum=sum+i;
            r=r+j;                                               }
        }                                                    }
                }                                           if(sum == num){
                if(r==i){                                       res+=num+"\n";
                document.write(r);                          }
                r=0;                                    }
            }
        }
```