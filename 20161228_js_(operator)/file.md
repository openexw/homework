1、设学习成绩变量为score，成绩等级变量为grade。学习成绩>=90分的同学用A表示，
60-89分之间的用B表示，60分以下的用C表示。最后输 出学生成绩和学生成绩等级。
```html
<body>
<div class="container">
    <form action="" class="form-horizontal">
        <div class="form-group">
            <div class="col-md-9">
                <input type="text" class="form-control" id="input">
            </div>
            <div class="col-md-3">
                <input type="button" class="btn btn-primary" value="查看等级" id="btn">
            </div>
        </div>
        <h2>
            您的成绩等级为：
            <span id="span"></span>
        </h2>
    </form>
</div>
<script>
    var h2 = document.getElementById("span");
    var btn = document.getElementById("btn");
    btn.onclick = function(){
        var input = document.getElementById("input");
        var score = input.value;
        score = +score;
        if(score == ""){
            alert("内容不能为空");
            return;
        }
        if( score != score){
            alert("请输入数字");
            return;
        }
        var grade;
        if(score>=90){
            grade="A";
        }else if(score>=60 && score<=89){
            grade="B";
        }else if(score<60){
            grade="C";
        }
        if(score>100 || score<1){
            alert("输入分数无效");
            h2.innerHTML=("无效");
        }
        h2.innerHTML=(grade);
    }
</script>
</body>
```
2、求出1000以内的所有水仙花数。
```js
for(var i=100;i<1000;++i){
        var g = i%10;
        var s = parseInt(i%100/10);
        var b = parseInt(i/100);
        if(g*g*g+s*s*s+b*b*b == i){
            console.log(b,s,g,i);
        }
    }
```
3、一球从100米高度自由落下，每次落地后反跳回原高度的一半；再落下，求它在
第10次落地时，共经过多少米？第10次反弹多高？
```js
<script>
    //第一种
    var arr = [100];
    var h;
    var zong=0;
    for(var i=0;i<=10;++i){
        h=arr[i]/2;
        arr[i+1]=h;
        zong += arr[i];
    }
    alert(arr[10]);
    alert(zong);
   //第二种
   var a= 100;
   var b ;
   for(var i=1;i<=10;++i){
       b = a/2;
       a = b;
       console.log(b); 
   }
</script>    
```
4、一个5位数，判断它是不是回文数。回文数字例：12321是回文数，个位与万位相同，
十位与千位相同。
```js
var str =12321;
    str = str.toString();
    if(str[0]==str[4] && str[1]==str[3]){
       // alert("是回文数");
    }else{
        alert("不是回文数");
    }
```
5、猴子吃桃问题：猴子第一天摘下若干个桃子，当即吃了一半，还不过瘾，又多吃了
一个。第二天早上又将剩下的桃子吃掉一半，又多吃了 一个。以后每天早上都吃了前
一天剩下的一半零一个。到第10天早上想再吃时，见只剩下一个桃子了。求第一天共
摘了多少。
```js
var c =[1];
    var f ;
    var r =0;
    for(var i=0;i<9;++i){
        f = (c[i]+1)*2;
        c[i+1] = f;
        r += (c[i]+1)*2;
        console.log(r);
    }
    alert(r+1);
```
6、计算从1*1+1*2+1*3+1*4+1*5+…+1*9+2*1+2*2+…+2*9+…+9*1+9*2+…+9*9的值
```js
var p = 0;
    for(var i=1; i<10;++i){
        for(var j=1; j<10;++j){
            p+= i*j;
        }
    }
    console.log(p);
```
7、计算从1*1+2*1+2*2+3*1+…+3*3+…+9*1+9*2+…+9*9的值
```js
var t =0;
for(var i=1;i<=9;++i){
    for(var j=1;j<=i.length;++j){
        t += i*j;
    }
}
console.log(t);
```
8、一个数如果恰好等于它的因子之和，这个数就称为“完数”。例如6=1＋2＋3.编程。
计算出1000以内的完数的个数
```js
var sun = 0;
    var res ="";
    for(var i=1;i<1000;++i){
        for(var j=1;j<i;++j){
            if(i%j == 0){
                sun +=j;
            }
        }
        if(sun == i){
            res = i+"\n";
        }
        console.log(res);
    }
```

