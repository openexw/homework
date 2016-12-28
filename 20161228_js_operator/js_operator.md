1. 设学习成绩变量为score，成绩等级变量为grade。学习成绩>=90分的同学用A表示，60-89分之间的用B表示，60分以下的用C表示。最后输 出学生成绩和学生成绩等级。

```html

<form action="">
    <input type="text" id="text-con">
    <input type="button" id="btn" value="查看 ">
</form>
<h1 id="h1"></h1>

```

```js

var btn = document.getElementById("btn");
var h1 = document.getElementById("h1");
var grade;
btn.onclick = function () {
    var text = document.getElementById("text-con");
    var score = text.value;/*获取输入框的内容*/
    if(score == ""){
        alert("请输入数值");
        return;
    }
    var s = +score;
    if(s != s){
        alert("请输入正确的数值");
        return;
    }
    if(score>100){
        alert("请输入正确的成绩");
    }
    if(score>=90 && score<100){
        grade = "你的成绩为：A";
    }
    if(score>=60 && score<89){
        grade = "你的成绩为：B";
    }
    else if(score<60){
        grade = "你的成绩为：C";
    }
    h1.innerHTML = grade;
};

```

2. 求出1000以内的所有水仙花数。

```js

var a, b, c;
for (var i = 100; i < 1000; ++i) {
    a = i % 10;
    b = ((i / 10) % 10);
    b = parseInt(b);
    c = i / 100;
    c = parseInt(c);
    if (i == a * a * a + b * b * b + c * c * c) {
        console.log(i+"\t");
    }
}

```

3. 一球从100米高度自由落下，每次落地后反跳回原高度的一半；再落下，求它在第10次落地时，共经过多少米？第10次反弹多高？

```js

var a = 0,b = 100;
for (var i = 1 ; i <= 10 ; i++){
    a += b;
    b = b/2;
}
console.log("第十次反弹经过"+a+"米");
console.log("第十次反弹高度为"+b+"米");

```

4. 一个5位数，判断它是不是回文数。回文数字例：12321是回文数，个位与万位相同，十位与千位相同。

```js

function checkHWS(num) {
    var str = num.toString();
    var flag = true;
    for (var i = 0, len = str.length, n = (len - 1) / 2; i < n; i++) {
        if (str.charAt(i) != str.charAt(len - 1 - i)) {
            flag = false;
            break;
        }
    }
    console.log(str, flag ? '是' : '不是', '回文数');
    return flag;
}
// 判断是否回文数
checkHWS(12321);

```

5. 猴子吃桃问题：猴子第一天摘下若干个桃子，当即吃了一半，还不过瘾，又多吃了一个。第二天早上又将剩下的桃子吃掉一半，又多吃
了 一个。以后每天早上都吃了前一天剩下的一半零一个。到第10天早上想再吃时，见只剩下一个桃子了。求第一天共摘了多少。

```js

var n=1;
for(var i=1;i<=9;i++){
    n=(n+1)*2;
}  
console.log(n);

```

6. 计算从1x1+1x2+1x3+1x4+1x5+…+1x9+2x1+2x2+…+2x9+…+9x1+9x2+…+9x9的值

```js

for( var a = 1; a < 10; a++ )
{
    for( var b = 1; b < 10; b++ )
    {
        document.write( b + "x" + a + "=" + a*b );
        document.write( " " );
    }
    document.write( "<br />" );
}

```

7. 计算从1x1+2x1+2x2+3x1+…+3x3+…+9x1+9x2+…+9x9的值

```js

for( var a = 1; a < 10; a++ )
{
    for( var b = 1; b <= a ; b++ )
    {
        document.write( b + "x" + a + "=" + a*b );
        document.write( " " );
    }
    document.write( "<br />" );
}

```

8. 一个数如果恰好等于它的因子之和，这个数就称为“完数”。例如6=1＋2＋3.编程。计算出1000以内的完数的个数

```js

var i,j,k;
for(i = 1;i < 1000;i++){
    k = 0;
    for(j = 1;j < i;j++){
        if(i%j == 0){
            k = k+j;
        }
    }
    if(k == i){
        document.write(k);
        document.write(" ");
    }
}

```