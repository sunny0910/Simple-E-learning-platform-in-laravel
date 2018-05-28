@section('header')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" id= "navbar-logo" >{{ Html::image('images/logo.jpg', 'LOGO', array('class'=> 'logo')) }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @if (Auth::check() && Auth::user()->role()->first()->name = "Author")
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('course.index') }}">My Courses</a>
                </li>
                @if (Auth::check() && Auth::user()->role()->first()->name == "Admin")
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">Users</a>
                    </li>
                @endif
                @if (Auth::check())
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.account', [Auth::id()]) }}">Account Info</a>
                    </li>
                @endif
            </ul>
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ route('register') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item">
                        {{-- {!! Form::open(["method" => "post", "action" =>  route('logout') ]) !!} --}}
                        {{-- <a class="nav-link" href=" {{ route('logout') }}">Logout</a> --}}
                        {{-- {!! Form::submit('Logout', ['class' => 'nav-link', 'id' => 'logoutbutton']) !!} --}}
                        {{-- {!! Form::close() !!} --}}
                                <a class="nav-link" id="logoutbutton" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logoutform').submit();">
                                    Logout
                                </a>
                                <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>