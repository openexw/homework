### homework

1. 给定一个数组[4,6,7,8,9]，求出数组中所有元素之和。
```js
var a=[4,6,7,8,9];
var b= 0;
for(var i=0;i<a.length;i++){
    num+=a[i];
}
consle.log(b);
```

2. 数组[4,5,6,4,5,7,8,9,7,6,5], 去掉数组中重复的元素。
```js
    Array.prototype.e = function() {
        var a = {}, c = [], l = this.length;
        for (var i = 0; i < l; i++) {
            var b = this[i];
            var d = (typeof b) + b;
            if (a[d] === undefined) {
                c.push(b);
                a[d] = 1;
            }
        }
        return c;
    };
    alert([4,5,6,4,5,7,8,9,7,6,5].e());
```
```js
var a2 =[4,5,6,4,5,7,8,9,7,6,5];
var res =[];
for (var i=0;i<a2.length;i++){
    var flag =false;
    for(var j=0;j<res.length;j++){
        if(a2[i] ==res[j]){
            flag= true;
            break;
        }
}
if(!(flag)){
    res.push(a2[i]);
}
```
```js

```
3. 在一个大学的编程选修课班里，我们得到了一组参加该班级的学生数据，
分别是姓名、性别、年龄和年级，接下来呢，我们要利用JavaScript的知识
挑出其中所有是大一的女生的的名字哦。
```js
   var a = [['小A', '女', 21, '大一'], ['小B', '男', 23, '大三'],
        ['小C', '男', 24, '大四'], ['小D', '女', 21, '大一'],
        ['小E', '女', 22, '大四'], ['小F', '男', 21, '大一'],
        ['小G', '女', 22, '大二'], ['小H', '女', 20, '大三'],
        ['小I', '女', 20, '大一'], ['小J', '男', 20, '大三']];
    var arr1 = new Array();
    var n = 0;
    for (i = 0; i < a.length; i++) {
        if (a[i][3] == "大一") {
            arr1[n] = a[i];
            document.write(arr1[n] + "<br/>");
            n = n + 1;
        }
    }
    document.write("大一人数: " + arr1.length + "<br/>" + "<br/>");
    for (i = 0; i < arr1.length; i++) {
        switch (arr1[i][1]) {
            case '女':
                document.write(arr1[i] + "<br/>");
                n = n + 1;
        }
    }

```



4. 示的效果：有一个数组，按要求完成如图所

