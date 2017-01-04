1.给定一个数组[4,6,7,8,9]，求出数组中所有元素之和。
```js   
    var arr =[4,6,7,8,9];
    var sum =0;
    for(var i=0;i<arr.length;i++){
        aww +=arr[i];
    }
    console.log(aww);
```
2.数组[4,5,6,4,5,7,8,9,7,6,5], 去掉数组中重复的元素。
```js
    var ar =[4,5,6,4,5,7,8,9,7,6,5];
    var res =[];
    for(i = 0;i<ar.length;i++){
        var flag = false;  //默认没有重复元素
        for(var j=0;j<res.length;j++){
            if(ar[i] == res[j]){
                flag = true;
                break;
            }
        }
        if(!flag){
            res.push(ar[i]);
        }
    }
    console.log(res)
```
3.在一个大学的编程选修课班里，我们得到了一组参加该班级的学生数据，分别是姓名、性别、年龄和年级，接下来呢，我们要利用JavaScript的知识挑出其中所有是大一的女生的的名字哦。
```js
    var a =["小A","女",21,"大一"];
    var b =["小B","男",23,"大三"];
    var c =["小C","男",24,"大四"];
    var d =["小D","女",21,"大一"];
    var e =["小E","女",22,"大四"];
    var f =["小F","男",21,"大一"];
    var g =["小G","女",22,"大二"];
    var h =["小H","女",20,"大三"];
    var i =["小I","女",20,"大一"];
    var j =["小J","男",20,"大三"];
    var arr =[a,b,c,d,e,f,g,h,i,j];
    for(var i=0;i<arr.length;i++) {
        if (arr[i][1] == "女" && arr[i][3] == "大一") {
            var b = arr[i][0];
            console.log(b);
        }
    }
```
4.有一个数组，按要求完成如图所示的效果：
     //数组中的元素为：
```js 
     var arr = ["100px", "abc"-6, [], -9866, 34, -2, 0, '300', , function(){alert(0)},null, document, [], true, '200px'-30, "23.45元", 5, Number("abc"),function(){alert(3)}, 'xyz'-90];
    
    var num = [];
    var canNum = [];
    var canNumAfer = [];
    var maxNum;
    var indexArr = [];

    //1 所有的数字是
        if (parseFloat(arr[i]).toString() != "NaN" && !isNaN(arr[i]) && typeof arr[i] != "string" ) {
            num.push(arr[i]);
        }
    //2 可以转成数字的
         if(parseInt(arr[i])){
            canNum.push(arr[i]);
            canNumAfter.push(parseInt(arr[i]))
    //3 转成数字的最大值
        function so(a, b){
            return b-a;
        }
        canNumAfter.sort(so);
        console.log(canNumAfter);
        console.log(canNumAfter[0]);
        console.log(indexArr.toString());
    //4.所有运算结果是NaN的位置
        if(isNaN(arr[i]) && typeof arr[i] != "object" && typeof arr[i] != "functon"){
            if(arr[i].toString() == "NaN"){
                indexArr.push(i);
            }
        }
```