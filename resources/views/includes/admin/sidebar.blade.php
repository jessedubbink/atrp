<div class="row justify-content-center">
    <div class="col-md-10 mt-5">
        <a href="{{ route('homepage') }}">
            <img src="{{ asset('/images/logo.png') }}" style="width: 100%;">
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">Logged in as: {{ Auth::user()->name }}</div>
    <div class="col-md-12">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a> | {{ Auth::User()->getRoleNames()->first() }}
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="sidebar-nav">
                <li class="sidebar-item {{ Request::path() == 'admin/dashboard' ? 'active' : '' }}"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                @if(Auth::user()->hasRole('Journalist') || Auth::user()->hasRole('Admin'))
                    <li class="sidebar-item dropdown {{ Request::path() == 'admin/news' ? 'active' : '' }}">
                        <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            News
                        </a>
                        <div class="collapse" id="collapseExample">
                            <a href="{{ route('news.index') }}">Articles</a>
                            <a href="{{ route('news.ads.index') }}">Advertisments</a>
                        </div>
                    </li>
                @endif
                @if(Auth::user()->hasRole('Real Estate Agent') || Auth::user()->hasRole('Admin'))
                    <li class="sidebar-item {{ Request::path() == 'admin/realestate' ? 'active' : '' }}"><a href="{{ route('realestate.index') }}">Real Estate</a></li>
                @endif
                @if(Auth::user()->hasRole('Admin'))
                    <li class="sidebar-item {{ Request::path() == 'admin/updates' ? 'active' : '' }}"><a href="{{ route('updates.index') }}">Updates</a></li>
                    <li class="sidebar-item {{ Request::path() == 'admin/businesses' ? 'active' : '' }}"><a href="{{ route('businesses.index') }}">Businesses</a></li>
                    <li class="sidebar-item {{ Request::path() == 'admin/users' ? 'active' : '' }}"><a href="{{ route('users.index') }}">Users</a></li>
                    <li class="sidebar-item {{ Request::path() == 'admin/roles' ? 'active' : '' }}"><a href="{{ route('roles.index') }}">Roles</a></li>
                    <li class="sidebar-item {{ Request::path() == 'admin/permissions' ? 'active' : '' }}"><a href="{{ route('permissions.index') }}">Permissions</a></li>
                @endif
            </ul>
        </nav>
        <br>
        @yield('sidebar-buttons')
    </div>
</div>
