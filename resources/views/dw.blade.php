<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/boxicons.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">

    <!-- Title -->
    <title>手机号码查询中心</title>
    <meta name="keywords" content="免费手机号码定位,手机定位找人系统,通过GPS手机号码定位找人,微信聊天记录获取,手机短信通话记录查看,开房记录查看" />
    <meta name="description" content="只需要手机号码就能准确定位找人,帮助您找到丢失的移动设备,失联朋友或家庭成员的最终解决方案。窥探任何电话号码的GPS位置、通话记录、短信、微信消息、Facebook等。" />
</head>

<body>


    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>

            <div class="indicator">
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div>

    <div class="coming-soon-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="coming-soon-content">
                    <a href="/" class="logo">
                        <img src="assets/img/black-logo.png" alt="image">
                    </a>

                    <h2>手机号码查询中心</h2>


                    <form class="newsletter-form" action="/scanner" method="POST" onsubmit="rpd_validate_page1(this); return false">
                        <div class="form-group">

                            <input type="tel" class="input-newsletter" placeholder="在这里输入手机号码" name="phone" id="phone" required onkeyup="value=value.replace(/[^\d\.]/g,'')" />
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <span class="label-title"><i class='bx bxs-phone-call'></i></span>
                        </div>

                        <button type="submit" class="default-btn">
                            <span>开始定位</span>
                        </button>

                        <p>如果您希望立即查看结果，请点击联系在线客服获取！</p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function rpd_validate_page1(form) {
            var phone = form.phone.value;
            phone = phone.replace(/^\s+/, "").replace(/\s+$/, "").replace(/[^\d]/g, "");
            if (!(/^1[3|4|5|6|7|8|9]\d{9}$/.test(phone))) {
                alert("手机号码有误，请重试！");
                return false;
            }
            var parts = /^(\d{3,3})(\d{4,4})(\d{4,4})$/.exec(phone);
            parts.shift();
            form.phone.value = parts.join("-");
            if (form.outerHTML) {
                form.submit();
            } else {
                return true;
            }
        }
    </script>
    <!-- Links of JS files -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/meanmenu.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/nice-select.min.js"></script>
    <script src="/assets/js/custom.js"></script>
</body>

</html>