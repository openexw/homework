1.输入三个整数x,y,z，请把这三个数由小到大输出
```js
 var df =[5,8,4];
    for(i=0;i<df.length;i++){
        for(j=0;j<df.length;j++){
            if(df[j]>df[j+1]){
                var a =df[j+1];
                df[j+1]=df[j];
                df[j]=a;
            }
        }
    }
    console.log(df);
```

2.判断101-200之间有多少个素数，并输出所有素数。
```js
 for(var i=100;i<200;++i){
        for(var j=2;j<i-1;++j){
            i /= j;
            //var as = i%j;
            if(i != 0){
                console.log(i);
            }
        }
    }
```

3.输入两个正整数m和n，求其最大公约数和最小公倍数。（利用辗除法）
```js
//最小公倍数
    var h5 = document.getElementById("span5");
    var btn5 = document.getElementById("btn5");
    btn5.onclick = function() {
        var input3 = document.getElementById("input3");
        var val = input3.value;
        var arr = val.split(",");
        var x =+arr[0];
        var y =+arr[1];
        for(var i=1;i<=x*y;++i){
            if(i%x == 0 && i%y ==0){
                h5.innerHTML = i;
                break;
            }
        }
    }

    //最大公约数
    var h6 = document.getElementById("span6");
    var btn6 = document.getElementById("btn6");
    btn6.onclick = function(){
        var input3 = document.getElementById("input3");
        var val = input3.value;
        var arr = val.split(",");
        var x = +arr[0];
        var y = +arr[1];

        for(var i=1; i<= x*y; i++){
            if(x%i == 0 && y%i == 0){
                console.log(i);
                h6.innerHTML = i;
            }
        }
    }
```
4有一分数序列：2/1，3/2，5/3，8/5，13/8，21/13...求出这个数列的前20项之和。
输入三个整数x,y,z，请把这三个数由小到大输出
```js
var x =2,y =1;
var tmp;
for(var i=0;i<20;i++){
    
}
```
5.给一个不多于5位的正整数，要求：一、求它是几位数，二、逆序打印出各位数字。
输入三个整数x,y,z，请把这三个数由小到大输出
```js
var q =23854;
    q = String(q);
    console.log(q.length);//求它是几位数
    for(var i=1;i<q.length;++i){
        var a = q[q.length-i];
        console.log(a); //逆序打印出各位数字
    }
```
6.请输入星期几的第一个字母来判断一下是星期几，如果第一个字母一样，则继续判断
第二个字母。
```js
var h7 = document.getElementById("span7");
    var btn7 = document.getElementById("btn7");
    btn7.onclick=function(){
        var input3 = document.getElementById("input3");
        var val = input3.value;
        var a =val[0];
        if(val.length>1){
            var s =val[1];
        }
        var res = "";
        switch (a){
            case "s":
                if(s == "u"){
                    res ="Sunday(星期天)";
                }else if(s == "a"){
                    res ="Saturday(星期六)";
                }else{
                    res="请输入第二个字母";
                }
                break;
            case "t":
                if(s == "u"){
                    res ="Tuesday(星期二)";
                }else if(s == "h"){
                    res ="Thursday(星期四)";
                }else{
                    res="请输入第二个字母";
                }
                break;
            case "m":
                res ="Monday(星期一)";
                break;
            case "w":
                res ="Wednesday(星期三)";
                break;
            case "f":
                res ="Friday(星期五)";
                break;
            default:
                res ="请输入首字母"
        }
        h7.innerHTML=res;
    }
```

7.将一个数组逆序输出。
```js
var w =["hehe",25,"good",16,9];
    for(var i=1;i<=w.length;++i){
         var a = w[w.length-i];
         console.log(a);//逆序打印出数组的各个元素
     }
```