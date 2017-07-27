var h1 = document.getElementById("h1");

var btn1 = document.getElementById("btn1");
var bonus; //奖金

btn1.onclick = function(){
    var text = document.getElementById("input-text1");
    var turnover = text.value; //营业额

    var low10 = turnover*0.1;
    var low20 = 10*0.1 + (turnover-10)*0.075; //10*0.1 + (turnover-10)*0.075 20
    var low40 = 10*0.1 + 10*0.075 + (turnover-20)*0.05; //10*0.1 + 10*0.075 + (turnover-20)*0.05
    var low60 = 10*0.1 + 10*0.075 + 20*0.05 + (turnover-40)*0.03; //10*0.1 + 10*0.075+ 20*0.05 + (turnover-40)*0.03
    var low100 = 10*0.1 + 10*0.075 + 20*0.05 + 20*0.03 + (turnover-60)*0.015; //10*0.1 + 10*0.075 + 20*0.05 + 20*0.03 + (turnover-60)*0.015
    var height100 = 10*0.1 + 10*0.075 + 20*0.05 + 20*0.03 + 40*0.015 + (turnover-100)*0.01; //10*0.1 + 10*0.075+20*0.05+20*0.03 + 40*0.015 + (turnover-100)*0.01


    switch (true){
        case turnover <= 10:
            bonus = low10;
            break;
        case turnover>10 && turnover<20:
            bonus = low20;
            break;
        case turnover>=20 && turnover<40:
            bonus = low40;
            break;
        case turnover>=40 && turnover < 60:
            bonus = low60;
            break;
        case turnover>=60 && turnover<=100:
            bonus = low100;
            break;
        case turnover > 100:
            bonus = height100;
            break;
    }

    if(bonus){
        h1.innerText = bonus;
    }
}

var btn2 = document.getElementById("btn2");

btn2.onclick = function(){
    var text = document.getElementById("input-text2");
    var date = text.value; //日期

    date = date.split("-");

    var years = +date[0];
    var mouth = +date[1];
    var day = +date[2];

    var days = 0; //前几个月的天数之和



    //获取年月日
    var year = +date[0];
    var mouth = +date[1];
    var day = +date[2];

    var days = 0; //天数
    switch (mouth){
        case 1: //31
            days = 0;
            break;
        case 2: //28
            days = 31;
            break;
        case 3: //31
            days = 59;
            break;
        case 4: //30
            days = 90;
            break;
        case 5: //31
            days = 120;
            break;
        case 6: //30
            days = 151;
            break;
        case 7: //31
            days = 181;
            break;
        case 8: //31
            days = 212;
            break;
        case 9: //30
            days = 243;
            break;
        case 10: //31
            days = 273;
            break;
        case 11: //30
            days = 304;
            break;
        case 12: //31
            days = 334;
            break;
    }

    /**
     * 1. 能被4整除但不能被100整除 或者
     * 2. 能被400整除
     */
    //判断是否为闰年
    if((year%4 ==0 && year%100 !==0) || (year % 400 == 0)){
        //闰年月份大于2月时，天数加1
        if(mouth > 2){
            days += 1;
        }
    }

    h1.innerText = days + day;
}