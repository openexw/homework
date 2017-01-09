var chess = document.getElementById("chess");

//斜线位置

/**
 * [行，列，斜线/反斜线]： 0-斜线；1-反斜线
 * [0, 3, 0]
 */
var slashArr = [

    [0, 3, 0],
    [0, 4, 1],
    [1, 3, 1],
    [1, 4, 0],
    [7, 3, 0],
    [7, 4, 1],
    [8, 3, 1],
    [8, 4, 0]
];

//小折线位置
/**
 *[1, 0, 2]
 * [x, y, 位置]
 * 位置： 左上-0；左下-3；右上-1；右下-2
 */
var brokenLine = [
    [1, 0, 2],
    [1, 1, 3],
    [2, 0, 1],
    [2, 0, 3],
    [2, 1, 0],
    [2, 1, 2]
];
/**
 * 获取每个格子的宽度
 */
function getWidth(){
    //获取棋盘的宽度
    var width = chess.clientWidth;
    //3表示的是每个格子的边框
    return (width - 8*3)/8;
}
//每个格子的宽度
var w = getWidth();
for(var i=0; i<9; i++){
    var div = document.createElement("div");
    //设置行的高度
    div.style.height = w+"px";

    //判断“楚河、汉界”
    if(i == 4){
        div.className = "boundary";
        for(var k=0; k<2; k++){
            var span = document.createElement("span");
            span.className = "line-b";
            if(k==0){
                span.innerText = "楚河"
            }else{
                span.innerText = "汉界"
            }
            div.appendChild(span)
        }
    }else{
        for(var j=0; j<8; j++){
            var span = document.createElement("span");
            span.className = "line";
            span.style.width = w+"px"
            span.style.height = w+"px"
            div.appendChild(span);
            //画斜线
            drawSlash(i, j, w, span);
            //画折线
            drawBrokenLine(i, j, w, span);
//                var flag = 1==0 && j==3 || i==1 && j==4;
            /*if(i==0 && j==3 || (i==1 && j==4) || i==7 && j==3 || i==8 && j==4){
             drawSlash(i, i, w, span);
             }
             if(i==0 && j==4 || (i==1 && j==3) || i==7 && j==4 || i==8 && j==3){
             drawSlash(i, i, w, span);

             }*/

        }
    }
    chess.appendChild(div)
}

/**
 * 画斜线
 * @param x 行
 * @param y 列
 * @param w 每个格子的宽度
 * @param obj 格子对象
 */
function drawSlash(x, y, w, obj){
    //获取宽度
    var len = Math.sqrt(2*w*w);
    for(var i=0; i<slashArr.length; i++){
        if(slashArr[i][2] == 0){ //斜线
            if(slashArr[i][0] == x && slashArr[i][1] == y){
                var i = document.createElement("i");
                i.style.width = len+"px";
                i.className = "slash";
                obj.appendChild(i);
            }
        }else if(slashArr[i][2] == 1){ //反斜线
            if(slashArr[i][0] == x && slashArr[i][1] == y){
                var i = document.createElement("i");
                i.style.width = len+"px";
                i.className = "slash backlash";
                obj.appendChild(i);
            }
        }
    }
}

/**
 * 画折线（小矩形）
 * @param x 行
 * @param y 列
 * @param w 每个格子的宽度
 * @param obj 格子对象
 */
function drawBrokenLine(x, y, w, obj){
    for(var i=0; i<brokenLine.length; i++){
        switch(brokenLine[i][2]){
            case 0: //左上
                if(brokenLine[i][0] == x && brokenLine[i][0] == y){
                    var i = document.createElement("i");
                    i.style.width = w/3+"px";
                    i.style.height = w/3+"px";
                    i.className = "broken broken-top-left";
                    obj.appendChild(i);
                }

                break;
            case 1: //右上
                if(brokenLine[i][0] == x && brokenLine[i][0] == y){
                    var i = document.createElement("i");
                    i.style.width = w/3+"px";
                    i.style.height = w/3+"px";
                    i.className = "broken broken-top-right";
                    obj.appendChild(i);
                }
                break;
            case 2: //左下
                if(brokenLine[i][0] == x && brokenLine[i][0] == y){
                    var i = document.createElement("i");
                    i.style.width = w/3+"px";
                    i.style.height = w/3+"px";
                    i.className = "broken broken-bottom-right";
                    obj.appendChild(i);
                }

                break;
            case 3: //右下
                if(brokenLine[i][0] == x && brokenLine[i][0] == y){
                    var i = document.createElement("i");
                    i.style.width = w/3+"px";
                    i.style.height = w/3+"px";
                    i.className = "broken broken-bottom-left";
                    obj.appendChild(i);
                }
                break;
        }
    }
}
/* for(var i=1; i<10; i++){
 var par = document.createElement("div");
 for(var j=1; j<=i; j++){
 var child = document.createElement("span");
 child.innerHTML = (i)+"*"+(j)+"="+(i)*(j);
 par.appendChild(child);
 }
 chess.appendChild(par);
 }*/
