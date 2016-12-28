1、设学习成绩变量为score，成绩等级变量为grade。学习成绩>=90分的同学用A表示，60-89分之间的用B表示，60分以下的用C表示。最后输 出学生成绩和学生成绩等级。

    ···js
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
          var index = i+"";
          var g = +index.substr(2,1);
          var s = +index.substr(1,1)
          var b = +index.substr(0,1);

          if(g*g*g+s*s*s+b*b*b == i){
              console.log(g+"x"+g+"x"+g+"+"+s+"x"+s+"x"+s+"+"+b+"x"+b+"x"+b+":"+i);
          }
      }
    ```

3、一球从100米高度自由落下，每次落地后反跳回原高度的一半；再落下，求它在第10次落地时，共经过多少米？第10次反弹多高？

    ```js
        var h = 100;
        var s = 100;
        for(i=0;i<10;i++){
            h = h/2;
            s=s+h;
            console.log(s-h,h);
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
// 判断是否回文数
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
        for(a=11;a<99;a++){
            for(b=12;b<100;b++){
                a=a+b;
            }
        }
        console.log(a);
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
        var n = 1000;
        var r,j,i;
        for(i=1;i<n; i++){
            r=0;
            for(j=1;j<i;j++){
                if(i%j==0){
                    r=r+j;
                }
            }
            if(r==i){
                document.write(r);
                r=0;
            }
        }
```
