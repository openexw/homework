var video = document.querySelector("video");
var load = document.querySelector('.load');
var total = document.querySelector('.total');

//显示当前播放的时间
var current = document.querySelector(".current");
//全屏
var expand = document.querySelector(".expand");

var isPlay = document.querySelector(".switch");

//播放进度
var loaded = document.querySelector(".loaded");
var progress = document.querySelector(".progress");
video.oncanplay = function(){
    //隐藏加载按钮
    load.style.display = "none";
    //显示视频
    this.style.display = "block";

    video.controls = 0;

    //显示总时长
    total.innerHTML = getFormatTime(video.duration); //s
};


//播放、暂停
isPlay.onclick = function(){
    if(video.paused){
        video.play();
    }else{
        video.pause();
    }

    this.classList.toggle("fa-pause");

};

//全屏
expand.onclick = function(){
  video.webkitRequestFullscreen();
};

//播放进度
video.ontimeupdate = function () {
    var currentTime = this.currentTime;
    var duration = this.duration;
// 0.3 * 100+"%"
    var percent = currentTime / duration*100+"%";

    loaded.style.width = percent;
    // 00:00:23
    //console.log(currentTime);
    console.log(video.buffered.end(0));
    current.innerHTML = getFormatTime(currentTime);
};

//点击进度条
progress.onclick = function(e){
    var ev = window.event || e;


    var rect = progress.getBoundingClientRect();
    //点击的点与进度条开始的距离
    var left = ev.clientX - rect.left;

    //获取当前时间所占总时长的比例
    var percent = left / rect.width;

    //获取点击点所对应的时间长度
    var currTime = percent * video.duration;
    video.currentTime = currTime;
    //console.log(ev.clientX, this.offsetLeft);
};



function getFormatTime(time) {
    var time = time || 0;
    var h = parseInt(time/3600),
        m = parseInt(time%3600/60),
        s = parseInt(time%60);
    h = h < 10 ? "0"+h : h;
    m = m < 10 ? "0"+m : m;
    s = s < 10 ? "0"+s : s;
    return h+":"+m+":"+s;
}