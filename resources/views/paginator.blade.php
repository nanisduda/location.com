@if ($paginator->hasPages())
<div class="col-lg-12 col-md-12">
    <div class="pagination-area">
        <a class='prev page-numbers' @if(!$paginator->onFirstPage())
            href='{{$paginator->previousPageUrl()}}'
            @endif
            ><i class='bx bx-chevron-left'></i></a>
        @foreach($paginator->getUrlRange(1, $paginator->lastPage()) as $key=>$item)
        <a class="page-numbers @if($paginator->currentPage()==$key)current @endif" href='{{$item}}'>{{$key}}</a>
        @endforeach
        <a class='next page-numbers' @if($paginator->hasMorePages())
            href='{{$paginator->nextPageUrl()}}'
            @endif
            ><i class='bx bx-chevron-right'></i></a>
    </div>
</div>
@else
<div class="col-lg-12 col-md-12">
    <div class="pagination-area">
        <span>共 <strong>1</strong>页<strong>{{$paginator->count()}}</strong>条记录</span>
    </div>
</div>
@endif