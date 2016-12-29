## 1.输入三个整数x,y,z，请把这三个数由小到大输出。
```js
    function I(x,y,z){
        x>y&&(x=[y,y=x][0]);
        y>z&&(y=[z,z=y][0]);
        x>y&&(x=[y,y=x][0]);
        console.log(x+","+y+","+z);
    }
    I(100,150,200);
```
2.判断101-200之间有多少个素数，并输出所有素数。
```js
    for(var i=101;i<=200;i++) {
        for(var j=2;j<i;j++) {
            if(i%j==0) { // 假如i%j==0的话，说明可以被整除，不是素数！
                 = false;  // 将布尔值改为false；
                break;   // 跳出此次循环，执行i自增1的操作！
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
    
```
4.有一分数序列：2/1，3/2，5/3，8/5，13/8，21/13...求出这个数列的前20项之和。
```js
    
```
5.给一个不多于5位的正整数，要求：一、求它是几位数，二、逆序打印出各位数字。
```js
    var op = prompt("给出一个不多于5位的正整数", "");
        document.write("位数：" + op.length + "<br / >");
        for(var i = 0; i < op.length; i++){
            document.write(op.charAt(i) + "<br / >");
        }
        for(var i = op.length - 1; i >= 0; i--){
            document.write(op.charAt(i));
        }
```
6.请输入星期几的第一个字母来判断一下是星期几，如果第一个字母一样，则继续判断第二个字母。
```js
    
```
7.将一个数组逆序输出。
```js
    var array=[1,2,3,4,5,6,7,8,9];
        for(var i=0,length=array.length;i<length;++i){
            var halfIndex=length%2==0?halfIndex=length/2:Math.ceil(length/2);
            if(i<halfIndex){
                var leftvalue=array[i],
                    rightvalue=array[length-1-i];
                array[i]=rightvalue;
                array[length-1-i]=leftvalue;
            }
        }
        alert(array.join(","));
```