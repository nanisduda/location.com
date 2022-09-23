<form class="search-form" action="/scanner" method="POST">
    <input class="form-control" name="phone" id="phone" placeholder="输入手机号码开始定位" type="tel" onkeyup="value=value.replace(/[^\d]/g,'')" maxlength="11" required>
    <button class="search-button" type="submit">
        <i class="bx bx-search"></i>
    </button>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>