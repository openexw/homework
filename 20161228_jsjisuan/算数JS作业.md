<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <form action="">
        <input type="text" id="grades">
        <button type="button" onclick="tts()">button</button>
    </form>
    <body>
    
        <script>
            //chenJi
          /*  function tts() {
            var  c = document.getElementById("grades").value;
            var grade;
            console.log(c);
                if(c >= 90){
                    grade = "A";
                }else if(c>=60 && c<90){
                    grade = "B";
                }else if(c<60){
                    grade = "C";
                }
            }
            */
          //suiXianHua
            /*function tts() {
                var s = document.getElementById("grades").value;
                var s1 = s%10;
                var s2 = (s%100-s1)/10;
                var s3 = (s-s%100)/100;
                if(s1*s1*s1+s2*s2*s2+s3*s3*s3 == s){
                    console.log("这是一个水仙花数");
                }else {
                    console.log("这不是一个水仙花数");
                }
            }*/
        //suiXianHua2
    /*
             for(var j =100;j<1000;j++){
                     var s1 = j%10;
                     var s2 = (j%100-s1)/10;
                     var s3 = (j-j%100)/100;
                 if(s1*s1*s1+s2*s2*s2+s3*s3*s3 == j){
                    console.log(j);
                 }
             }*/
        //luoDi
          /*var h = 100;
          var k =0;
          for(var j=0;j<10;j++){
                h =h/2;
                k += h ;
                console.log(h,k+100);
            }*/
        //huiWenShu
        /*function tts() {
             var s = document.getElementById("grades").value;
             var s1 = s%10;
             var s2 = (s%100-s1)/10;
             var s3 = (s-s%100)/100;
             var s4 = (s%10000-s%1000)/1000;
             var s5 = (s%100000-s%10000)/10000;
                 if(s1==s5 && s2==s4){
                    console.log("这是一个回文数");
                 }else {
                    console.log("这不是一个回文数");
                 }
          }*/
        //chiTaoZi
           /* var t = 1;
             for(var j=0;j<9;j++){
             t = (t+1)*2;
             }
             console.log(j+1,t);*/
        //11..+..99  +1
            /*for(var s=11;s<99;s++){
                for(var h=12;h<100;h++){
                s = h+s;
                }
            }
            console.log(s);*/
    
        //jieChen
           /* var h =0;
            for(var j=1;j<10;j++){
                for(var i=1;i<10;i++){
                   h +=j*i;
                    console.log(j+"x"+i+":"+h);
                }
    
            }*/
        //1*1+2*1+2*2+....
          /*  var h = 0;
            for( var j=0;j<10;j++){
                for(var i=1;i<j+1;i++){
                    h+=j*i;
                    console.log(j+"x"+i+":"+h);
                }
            }
    */
       //yinZi
         /*   var a=0;
            for (var i = 1; i < 1000; i++) {
                for (var t = 1; t < i; t++) {
                    if (i%t == 0) {
                        a += t;
                    }
                }
                    if (a == i) {
                        console.log(i);
    
                }
            }*/
    
        </script>
    </body>
    </html>