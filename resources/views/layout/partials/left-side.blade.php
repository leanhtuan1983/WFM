@if(!Auth::check())
<p>Hello Guest!</p>
@else
<div class="left-side">
    <div class="logo">
        <img src="{{ asset('template/img/logo.png') }}" alt="" />
    </div>
    <div class="left-content">
        <ul role="tablist">
            <li role="presentation"><a href="#">Xin chào <strong>{{ Auth::user()->name }}</strong></a></li>
            <li role="presentation"><a href="" ><span><i class="fa fa-home"></i></span>HOME</a></li>
            <li role="presentation"><a href="{{ route('procedure.index') }}" ><span><i class="fa fa-folder"></i></span>PROCEDURES</a></li>
            <li role="presentation"><a href="{{ route('job.index') }}" ><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>JOBS</a></li>
            <li role="presentation"><a href="{{ route('department.index') }}"><span><i class="fa fa-slideshare"></i></span>DEPARTMENTS</a></li>
            <li role="presentation"><a href="#" ><span><i class="fa fa-users" aria-hidden="true"></i></span>MEMBERS</a></li>
            <li role="presentation"><a href="{{ route('setting.index') }}" ><span><i class="fa fa-support"></i></span>SETTINGS</a></li>
            <li role="presentation"><a href="{{ route('logout') }}" ><span><i class="fa fa-power-off" aria-hidden="true"></i></span>LOG OUT</a></li>
        </ul>
    </div>
    <div class="copyright">
        <p>Copyright &#169; 2023 </p>
    </div>
</div> 
@endif