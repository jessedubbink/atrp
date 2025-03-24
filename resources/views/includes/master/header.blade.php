<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a href="{{ Route('homepage') }}"><img src="{{ Asset('images/logo.png') }}" height="50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item {{ Request::path() == '/' ? 'active' : '' }}">
                <a class="nav-link" href="{{ Route('homepage') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ Request::path() == 'updates' ? 'active' : '' }}">
                <a class="nav-link" href="{{ Route('updates') }}">Updates</a>
            </li>
            <li class="nav-item {{ Request::path() == 'forum' ? 'active' : '' }}">
                <a class="nav-link" href="https://www.forum.americantycoonrp.com/">Forum</a>
            </li>
            <li class="nav-item {{ Request::path() == 'rules' ? 'active' : '' }}">
                <a class="nav-link" href="{{ Route('rules') }}">Rules</a>
            </li>
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    More
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Car listings</a>
                </div>
            </li> -->
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="ingameDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ingame
                    </a>
                    <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="ingameDropdown">
                        <a class="dropdown-item {{ Request::path() == 'news' ? 'active' : '' }}" href="{{ Route('news') }}">News</a>
                        <a class="dropdown-item {{ Request::path() == 'policies' ? 'active' : '' }}" href="{{ Route('policies') }}">Policies</a>
                        <a class="dropdown-item {{ Request::path() == 'businesses' ? 'active' : '' }}" href="{{ Route('businesses') }}">Businesses</a>
                        <a class="dropdown-item {{ Request::path() == 'realestate' ? 'active' : '' }}" href="{{ Route('realestate') }}">Real Estate</a>
                        <a class="dropdown-item {{ Request::path() == 'laws' ? 'active' : '' }}" href="{{ Route('laws') }}">Laws</a>
                        <a class="dropdown-item"  href="https://www.forum.americantycoonrp.com/">Job Tutorials</a>
                    </div>
                </li>
                @if(Auth::user())
                    @if(Auth::user()->hasRole('Admin') || Auth::user()->hasRole('Journalist') || Auth::user()->hasRole('Real Estate Agent'))
                        <li class="nav-item {{ Request::path() == 'job tutorials' ? 'active' : '' }}">
                            <a class="nav-link" href="https://www.forum.americantycoonrp.com/">Dashboard</a>
                        </li>
                    @endif
                @endif
                @guest
                    <li class="nav-item {{ Request::path() == 'login' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ Route('login') }}">Login</a>
                    </li>
                @endguest
            </ul>
    </div>
</nav>