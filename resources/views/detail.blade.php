@include('header')

<!-- Start Page Title Area -->
<div class="page-title-area page-title-style-two">
    <div class="container">
        <div class="page-title-content">
            <h2>{{$content->title}}</h2>
            <ul>
                <li>
                    <a href="/">
                        <i class="bx bx-home"></i>
                        网站首页
                    </a>
                </li>
                <li><a href="/new/">新闻动态</a>
                </li>
                <li class="active">文章正文</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Details Area -->
<div class="blog-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-content">
                    <div class='blog-details-img'>
                        <img src="/images/defaultpic.gif" style='display:none' />
                    </div>
                    <div class="blog-top-content">
                        <div class="news-content">
                            <ul class="admin">
                                <li>
                                    <a href="#">
                                        <i class="bx bx-user-circle"></i>
                                        作者: {{$content->author}}
                                    </a>
                                </li>

                                <li>
                                    <a>
                                        <i class="bx bx-comment"></i>
                                        没有评论
                                    </a>
                                </li>

                                <li class="float">
                                    <i class="bx bx-calendar-alt"></i>
                                    {{$content->date_time}}
                                </li>
                            </ul>

                            <h3>{{$content->title}}</h3>
                        </div>
                        <div class="news-content-2">
                            {!!$content->content!!}
                        </div>

                        <div class="tag-list">
                            <span>标签</span>

                            <ul>
                                <li>
                                    <a href="/tags.php?/%E6%96%87%E7%AB%A0/" target="_blank">
                                        文章
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>

                    <div class="comments">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                上一篇：
                                @if( $article["prev"] )
                                <a href='/detail/{{$article["prev"]["id"]}}'>{{$article['prev']['title']}}</a>
                                @else
                                没有了
                                @endif
                            </div>

                            <div class="col-lg-6 col-md-6 text-right">
                                下一篇：
                                @if( $article["next"] )
                                <a href='/detail/{{$article["next"]["id"]}}'>{{$article['next']['title']}}</a>
                                @else
                                没有了
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="widget-sidebar">
                    <div class="sidebar-widget search">
                        <form class="search-form" action="/scanner.php" method="POST">
                            <input class="form-control" name="phone" id="phone" placeholder="输入手机号码开始定位" type="tel" required>
                            <button class="search-button" type="submit">
                                <i class="bx bx-search"></i>
                            </button>
                        </form>
                    </div>

                    <div class="sidebar-widget categories">
                        <h3 class="widget-title">最新发布</h3>

                        <ul>
                            <li>
                                <a href="/new/2020/1105/28.html">
                                    手机号码免费定位试用一次，1元手机定
                                </a>
                            </li>
                            <li>
                                <a href="/new/2020/1102/26.html">
                                    为啥这么难？漫游手机定位费即将退出
                                </a>
                            </li>
                            <li>
                                <a href="/new/2020/1102/25.html">
                                    因此今年的iPhone手机号码定位 7应该还是
                                </a>
                            </li>
                            <li>
                                <a href="/new/2020/1102/24.html">
                                    提升VR视觉体验手机号码定位追踪系统
                                </a>
                            </li>
                            <li>
                                <a href="/new/2020/1102/23.html">
                                    言语刺激收信手机号码定位人的方式种
                                </a>
                            </li>
                            <li>
                                <a href="/new/2020/1102/22.html">
                                    以保证用户数据手机号码定位找人的多
                                </a>
                            </li>
                            <li>
                                <a href="/new/2020/1102/21.html">
                                    这样的手机号码定位诺基亚回来还能火
                                </a>
                            </li>
                            <li>
                                <a href="/new/2020/1102/20.html">
                                    信号太多导致“打架”手机定位也成为
                                </a>
                            </li>
                            <li>
                                <a href="/new/2020/1102/19.html">
                                    对于这些贴着互联手机号码定位追踪系
                                </a>
                            </li>
                            <li>
                                <a href="/new/2020/1101/1.html">
                                    诺基亚年底王者归来 推两款高端安卓机
                                </a>
                            </li>


                        </ul>
                    </div>

                    <div class="sidebar-widget categories">
                        <h3>文章分类</h3>

                        <ul>
                            <li>
                                <a href="/new/">新闻动态</a>
                            </li>
                            <li>
                                <a href="/help/">帮助中心</a>
                            </li>
                            <li>
                                <a href="/service/">服务项目</a>
                            </li>

                        </ul>
                    </div>

                    <div class="sidebar-widget categories">
                        <h3>服务项目</h3>

                        <ul>
                            <li>
                                <a href='/service/2020/1102/27.html'>快递收货地址查看</a>
                            </li>
                            <li>
                                <a href='/service/2020/1102/18.html'>手机号码定位追踪找人</a>
                            </li>
                            <li>
                                <a href='/service/2020/1102/17.html'>手机短信查看</a>
                            </li>
                            <li>
                                <a href='/service/2020/1102/16.html'>查看所有通话记录</a>
                            </li>
                            <li>
                                <a href='/service/2020/1102/15.html'>查看手机相册照片/视频</a>
                            </li>
                            <li>
                                <a href='/service/2020/1102/14.html'>监控抓取微信和QQ聊天记录信息</a>
                            </li>
                            <li>
                                <a href='/service/2020/1102/13.html'>监视浏览历史记录</a>
                            </li>
                            <li>
                                <a href='/service/2020/1102/12.html'>实时监听环境录音</a>
                            </li>

                        </ul>
                    </div>

                    <div class="sidebar-widget tags mb-0">
                        <h3>随机标签</h3>

                        <ul>

                            <li>
                                <a href="/tags.php?/%E6%96%87%E7%AB%A0/">文章</a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog Details Area -->
@include('footer')