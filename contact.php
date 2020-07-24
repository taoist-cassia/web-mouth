<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>手把手撸码前端</title>  
    <meta name="description" content=""> 
    <meta name="keyword" content="">  
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/common.css">    
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./font/iconfont/iconfont.css">
    <!--引用百度地图API-->
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=E89eYGlADdv9sGZXDgVDCI0Cvqr9GGdQ"></script>
</head>
<body>
    <!-- 顶部 -->
    <?php include('header.php'); ?>

    <!-- 面包屑 -->
    <?php include('crumbs.php'); ?>
    
    <div class="container">
        <div class="baidu-map" id="map"></div>
        <div class="content-wrap">
            <div class="info">
                <h4 class="title">朗朗医疗投资限公司</h4>
                <span>集团总部招商热线：</span>
                <a class="telphone" href="tel:0755-56566573">0755-56566573</a>
                <p>
                    <strong>地址</strong><br />
                    深圳商山区（科技园）高新南一道3号富诚大厦三楼
                </p>
                <p>
                    <strong>联系人：</strong>
                    王经理
                </p>
                <p>
                    <strong>邮箱</strong><br />
                    wanghb@langlangdentalcom
                </p>
                <p>
                    <strong>网址</strong><br />
                    www.langlangdental.com
                </p>
            </div>
            <div class="message-form">
                <p class="title">合赢未来 · 共创伟业 Win-win cooperation for bright future</p>
                <form action="">
                    <div class="row-container gutter-16">
                        <div class="row-wrap">
                            <div class="col-item-3">
                                <div class="input-item">
                                    <input type="text" id="name" placeholder="姓名">
                                </div>
                            </div>
                            <div class="col-item-3">
                                <div class="input-item">
                                    <input type="text" id="mobile" placeholder="手机号">
                                </div>
                            </div>
                            <div class="col-item-3">
                                <div class="input-item">
                                    <input type="email" id="email" placeholder="邮箱">
                                </div>
                            </div>
                            <div class="col-item-1">
                                <div class="input-item">
                                    <textarea placeholder="内容" id="text" row="5"></textarea>
                                </div>
                            </div>
                            <div class="col-item-3">
                                <div class="input-item">
                                    <input type="text" id="code" placeholder="验证码">
                                </div>
                            </div>
                            <div class="col-item-3">
                                <img src="images/message-code.jpg" alt="验证码">
                            </div>
                        </div>
                    </div>
                    <button type="button" onclick="checkForm()">提交</button>
                </form>
            </div>
        </div>
    </div>

    <div class="jobs-banner">
        <h4>加入我们</h4>
        <p>尽揽天下英才 共展宏图伟业</p>
        <span>opportunity seldom joins us</span>
    </div>

    <div class="container">
        <div class="jobs-list" id="jobsList">
            <section>
                <header>
                    <div class="mark" data-type="mark"></div>
                    <span>工作地点：<strong>深圳</strong></span>
                    <span>工作岗位：<strong>财务</strong></span>
                </header>
                <div class="content">
                    岗位职责：<br/>
                    负责公司日常财务的记录汇总，统计报表。淘宝天猫商城的日常发票开具，审核打单。有淘宝，京东，等等电商公司的日常工作经验优先，<br/>
                    任职资格<br/>
                    1，财务，会计专业，持有会计证；<br/>
                    2，具有一年以上工作经验；<br/>
                    3，熟悉操作财务软件，Excel，Word，ERP等办公软件；<br/>
                    4，工作认真，态度端正。<br/>
                    职能类别：会计 财务助理/文员<br/>
                    <a href="mailto:liangy@langlangdental.com" class="button">立即申请</a>
                    <div class="info">
                        <span>邮箱：<a href="mailto:liangy@langlangdental.com">liangy@langlangdental.com</a></span>
                        <span>手机：<a href="tel:186-6582-2617">186-6582-2617（梁小姐）</a> </span>
                        <span>座机：<a href="tel:0755-86566573">0755-86566573转6019</a></span>
                    </div>
                </div>
            </section>
            <section>
                <header>
                    <div class="mark" data-type="mark"></div>
                    <span>工作地点：<strong>深圳</strong></span>
                    <span>工作岗位：<strong>财务</strong></span>
                </header>
                <div class="content">
                    岗位职责：<br/>
                    负责公司日常财务的记录汇总，统计报表。淘宝天猫商城的日常发票开具，审核打单。有淘宝，京东，等等电商公司的日常工作经验优先，<br/>
                    任职资格<br/>
                    1，财务，会计专业，持有会计证；<br/>
                    2，具有一年以上工作经验；<br/>
                    3，熟悉操作财务软件，Excel，Word，ERP等办公软件；<br/>
                    4，工作认真，态度端正。<br/>
                    职能类别：会计 财务助理/文员<br/>
                    <a href="mailto:liangy@langlangdental.com" class="button">立即申请</a>
                    <div class="info">
                        <span>邮箱：<a href="mailto:liangy@langlangdental.com">liangy@langlangdental.com</a></span>
                        <span>手机：<a href="tel:186-6582-2617">186-6582-2617（梁小姐）</a> </span>
                        <span>座机：<a href="tel:0755-86566573">0755-86566573转6019</a></span>
                    </div>
                </div>
            </section>
            <section>
                <header>
                    <div class="mark" data-type="mark"></div>
                    <span>工作地点：<strong>深圳</strong></span>
                    <span>工作岗位：<strong>财务</strong></span>
                </header>
                <div class="content">
                    岗位职责：<br/>
                    负责公司日常财务的记录汇总，统计报表。淘宝天猫商城的日常发票开具，审核打单。有淘宝，京东，等等电商公司的日常工作经验优先，<br/>
                    任职资格<br/>
                    1，财务，会计专业，持有会计证；<br/>
                    2，具有一年以上工作经验；<br/>
                    3，熟悉操作财务软件，Excel，Word，ERP等办公软件；<br/>
                    4，工作认真，态度端正。<br/>
                    职能类别：会计 财务助理/文员<br/>
                    <a href="mailto:liangy@langlangdental.com" class="button">立即申请</a>
                    <div class="info">
                        <span>邮箱：<a href="mailto:liangy@langlangdental.com">liangy@langlangdental.com</a></span>
                        <span>手机：<a href="tel:186-6582-2617">186-6582-2617（梁小姐）</a> </span>
                        <span>座机：<a href="tel:0755-86566573">0755-86566573转6019</a></span>
                    </div>
                </div>
            </section>
            <section>
                <header>
                    <div class="mark" data-type="mark"></div>
                    <span>工作地点：<strong>深圳</strong></span>
                    <span>工作岗位：<strong>财务</strong></span>
                </header>
                <div class="content">
                    岗位职责：<br/>
                    负责公司日常财务的记录汇总，统计报表。淘宝天猫商城的日常发票开具，审核打单。有淘宝，京东，等等电商公司的日常工作经验优先，<br/>
                    任职资格<br/>
                    1，财务，会计专业，持有会计证；<br/>
                    2，具有一年以上工作经验；<br/>
                    3，熟悉操作财务软件，Excel，Word，ERP等办公软件；<br/>
                    4，工作认真，态度端正。<br/>
                    职能类别：会计 财务助理/文员<br/>
                    <a href="mailto:liangy@langlangdental.com" class="button">立即申请</a>
                    <div class="info">
                        <span>邮箱：<a href="mailto:liangy@langlangdental.com">liangy@langlangdental.com</a></span>
                        <span>手机：<a href="tel:186-6582-2617">186-6582-2617（梁小姐）</a> </span>
                        <span>座机：<a href="tel:0755-86566573">0755-86566573转6019</a></span>
                    </div>
                </div>
            </section>
            <section>
                <header>
                    <div class="mark" data-type="mark"></div>
                    <span>工作地点：<strong>深圳</strong></span>
                    <span>工作岗位：<strong>财务</strong></span>
                </header>
                <div class="content">
                    岗位职责：<br/>
                    负责公司日常财务的记录汇总，统计报表。淘宝天猫商城的日常发票开具，审核打单。有淘宝，京东，等等电商公司的日常工作经验优先，<br/>
                    任职资格<br/>
                    1，财务，会计专业，持有会计证；<br/>
                    2，具有一年以上工作经验；<br/>
                    3，熟悉操作财务软件，Excel，Word，ERP等办公软件；<br/>
                    4，工作认真，态度端正。<br/>
                    职能类别：会计 财务助理/文员<br/>
                    <a href="mailto:liangy@langlangdental.com" class="button">立即申请</a>
                    <div class="info">
                        <span>邮箱：<a href="mailto:liangy@langlangdental.com">liangy@langlangdental.com</a></span>
                        <span>手机：<a href="tel:186-6582-2617">186-6582-2617（梁小姐）</a> </span>
                        <span>座机：<a href="tel:0755-86566573">0755-86566573转6019</a></span>
                    </div>
                </div>
            </section>
            <section>
                <header>
                    <div class="mark" data-type="mark"></div>
                    <span>工作地点：<strong>深圳</strong></span>
                    <span>工作岗位：<strong>财务</strong></span>
                </header>
                <div class="content">
                    岗位职责：<br/>
                    负责公司日常财务的记录汇总，统计报表。淘宝天猫商城的日常发票开具，审核打单。有淘宝，京东，等等电商公司的日常工作经验优先，<br/>
                    任职资格<br/>
                    1，财务，会计专业，持有会计证；<br/>
                    2，具有一年以上工作经验；<br/>
                    3，熟悉操作财务软件，Excel，Word，ERP等办公软件；<br/>
                    4，工作认真，态度端正。<br/>
                    职能类别：会计 财务助理/文员<br/>
                    <a href="mailto:liangy@langlangdental.com" class="button">立即申请</a>
                    <div class="info">
                        <span>邮箱：<a href="mailto:liangy@langlangdental.com">liangy@langlangdental.com</a></span>
                        <span>手机：<a href="tel:186-6582-2617">186-6582-2617（梁小姐）</a> </span>
                        <span>座机：<a href="tel:0755-86566573">0755-86566573转6019</a></span>
                    </div>
                </div>
            </section>
            <section>
                <header>
                    <div class="mark" data-type="mark"></div>
                    <span>工作地点：<strong>深圳</strong></span>
                    <span>工作岗位：<strong>财务</strong></span>
                </header>
                <div class="content">
                    岗位职责：<br/>
                    负责公司日常财务的记录汇总，统计报表。淘宝天猫商城的日常发票开具，审核打单。有淘宝，京东，等等电商公司的日常工作经验优先，<br/>
                    任职资格<br/>
                    1，财务，会计专业，持有会计证；<br/>
                    2，具有一年以上工作经验；<br/>
                    3，熟悉操作财务软件，Excel，Word，ERP等办公软件；<br/>
                    4，工作认真，态度端正。<br/>
                    职能类别：会计 财务助理/文员<br/>
                    <a href="mailto:liangy@langlangdental.com" class="button">立即申请</a>
                    <div class="info">
                        <span>邮箱：<a href="mailto:liangy@langlangdental.com">liangy@langlangdental.com</a></span>
                        <span>手机：<a href="tel:186-6582-2617">186-6582-2617（梁小姐）</a> </span>
                        <span>座机：<a href="tel:0755-86566573">0755-86566573转6019</a></span>
                    </div>
                </div>
            </section>
            <section>
                <header>
                    <div class="mark" data-type="mark"></div>
                    <span>工作地点：<strong>深圳</strong></span>
                    <span>工作岗位：<strong>财务</strong></span>
                </header>
                <div class="content">
                    岗位职责：<br/>
                    负责公司日常财务的记录汇总，统计报表。淘宝天猫商城的日常发票开具，审核打单。有淘宝，京东，等等电商公司的日常工作经验优先，<br/>
                    任职资格<br/>
                    1，财务，会计专业，持有会计证；<br/>
                    2，具有一年以上工作经验；<br/>
                    3，熟悉操作财务软件，Excel，Word，ERP等办公软件；<br/>
                    4，工作认真，态度端正。<br/>
                    职能类别：会计 财务助理/文员<br/>
                    <a href="mailto:liangy@langlangdental.com" class="button">立即申请</a>
                    <div class="info">
                        <span>邮箱：<a href="mailto:liangy@langlangdental.com">liangy@langlangdental.com</a></span>
                        <span>手机：<a href="tel:186-6582-2617">186-6582-2617（梁小姐）</a> </span>
                        <span>座机：<a href="tel:0755-86566573">0755-86566573转6019</a></span>
                    </div>
                </div>
            </section>
            <section>
                <header>
                    <div class="mark" data-type="mark"></div>
                    <span>工作地点：<strong>深圳</strong></span>
                    <span>工作岗位：<strong>财务</strong></span>
                </header>
                <div class="content">
                    岗位职责：<br/>
                    负责公司日常财务的记录汇总，统计报表。淘宝天猫商城的日常发票开具，审核打单。有淘宝，京东，等等电商公司的日常工作经验优先，<br/>
                    任职资格<br/>
                    1，财务，会计专业，持有会计证；<br/>
                    2，具有一年以上工作经验；<br/>
                    3，熟悉操作财务软件，Excel，Word，ERP等办公软件；<br/>
                    4，工作认真，态度端正。<br/>
                    职能类别：会计 财务助理/文员<br/>
                    <a href="mailto:liangy@langlangdental.com" class="button">立即申请</a>
                    <div class="info">
                        <span>邮箱：<a href="mailto:liangy@langlangdental.com">liangy@langlangdental.com</a></span>
                        <span>手机：<a href="tel:186-6582-2617">186-6582-2617（梁小姐）</a> </span>
                        <span>座机：<a href="tel:0755-86566573">0755-86566573转6019</a></span>
                    </div>
                </div>
            </section>
        </div>
        
        <!-- 分页 -->
        <div class="pagination shop-module padding-top-100">
            <a href="javascript:void(0);">&lt;</a><a href="javascript:void(0);">1</a><span>2</span><a href="javascript:void(0);">3</a><a href="javascript:void(0);">4</a><a href="javascript:void(0);">5</a><a href="javascript:void(0);">6</a><a href="javascript:void(0);">7</a><a href="javascript:void(0);">&gt;</a>
        </div>
    </div>
    <!-- 底部 -->
    <?php include('footer.php'); ?>
    
    <!-- js文件 -->
    <script src="js/jquery.min.js"></script>
    <script src="js/baiduMap.js"></script>
    <script>
        //jobs-list内容的显示隐藏
        let jobsList = document.getElementById('jobsList');
        
        jobsList.addEventListener('click',function(e){
            let target = e.target;
            let targetType = target.getAttribute('data-type');
            let targetName = target.tagName.toLowerCase();
            let targetParentNode = target.parentNode.parentNode;
            let hasClassName = '';
            if(targetType == 'mark' && targetName == 'div'){
                hasClassName = targetParentNode.className;
                if(hasClassName){
                    targetParentNode.className = '';
                }else{
                    targetParentNode.className = 'show';
                }
            }
            
        })


        
        //表单验证
        function checkForm(){
            let name = document.getElementById('name');
            let mobile = document.getElementById('mobile');
            let email = document.getElementById('email');
            let text = document.getElementById('text');
            let code = document.getElementById('code');

            if(!name.value){
                alert('姓名不能为空');
                return false;
            }
            
            if(!mobile.value){
                alert('手机号不能为空');
                return false;
            }
            
            if(!(/^1[345789]\d{9}$/.test(mobile.value))){
                alert('手机号格式填写有误,请重新填写');
                return false;
            }

            if(!email.value){
                alert('邮箱不能为空');
                return false;
            }

            if(!(/^\w+@[a-z0-9]+\.[a-z]{2,4}$/.test(email.value))){
                alert('邮箱格式填写有误,请重新填写');
                return false;
            }

            if(!text.value){
                alert('内容不能为空');
                return false;
            }

            if(!code.value){
                alert('验证码不能为空');
                return false;
            }

        }
    </script>
  
</body>
</html>      