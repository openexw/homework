//1. 获取元素

var video = document.querySelector("video");
var load = document.querySelector('.load');
var isPlay = document.querySelector('.switch');
var expand = document.querySelector('.expand');

//进度条
var progress = document.querySelector('.progress');
var loaded = document.querySelector('.loaded');
var controls = document.querySelector('.controls');


//时间

var current = document.querySelector('.current');
var total = document.querySelector('.total');
// 显示播放器
video.oncanplay = function () {
    load.style.display = "none";
    this.style.display = "block";
    total.innerHTML = this.duration;
};

//播放与暂停
isPlay.onclick = function () {
    if(video.paused){
        video.play();
    }else{
        video.pause();
    }
    //console.log(this.classList);
    this.classList.toggle("fa-pause");
};

//全屏
expand.onclick = function () {
    launchFullscreen(video); // 整个网页
};


//播放进度条
video.ontimeupdate = function () {
  var currTime = this.currentTime,
      duration = this.duration;

    //播放的百分比
    var per = currTime / duration*100 + "%";

    //设置播放的进度条
    loaded.style.width = per;

    //显示当前播放进度时间
    current.innerHTML = currTime;
};
//点击进度条
progress.onclick = function(e){
    console.log(video.buffered);
    var ev = window.event || e;

    /**
     * getBoundingClientRect() 获得页面中某个元素的左，上，右和下分别相对浏览器视窗的位
     */
        var rect = this.getBoundingClientRect();
    var p = (ev.clientX - rect.left)/rect.width;

    //console.log(p, p*video.duration);
    video.currentTime = p*video.duration;
};


// 判断各种浏览器，找到正确的方法
function launchFullscreen(element) {
    if(element.requestFullscreen) {
        element.requestFullscreen();

        //火狐
    } else if(element.mozRequestFullScreen) {
        element.mozRequestFullScreen();

        //webkit，chrome
    } else if(element.webkitRequestFullscreen) {
        element.webkitRequestFullscreen();

        //微软，ie
    } else if(element.msRequestFullscreen) {
        element.msRequestFullscreen();
    }
}
