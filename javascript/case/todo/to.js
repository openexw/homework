var data = [
    [true, "sf"],
    [false, "今天去吃饭"],
];
/**
 * Fun: 创建一个todo
 * @param todo
 */
var createTodo = function(todo){
    var oTr = document.createElement("tr");
    var oTd1 = document.createElement("td");
    oTd1.setAttribute("width", "50");

    var oTd2 = document.createElement("td");
    oTd2.className = "todoCon";
    var oTd3 = document.createElement("td");
    oTd3.setAttribute("width", "60");
    oTd2.innerHTML = todo[1];

    if(todo[0] == true){ //如果已经完成了
        // 选择框的变化
        var icon = document.createElement("i");
        icon.setAttribute("class","glyphicon glyphicon-ok icon-ok");
        oTd1.appendChild(icon);

        //内容的变化
        var conTd = oTd2.innerHTML;
        oTd2.innerHTML = "";
        var oDel = document.createElement("del");
        oDel.innerHTML = conTd;
        oTd2.appendChild(oDel);
    }else{
        // 选择框的变化
        var checkbox = document.createElement("input");
        checkbox.setAttribute("type","checkbox");

        checkbox.onclick = function(){
            // 选择框变成勾
            var icon = document.createElement("i");
            icon.setAttribute("class","glyphicon glyphicon-ok icon-ok");

            // 添加删除线
            //内容的变化
            var conTd = oTd2.innerHTML;
            oTd2.innerHTML = "";
            var oDel = document.createElement("del");
            oDel.innerHTML = conTd;
            this.parentNode.nextSibling.appendChild(oDel);

            this.parentNode.replaceChild(icon,this);
        };
        oTd1.appendChild(checkbox);
    }

    //删除按钮

    var i = document.createElement("i");
    i.className = "glyphicon glyphicon-remove text-center icon-del";
    oTd3.appendChild(i);

    oTr.appendChild(oTd1);
    oTr.appendChild(oTd2);
    oTr.appendChild(oTd3);

    var tbody = document.getElementsByTagName("tbody")[0];
    console.log(tbody);
    tbody.insertBefore(oTr,tbody.firstChild);
};


var addBtnTodo = function(){
    document.getElementById("add").onclick = function(){
        var listCon = document.getElementById("listCon");
        var lstVal = listCon.value;
        console.log(listCon);
        //判断文本框中是否输入内容
        if(lstVal != ""){
            var curData = [false, lstVal];
            data.push(curData);
            createTodo(curData);
            listCon.value = "";
        }
        console.log(data);
    };
};
addBtnTodo();
for(var i=0; i<data.length; i++){
    createTodo(data[i]);
}
delTodoList();
function delTodoList(){
    var del = document.querySelectorAll(".icon-del");
    for(var i=0; i<del.length; i++){
        del[i].onclick = function(){
            var tr = this.parentNode.parentNode;
            var tbody = document.getElementsByTagName("tbody")[0];
            tbody.removeChild(tr);
//                    console.log();
        }
    }
}
modify();
function modify(){
    var con = document.querySelectorAll(".todoCon");
    for(var i=0; i<con.length; i++){
        con[i].ondblclick = function(){
            this.setAttribute("contenteditable", true);
            this.setAttribute("class", "todoCon form-control");

//                    console.log();
        }
    }
}/**
 * Created by marmo on 2017/1/5.
 */
