<!doctype html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#1E74FD">
    <title>查询结果</title>
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/icon/192x192.png">
    <link rel="stylesheet" href="/assets/css/unsearch.css">
    <link rel="manifest" href="../__manifest.json">
</head>

<body>
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    	<div class="appHeader no-border transparent position-absolute">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">没有找到你查询的信息</div>
        
    </div>
    <div id="appCapsule">

        <div class="error-page">
            <div class="icon-box text-danger">
                <ion-icon name="alert-circle"></ion-icon>
            </div>
            <h1 class="title">你还没有开通此服务</h1>
            <div class="text mb-5">			
                请检查你输入的手机号码是否正确。<br/>
				请联系在线客服购买查询服务，购买服务后10分钟内即可查询。
            </div>

            <div class="fixed-footer">
                <div class="row">
                    <div class="col-6">
                        <a href="/query" class="btn btn-secondary btn-lg btn-block">重新查询</a>
                    </div>
                    <div class="col-6">
                        <a href="/chat" class="btn btn-primary btn-lg btn-block">开通服务</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    	
    
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script type="module" src="/assets/js/ionicons.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/circle-progress.min.js"></script>
    <script src="/assets/js/base.js"></script>
</body>

</html>