<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="{{ asset('Profile/xxindo.png') }}" rel="icon">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.0-alpha1-dist/css/bootstrap.css') }}">
    <script src="{{ asset('bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.js') }}"></script>
</head>

<body class="bg-dark">

    @yield('users')
    <div class="container" style="margin-top:100px;margin-bottom:50px">

        <footer>
            <div class="row  text-center">
                <div class="col-6 col-md-6 ">
                    {{-- <a href="{{ url('/login') }}" class="text-decoration-none text-primary">Login</a> --}}
                    @guest
                        <div>
                            @if (Route::has('login'))
                                <a class="text-primary text-decoration-none" href="{{ route('login') }}">masuk</a>
                            @endif
                        </div>
                        {{-- <div>
                            @if (Route::has('register'))
                                <a class="btn btn-warning ms-2 fw-semibold" href="{{ route('register') }}">daftar</a>
                            @endif
                        </div> --}}
                    @else
                        {{-- <div class="text-secondary">{{ Auth::user()->name }}</div> --}}
                        {{-- <div class="drop-content"> --}}
                        <a class="text-primary text-decoration-none" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        {{-- </div> --}}
                        {{-- @endguest --}}
                    </div>
                    <div class="col-6 col-md-6 text-primary">Ajukan link Eror</div>
                </div>
            </footer>
        @endguest
    </div>

</body>

</html>
