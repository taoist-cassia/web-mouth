//资讯动态
//存储数据
let data = {};
//请求数据
$.ajax({
    url: "./data/newsCategory.php", //请求的url地址
    dataType: "json", //返回格式为json
    async: false, //请求是否异步，默认为异步，这也是ajax重要特性
    cache: true, //是否读取缓存
    timeout: 5000,//设置超时
    data: { 
        module:"news"
    }, //参数值
    type: "POST", //请求方式
    beforeSend: function(){
        //请求前的处理
    },
    success: function(req){//请求成功的处理
        let tagMenu = document.getElementsByClassName('tab-menu')[0];
        let reqData = req.data;
        let menuHtml = '';

        reqData.forEach((item,index) =>{
            let currentName = '';
            if(index === 0 ){ currentName = 'current'; }
            menuHtml += `<a data-type="${item.type}" href="javascript:void(0);" onclick="loadNewsData({_this:this,id:${item.id},index:${index}})" title="${item.categoryName}" class="${currentName}">${item.categoryName}</a>`
            // menuHtml += `<a data-request="false" href="javascript:void(0);" onclick="loadNewsData({_this:this,id:${item.id},index:${index}})" title="${item.categoryName}" class="${currentName}">${item.categoryName}</a>`
        })
        //菜单
        tagMenu.innerHTML = menuHtml;
        //默认展示第一个分类的数据
        loadNewsData({_this:tagMenu.children[0],id:reqData[0].id,index:0});
    },
    complete: function(){
        //请求完成的处理
    },
    error: function(){
        //请求出错的处理
    }
})

function loadNewsData(params){
    //分类类型
    let categoryType = params._this.getAttribute('data-type');
    //获取内容区
    let tabContentWrap = document.getElementById("tab-content-wrap");
    //分类高光
    let aItem =  document.getElementsByClassName('tab-menu')[0].children;
    //清除所有栏目的高光
    for(let i = 0; i < aItem.length; i++){ aItem[i].className = ''; }
    //当前栏目的高光
    params._this.className = 'current';
    //获取存储的数据
    let list = data[categoryType];
    undefined == false;
    if(list){
        tabContent(list,tabContentWrap);
        return false;
    }
    //请求数据
    $.ajax({
        url: "./data/indexNews.php", //请求的url地址
        dataType: "json", //返回格式为json
        async: false, //请求是否异步，默认为异步，这也是ajax重要特性
        cache: true, //是否读取缓存
        timeout: 5000,//设置超时
        data: JSON.stringify({ 
            categoryId:params.id
        }), //参数值
        type: "POST", //请求方式
        header:{
            "Content-Type": "application/json, charset=utf-8"
        },
        beforeSend: function(){
            //请求前的处理
        },
        success: function(req){//请求成功的处理
            let reqData = req.data;
            tabContent(reqData,tabContentWrap);
            //存储数据
            data[categoryType] = reqData;
        },
        complete: function(){
            //请求完成的处理
        },
        error: function(){
            //请求出错的处理
        }
    })
}

//封装公共代码
function tabContent(data,content){
    let itemHtml = `<div class="row-container gutter-15 index-news-list padding-top-73 padding-bottom-102">`;

    data.forEach((item,index) =>{
        let time = item.time.split(' ');
        itemHtml += `<div class="col-item-3">
                        <div class="item">
                            <div style="background-image: url(${item.imgUrl}); background-size: cover;">
                                <img src="images/blank/indexNews.png" alt="${item.title}" width="100%">
                            </div>
                            <div class="figure-content padding-top-24">
                                <h4 class="title">${item.title}</h4>
                                <time datetime="${item.time}" pudate="${time[0]}">${time[0]}</time>
                                <i class="line"></i>
                                <p class="dec">${item.dec}</p>
                                <a href="" class="link-more">
                                    查看更多
                                    <i class="iconfont icon-jiantou icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>`;
    })
    itemHtml += `</div>`;
    content.innerHTML = itemHtml;
}

/* <div id="tab-content-wrap">
    <!-- 行业动态 -->
    <div id="industry"></div>
    <!-- 朗朗资讯 -->
    <div id="information" style="display:none;"></div>
    <!-- 媒体报道 -->
    <div id="media" style="display:none;"></div>
    <!-- 公益活动 -->
    <div id="welfare" style="display:none;"></div>
</div> */
/*function loadNewsData(params){
    //获取request标识,判断是否已请求成功数据.true为请求成功,false为未请求
    let getRequest = params._this.getAttribute('data-request');

    //获取内容区
    let tabContentWrap = document.getElementById("tab-content-wrap").children;
    for(let i = 0; i < tabContentWrap.length; i++){
        tabContentWrap[i].style.display = 'none';
    }
    //显示指定的区域
    tabContentWrap[params.index].style.display = 'block';
    //分类高光
    let aItem =  document.getElementsByClassName('tab-menu')[0].children;
    //清除所有栏目的高光
    for(let i = 0; i < aItem.length; i++){
        aItem[i].className = '';
    }
    //当前栏目的高光
    params._this.className = 'current';

    if(getRequest === 'true'){ return false; }
    $.ajax({
        url: "./data/indexNews.php", //请求的url地址
        dataType: "json", //返回格式为json
        async: false, //请求是否异步，默认为异步，这也是ajax重要特性
        cache: true, //是否读取缓存
        timeout: 5000,//设置超时
        data: JSON.stringify({ 
            categoryId:params.id
        }), //参数值
        type: "POST", //请求方式
        header:{
            "Content-Type": "application/json, charset=utf-8"
        },
        beforeSend: function(){
            //请求前的处理
        },
        success: function(req){//请求成功的处理
            let box = document.getElementsByClassName('box')[0];
            let reqData = req.data;
            let itemHtml = `<div class="news-wrap"><div class="box clearfix">`;
    
            reqData.forEach((item,index) =>{
                let time = item.time.split(' ');
                itemHtml += `
                        <div class="item">
                            <img src="${item.imgUrl}" alt="${item.title}">
                            <h4 class="title">${item.title}</h4>
                            <time datetime="${item.time}" pudate="${time[0]}">${time[0]}</time>
                            <i class="line"></i>
                            <p class="dec">${item.dec}</p>
                            <a href="" class="link-more">
                                查看更多
                                <i class="iconfont icon-jiantou icon"></i>
                            </a>
                        </div>`;
            })
            itemHtml += `</div></div>`;
    
            tabContentWrap[params.index].innerHTML = itemHtml;
            //请求成功修改标识
            params._this.setAttribute('data-request','true');
        },
        complete: function(){
            //请求完成的处理
        },
        error: function(){
            //请求出错的处理
        }
    })
}*/