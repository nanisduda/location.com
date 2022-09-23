<!doctype html>
<html lang="zh-cn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#1E74FD">
    <title>系统安装</title>
    <link rel="icon" type="/image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/icon/192x192.png">
    <link rel="stylesheet" href="/assets/css/add.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body>
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">苹果安装到主屏幕</div>
    </div>
    <div id="appCapsule">
        <div class="section full mt-2">
            <div class="card text-center px-3">
                <div class="card-body">
                    <img class="mb-2" width="96" height="96" src="/assets/img/icon/96x96.png" alt="查询系统">
                    <h5>添加 “查询系统”到主屏幕</h5>
                    <br />
                    <p class="mb-3">【第一步】在 Safari 浏览器<img width="20" height="20" src="/assets/images/Safari.jpg">中打开以下网址（长按以下网址复制）</p>

                    <div class="alert alert-info">
                        <span id="tbid">{{ getenv('APP_URL') }}</span>
                    </div>

                    <p class="mb-3">【第二步】点击底部工具栏图标，如下图</p>

                    <img class="imaged square w-100" src="/assets/img/d1.png" alt="查询中心">

                    <p class="mb-3">【第三步】弹出框中选择"添加到主屏幕"即可</p>

                    <img class="imaged square w-100" src="/assets/img/d2.png" alt="查询中心">
                </div>
            </div>
        </div>


    </div>
    <div class="modal inset fade action-sheet ios-add-to-home" id="ios-add-to-home-screen" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">添加到主屏幕</h5>
                    <a href="javascript:;" class="close-button" data-dismiss="modal">
                        <ion-icon name="close"></ion-icon>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content text-center">
                        <div class="mb-1"><img src="/assets/img/icon/192x192.png" alt="image" class="imaged w48">
                        </div>
                        <h4>查询系统</h4>
                        <div>
                            安装 查询系统 到您的 iPhone's 桌面.
                        </div>
                        <div>
                            点击 <ion-icon name="share-outline"></ion-icon> 然后点击 添加到主屏幕
                        </div>
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
    <script>
        AddtoHome("2000");
    </script>
</body>

</html>