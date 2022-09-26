@include('header')
<!-- Start Page Title Area -->
<div class="page-title-area page-title-style-two">
    <div class="container">
        <div class="page-title-content">
            <h2>{{$webTitle}}</h2>
            <ul>
                <li>
                    <a href="https://www.wwwqutao.com/">
                        <i class="bx bx-home"></i>
                        网站首页
                    </a>
                </li>
                <li class="active">{{$webTitle}}</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Column One Area -->
<section class="blog-column-one-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @foreach ( $content as $article )
                    <div class="col-lg-12">
                        <div class="single-blog-posts">
                            <div class="single-blog-content">
                                <h3>
                                    <a href="/detail/{{$article->id}}">
                                        {{$article->title}}
                                    </a>
                                </h3>
                                <a href='/detail/{{ $article->id }}'>
                                    @if($article->cover)
                                    <img src="/storage/{{$article->cover}}" alt="{{$article->title}}" />
                                    @endif
                                </a>
                                <p> {{strip_tags($article->abbr)}} </p>

                                <ul class="admin">
                                    <li>
                                        <a>
                                            <i class="bx bx-user-circle"></i>
                                            作者: {{$article->author}}
                                        </a>
                                    </li>
                                    <li class="float">
                                        <i class="bx bx-calendar-alt"></i>
                                        {{$article->date_time}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{ $content->links('paginator') }}
                </div>
            </div>

            @include('sidebar')
        </div>
    </div>
</section>
<!-- End Blog Column One Area -->

@include('footer')