<div class="navbar-fixed">
    <nav class="teal darken-3">
        <div class="container">
            <div class="nav-wrapper">
            <a href="{{ route('homepage') }}" class="brand-logo">SD-IT PerPus</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li>You'are Login as : {{ Auth::user()->name }}</li>
                        <li><a href="{{ route('home') }}">Dashboard</a></li>
                        <li>
                            <a href="{{ route('logout') }}" 
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>    
            </div>
        </div>
    </nav>
</div>

<ul class="sidenav" id="mobile-demo">
    @guest
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
    @else
        <li>
            <a href="#">
                {{ Auth::user()->name }}</li>
            </a>
        </li>
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li>
            <a href="{{ route('logout') }}" 
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    @endguest
</ul>