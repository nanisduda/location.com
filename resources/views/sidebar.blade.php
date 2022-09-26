<div class="col-lg-4">
    <div class="widget-sidebar">
        <div class="sidebar-widget search">
            @include('phone_form')
        </div>
        <div class="sidebar-widget categories">
            <h3 class="widget-title">热点推荐</h3>
            <ul>
                @foreach($sidebar as $item)
                <li><a href="/detail/{{$item->id}}">{{$item->title}}</a></li>
                @endforeach
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
                @foreach($service as $item)
                <li>
                    <a href='/detail/{{$item->id}}'>{{$item->title}}</a>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="sidebar-widget tags mb-0">
            <h3>热门标签</h3>

            <ul>

                <li>
                    <a href="/tags.php?/%E6%89%8B%E6%9C%BA%E5%AE%9A%E4%BD%8D%E6%89%BE%E4%BA%BA/">手机定位找人</a>
                </li>

                <li>
                    <a href="/tags.php?/%E5%BC%80%E6%88%BF%E8%AE%B0%E5%BD%95%E6%9F%A5%E8%AF%A2/">开房记录查询</a>
                </li>

                <li>
                    <a href="/tags.php?/%E6%89%8B%E6%9C%BA%E5%AE%9A%E4%BD%8D%E8%BF%BD%E8%B8%AA/">手机定位追踪</a>
                </li>

                <li>
                    <a href="/tags.php?/%E7%94%B5%E8%AF%9D%E8%B7%9F%E8%B8%AA/">电话跟踪</a>
                </li>

                <li>
                    <a href="/tags.php?/%E6%96%87%E7%AB%A0/">文章</a>
                </li>

                <li>
                    <a href="/tags.php?/1%E5%85%83%E6%89%8B%E6%9C%BA%E5%AE%9A%E4%BD%8D/">1元手机定位</a>
                </li>

                <li>
                    <a href="/tags.php?/%E6%89%8B%E6%9C%BA%E7%9F%AD%E4%BF%A1%E6%9F%A5%E7%9C%8B/">手机短信查看</a>
                </li>

                <li>
                    <a href="/tags.php?/%E6%9F%A5%E7%9C%8B%E6%89%8B%E6%9C%BA%E7%9B%B8%E5%86%8C/">查看手机相册</a>
                </li>

                <li>
                    <a href="/tags.php?/QQ%E8%81%8A%E5%A4%A9%E8%AE%B0%E5%BD%95%E6%8A%93%E5%8F%96/">QQ聊天记录抓取</a>
                </li>

                <li>
                    <a href="/tags.php?/%E5%BE%AE%E4%BF%A1%E8%AE%B0%E5%BD%95%E6%9F%A5%E7%9C%8B/">微信记录查看</a>
                </li>


            </ul>
        </div>
    </div>
</div>