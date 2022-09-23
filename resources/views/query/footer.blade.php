<!-- * App Capsule -->

<div class="appBottomMenu">
    <a href="/query" class="item">
        <div class="col">
            <ion-icon name="home-outline"></ion-icon>
        </div>
    </a>
    <a href="/chat" class="item @if($action=='chat') active @endif">
        <div class="col">
            <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
            @if($action!='chat')<span class="badge badge-danger">1</span>@endif
        </div>
    </a>
    <a href="/faq" class="item @if($action=='faq') active @endif">
        <div class="col">
            <ion-icon name="help-buoy-outline"></ion-icon>
        </div>
    </a>
</div>

<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script type="module" src="/assets/js/ionicons.js"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/circle-progress.min.js"></script>
<script src="/assets/js/base.js"></script>