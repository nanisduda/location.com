<!doctype html>
<html lang="zh-cn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#1E74FD">
    <title>查询中心</title>
    <link rel="icon" type="/image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="/assets/css/query.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body class="bg-white">
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <div id="appCapsule" class="pt-0">

        <div class="login-form mt-1">
            <div class="section">
                <img src="/assets/img/sample/photo/vector4.png" alt="image" class="form-image">
            </div>
            <div class="section mt-1">
                <h1>查询中心</h1>
            </div>
            <div class="section mt-1 mb-5">
                <form method="post" action="/do_query" name="jsForm" id="jsForm">
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input name="uname" type="text" id="uname" class="form-control" placeholder="输入手机号码/微信号/QQ号" required>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                    </div>

                    <div class="form-links mt-2">
                        <div>
                            <a href="/chat">在线客服</a>
                        </div>
                        <div><a href="/faq" class="text-muted">需要帮助 ?</a></div>
                    </div>

                    <div class="form-button-group">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">开 始 查 询</button>
                    </div>
                </form>
            </div>
            <div class="section mt-1">
                <p>注意：本平台没有任何代理和微信QQ客服，如需开通请点击 “在线客服” 联系官方唯一在线客服。</p>
                <p>首创基站结合GPS北斗卫星双定位模式WIFI智能识别定位，优化隐蔽查询对方毫无知觉。</p>
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
                        <div class="mb-1"><img src="assets/img/icon/192x192.png" alt="image" class="imaged w48">
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
        AddtoHome(2000, "once");
    </script>
</body>

</html>