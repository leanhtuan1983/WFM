@if(!Auth::check())
<p>Oops! Đăng nhập đi cu!!!!</p>
@else
<div class="right-side">
    <div class="right-content">
        @yield('content')                      
    </div>
</div>
@endif