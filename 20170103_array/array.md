1. 给定一个数组[4,6,7,8,9]，求出数组中所有元素之和。
```js
var a = [4,6,7,8,9];
var num = 0;
for(var i = 0; i<a.length; i++){
    num += a[i];
}
console.log(num);
```   
2. 数组[4,5,6,4,5,7,8,9,7,6,5], 去掉数组中重复的元素。
```js
// 第一种方法   
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

// 第二种方法
 var a = [4,5,6,4,5,7,8,9,7,6,5];
var arr = [];
for (var i = 0; i<a.length; i++){
    var flag = false;
    for (var j = 0; j<arr.length; j++){
        if(a[i] == arr[j]){
            flag = true;
            break;
        }
    }
    if(!flag){
        arr.push(a[i]);
    }
}
console.log(arr);
```

3. 在一个大学的编程选修课班里，我们得到了一组参加该班级的学生数据，分别是姓名、性别、年龄和年级，接下来呢，我们要利用JavaScript的知识挑出其中所有是大一的女生的的名字哦。
学生信息如下：

    ('小A','女',21,'大一'),  ('小B','男',23,'大三'),

    ('小C','男',24,'大四'),  ('小D','女',21,'大一'),

    ('小E','女',22,'大四'),  ('小F','男',21,'大一'),

    ('小G','女',22,'大二'),  ('小H','女',20,'大三'),

    ('小I','女',20,'大一'),  ('小J','男',20,'大三');
```js
var arr = ["100px", "abc"-6, [], -9866, 34, -2, 0, '300', function(){alert(0)}, null, document, [], true, '200px'-30, "23.45元", 5, Number("abc"), function(){alert(3)}, 'xyz'-90];
var btn = document.getElementById("btn");
var h1 = document.getElementById("h1");
var h2 = document.getElementById("h2");
var h3 = document.getElementById("h3");
var h4 = document.getElementById("h4");
var a = [];
btn.onclick = function (){
    for(var i = 0; i<arr.length; i++){
        if(typeof arr[i] === "number" && !isNaN(arr[i])){
            a.push(arr[i]);
        }
    }
    h1.innerHTML = "1.所有的数字是："+a;
};
```
4. 有一个数组，按要求完成如图所示的效果：
 //数组中的元素为：
  var arr = ["100px", "abc"-6, [], -9866, 34, -2, 0, '300', , function(){alert(0)},
        null, document, [], true, '200px'-30, "23.45元", 5, Number("abc"),
        function(){alert(3)}, 'xyz'-90];  