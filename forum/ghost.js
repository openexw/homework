
/*
$(window).ready(function(){

});
$(function(){

});
*/
//搜索框的显示与隐藏
$('.search input').focus(function(){
    $('#block ').show();
});
$('.search input').blur(function(){
    $('#block ').hide();
});
//动态
$(".list img").mouseover(function(){
    var offset = $(this).offset();
    $(".rwa").fadeIn().css({
        position: "absolute",
        top: offset.top+40,
        left: offset.left
    });
    var src = $(this).prop("src");
    var add =
        '<a href="">'+
        '<img src="'+src+'" alt="">'+
        '</a>'+
        '<a href="">dsgsgs</a>'+
        '<p>威望:0&nbsp;&nbsp;&nbsp;&nbsp;赞同:1</p>';
    $(".rwa").html("");
    $(".rwa").append(add);
});
$(".rwa").mouseover(function(){
    $(".rwa").fadeIn();
});
$(".rwa").mouseout(function(){
    $(".rwa").fadeOut();
});
$(".list img").mouseout(function(){
    $(".rwa").fadeOut();
});




