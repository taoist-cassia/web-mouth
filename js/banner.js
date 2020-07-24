// 获取滚动范围的对象
let slideWrap = document.getElementById("slide-wrap");
// 获取滚动的对象 [div.slide-content]
let slideContent = slideWrap.children[0];
// 获取图片对象 [li,li,li]
let liItem = slideContent.getElementsByTagName('li');
// 获取可视区的宽度
let viewWidth = document.documentElement.clientWidth || document.body.clientWidth;
// 获取滑动对象的分页导航 [a,a,a]
let aItem = slideWrap.getElementsByClassName('slide-nav')[0].getElementsByTagName('a');
// prev对象 [span]
let prevButton = slideWrap.getElementsByClassName('slide-prev')[0];
// next对象 [span]
let nextButton = slideWrap.getElementsByClassName('slide-next')[0];
// 当前索引
let currentIndex = 0;
// 开关标记 false:关闭, true:打开
let flag = false;
// 开关状态的定时器
let flagTimer = null;
// 自动播放的定时器
let autoTimer = null;
//设置滑动对象的总宽度
slideContent.style.width = viewWidth * liItem.length + 'px';

//设置li的宽度
for(let i = 0;i < liItem.length; i++){
    liItem[i].style.width = viewWidth +'px';
}

//执行自动播放
autoPlay();

//分页点击事件
//谁触发了事件,this就指向谁
for(let i = 0;i < aItem.length; i++){
    aItem[i].onclick = function(){
        //存储当前索引
        currentIndex = i;
        
        //调用图片滑动的方法
        imgSlide(i);

        //存储当前索引
        let index = 0;
    }
}

//prevButton事件
prevButton.onclick = function(){
    if(flag){ return false;}
    flag = true;
    prev();
}

//nextButton事件
nextButton.onclick = function(){
    if(flag){ return false;}
    flag = true;
    next();
}

function prev(){
    currentIndex --;
    if(currentIndex < 0){ currentIndex = aItem.length - 1;}
    imgSlide(currentIndex);
}

function next(){
    currentIndex ++;
    if(currentIndex == aItem.length){ currentIndex = 0;}
    imgSlide(currentIndex);
}

//滚动
function imgSlide(number){
    let left = number * viewWidth ;
    slideContent.style.left = -left + 'px';
    toogleHigh();
    flagTimer = setTimeout(function(){
        flag = false;
        clearTimeout(flagTimer);
    },1000)
}

//分页按钮高光切换
function toogleHigh(){
    for(let k = 0;k < aItem.length; k++){
        aItem[k].className = '';
    }
    aItem[currentIndex].className = 'current';
}

slideWrap.onmouseenter = function(){
    clearInterval(autoTimer);
}

slideWrap.onmouseleave = function(){
    autoPlay();
}

//自动播放
function autoPlay(){
    autoTimer = setInterval(() => {
        next();
    }, 3000);
}