var slideBox = document.getElementById("slide-box");
var li = slideBox.getElementsByTagName("li");
var len = li.length;
var slide = document.getElementById("slide");
var sWidth = slide.clientWidth; //获取幻灯片的宽度
var index = 0; //图片播放的索引位置
var timer; //定时器

function Stratmove(obj,json,funEnd,callback){
    clearInterval(obj.timer);
    obj.timer=setInterval(function(){
        for(var attr in json){
            var bStop=true,
                cuur=parseFloat(getClass(obj,attr)),
                speed=0;

            //透明度
            if(attr=="opacity"){
                cuur=Math.round(parseFloat(getClass(obj,attr))*100);
            }else{
                cuur=parseFloat(getClass(obj,attr));
            }
            speed=(json[attr]-cuur)/8;
            speed=speed>0?Math.ceil(speed):Math.floor(speed);
            if(cuur!=json[attr]){
                bStop=false;
            }
            if(attr=="opacity"){
                obj.style["opacity"]=(cuur+speed)/100;
                obj.style["filter"]="alpha(opacity="+cuur+speed+")";

            }else{
                obj.style[attr]=Math.round(cuur+speed)+"px";
            }
            if(bStop){
                clearInterval(obj.timer);
                callback();
            }
            if(funEnd)funEnd();
        }
    },30)
}

/*var tiems = setInterval(function(){
    console.log(slideBox.clientWidth);
    slideBox.innerHTML += slideBox.innerHTML;
    var timer = setInterval(function(){

        slideBox.style.position = "absolute";
        slideBox.style.left = -i+"px";

        if(slideBox.offsetLeft < - slideBox.offsetWidth / 2){
            slideBox.style.left = '0';
        }else if(slideBox.offsetLeft > 0){
            slideBox.style.left = - slideBox.offsetWidth / 2 + 'px';
        }
        i+=10;
    }, 10);
    console.log(timer);


   count ++;

}, 2000);*/


