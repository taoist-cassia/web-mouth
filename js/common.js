function loadingMsg(data){
    let wrap = document.getElementById(data.wrap);
    wrap.innerHTML = `<div class="loading-wait">
                        ${data.message}
                        <div class="loading-icon"><i class="iconfont icon-jiazai"></i></div>
                      </div>`
    
}