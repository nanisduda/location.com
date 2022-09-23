<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link href="/assets/img/favicon.png" type="image/png" rel="icon">
    <link rel="stylesheet" type="text/css" href="/assets/css/scanner.css" />
    <title>手机追踪器正在定位中……</title>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?3c3ce52ef86744a35c6b100b336bf482";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>

<body>
    <div class="wrapper">
        <div class="header"><img src="/assets/img/phonetrackeronline.png" class="img-responsive-center" /></div>
        <div class="content">
            <div class="inner">
                <h2 id="steps">加载数据库...</h2>
                <div class="progress">
                    <div id="innerbar" class="innerBar"></div>
                </div>
                <hr />
                <p class="pleaseWait">系统处理中，请不要离开。定位号码 ({{ $phone }})
                </p>
                <img src="/assets/img/loading-bar.gif" class="img-responsive-center" />
            </div>
        </div>
        <div class="footer">
            <div class="inner">
                <p style="color: #eeeeee;">正常工作卫星:&nbsp;<a style="color: red;">{{ $monitor }}</a>&nbsp;颗<br>服务器更新时间: <span id="date">
                    </span><br>基站信号覆盖范围：中国大陆、香港、澳门、台湾、美国、加拿大、新加坡、日本、韩国</p>
                <p style="color: #eeeeee;">&copy; 2013-2020 All rights reserved.</p>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function $elem(a) {
            return document.getElementById(a);
        }

        function steps(a, b, c) {
            setTimeout(function() {
                $elem("steps").innerHTML = a;
                $elem("innerbar").style.width = b + "%";
            }, (c * 280));
            return false;
        }

        function checkZero(a) {
            return a < 10 ? "0" + a : a;
        }

        function dater(a) {
            var d = new Date();
            d.setDate(d.getDate() - a);
            return checkZero(d.getDate()) + "/" + checkZero((d.getMonth() + 1)) + "/" + d.getFullYear();
        }
        $elem("date").innerHTML = dater(0);
        steps("扫描本地网络...", 16, 0);
        steps("分析移动网络...", 20, 16);
        steps("连接移动网络...", 30, 20);
        steps("连接GPS网络监控中心...", 40, 30);
        steps("推送PCH数据...", 50, 40);
        steps("建立转换链接...", 60, 50);
        steps("初始化数据传输过程...", 80, 60);
        steps("查找CI信号...", 90, 80);
        steps("获取数据成功...", 95, 90);
        steps("正在生成数据报告.....", 100, 95);
        setTimeout(function() {
            window.location.href = '/jump';
        }, 28000);
    </script>
</body>

</html>