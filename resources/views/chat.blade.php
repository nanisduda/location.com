<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="theme-color" content="#1E74FD">
    <title>客服</title>
    <link rel="icon" type="/image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/icon/192x192.png">
    <link rel="stylesheet" href="/assets/css/chat.css">
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
        <div class="pageTitle">客服</div>
        <div class="right"></div>
    </div>
    <div id="appCapsule">


        <div class="section full mt-2">
            <div class="section-title">官方唯一联系方式</div>
            <div class="wide-block pt-2 pb-2">
                如需帮助请点击右下角蓝色图标（预计加载需要10秒）进入私密对话<br />由于咨询人数较多客服响应时间较长，请不要关闭本页面耐心等待。
            </div>
        </div>


    </div>
    <input type="hidden" id='widget_code' name="widget_code" value="{{ getenv('WIDGET_CODE') }}">
    @include('query/footer')
    <script type="text/javascript" id="zsiqchat">
        var $zoho = $zoho || {};
        var code = $('#widget_code').val()
        $zoho.salesiq = $zoho.salesiq || {
            widgetcode: code,
            values: {},
            ready: function() {}
        };
        var d = document;
        s = d.createElement("script");
        s.type = "text/javascript";
        s.id = "zsiqscript";
        s.defer = true;
        s.src = "https://salesiq.zoho.com.cn/widget";
        t = d.getElementsByTagName("script")[0];
        t.parentNode.insertBefore(s, t);
    </script>

</body>

</html>