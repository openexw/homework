1.输入三个整数x,y,z，请把这三个数由小到大输出。
```js
    function B(x,y,z){
        x>y&&(x=[y,y=x][0]);
        y>z&&(y=[z,z=y][0]);
        x>y&&(x=[y,y=x][0]);
        console.log(x+","+y+","+z);
    }
    B(12,23,9);
```
2.判断101-200之间有多少个素数，并输出所有素数。
```js
    for(var i=101;i<=200;i++) {
        for(var j=2;j<i;j++) {
            if(i%j==0) { // 如果i%j==0的话，说明可以被整除，不是素数！
                s = false;  // 就将布尔值改为false；
                break;   // 就跳出这次的循环，执行i自增1的操作！
            } else {
                s = true;
            }
        }
        if(s){
            console.log(i+"是素数！");
        }// 一个循环结束，如果s为真，则说明没有被整除，是素数，
    }
```
3.输入两个正整数m和n，求其最大公约数和最小公倍数。（利用辗除法）
```js
    bth.onclick=function () {
        var val = input.value;
        var arr = val.split(",");
        var x = +arr[0];
        var y = +arr[1];

        for(var i=1;i<=x*y;i++){
            if(i%x ==0 && i%y == 0){
                h1.innerText="最大公约数为："+i;
                break;
            }
        }
        for(var j=1;j<=x*y;j++){
            if(x%j==0 && y%j==0){
                h1.innerText="最小公倍数为："+j;
            }
        }
    }
```
4.有一分数序列：2/1，3/2，5/3，8/5，13/8，21/13...求出这个数列的前20项之和。
```js
    var x=2,y=1;        //分子，分母
        var sum = 0;    //求和
        var tmp;
        for(var i=0;i<20;i++){
            sum = sum+x/y;  //（0+2/1）（2+3/2）（2+3/2+5/3）
            tmp = x;        //把x的值临时保存
            x = x+y;        //x等于上一次x+y的值
            y = tmp;        //y等于上一次x的值
        }
        console.log(sum);
```
5.给一个不多于5位的正整数，要求：一、求它是几位数，二、逆序打印出各位数字。
```js
    第一种方法：
        var n = prompt("给出一个不多于5位的正整数", "");
        document.write("位数：" + n.length + "<br / >");
        for(var i = 0; i < n.length; i++){
            document.write(n.charAt(i) + "<br / >");
        }
        for(var i = n.length - 1; i >= 0; i--){
            document.write(n.charAt(i));
        }
    第二种方法：
        var num = 12345;
        var str = num+"";
        var len = str.length;
        var s = "";
        for(var i = len; i > 0; i--){
            s += str[i-1];
        }
        console.log(s);
```
6.请输入星期几的第一个字母来判断一下是星期几，如果第一个字母一样，则继续输入第二个字母来判断。
```js
    var input = document.getElementById("input-text");
    var btn_week = document.getElementById("bth");
    var h1 = document.getElementById("h1");
    
    btn_week.onclick = function(){
        var val = input.value;
        var f = val[0];
        if(val.length >1){
            var s = val[1];
        }
        var res = "";
        switch (f){
            case "S":
                if(s == "u"){
                    res = "Sunday";
                }else if(s == "a"){
                    res = "Saturday";
                }else{
                    res = "请输入第二个字母"
                }
                break;
            case "T":
                if(s == "u"){
                    res = "Tuesday";
                }else if(s == "h"){
                    res = "Thursday";
                }else{
                    res = "请输入第二个字母"
                }
                break;
            case "M":
                res = "Monday";
                break;
            case  "W":
                res = "Wednesday";
                break;
            case  "F":
                res = "Friday";
                break;
            default:
                res = "您搞错了";
        }
        h1.innerText = res;
    }
```
7.将一个数组逆序输出。
```js
    var arr=[1,2,3,4,5,6,7,8,9];
        for(var i=0,length=arr.length;i<length;i++){
            var halfIndex=length%2==0?halfIndex=length/2:Math.ceil(length/2);
            if(i<halfIndex){
                var leftvalue=arr[i],
                    rightvalue=arr[length-1-i];
                arr[i]=rightvalue;
                arr[length-1-i]=leftvalue;
            }
        }
        alert(arr.join(","));
```