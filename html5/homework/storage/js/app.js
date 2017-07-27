$.ajax({
    url: "http://gank.io/api/random/data/Android/20",
    dataType: "json",
    success: function(data){
        var str = JSON.stringify(data);
        localStorage.setItem("data", str);

        var strJson = localStorage.getItem("data");

        var datas = JSON.parse(strJson);
        var res = datas.results;
//console.log(res);

        var con = bindHtml(res);
        $(".list").html(con);

        /*$(".list li").click(function(){
            console.log(this);
        });*/
        function bindHtml(data){
            var html = '';
            for(var i=0; i<data.length; i++){
                    html += '<li>';
                    html += '<img src="holder.js/200x120" alt="" />';
                    html += '<div class="con">';
                    html += '<div class="title">'+data[i].desc+'</div>';
                    html += '<p>'+data[i].who+'</p>';
                    html += '</div>';
                    html += '</li>';
            }
            return html;
        }
    }
});

