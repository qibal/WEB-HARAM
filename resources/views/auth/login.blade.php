<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- css --}}

    <link rel="stylesheet" href="{{ asset('cssjslogin/css/style.css') }}">
    <script nonce="deb22c22-fdac-4c17-b98b-940ef66a4404">
        (function(w, d) {
            ! function(f, g, h, i) {
                f[h] = f[h] || {};
                f[h].executed = [];
                f.zaraz = {
                    deferred: [],
                    listeners: []
                };
                f.zaraz.q = [];
                f.zaraz._f = function(j) {
                    return function() {
                        var k = Array.prototype.slice.call(arguments);
                        f.zaraz.q.push({
                            m: j,
                            a: k
                        })
                    }
                };
                for (const l of ["track", "set", "debug"]) f.zaraz[l] = f.zaraz._f(l);
                f.zaraz.init = () => {
                    var m = g.getElementsByTagName(i)[0],
                        n = g.createElement(i),
                        o = g.getElementsByTagName("title")[0];
                    o && (f[h].t = g.getElementsByTagName("title")[0].text);
                    f[h].x = Math.random();
                    f[h].w = f.screen.width;
                    f[h].h = f.screen.height;
                    f[h].j = f.innerHeight;
                    f[h].e = f.innerWidth;
                    f[h].l = f.location.href;
                    f[h].r = g.referrer;
                    f[h].k = f.screen.colorDepth;
                    f[h].n = g.characterSet;
                    f[h].o = (new Date).getTimezoneOffset();
                    if (f.dataLayer)
                        for (const s of Object.entries(Object.entries(dataLayer).reduce(((t, u) => ({
                                ...t[1],
                                ...u[1]
                            }))))) zaraz.set(s[0], s[1], {
                            scope: "page"
                        });
                    f[h].q = [];
                    for (; f.zaraz.q.length;) {
                        const v = f.zaraz.q.shift();
                        f[h].q.push(v)
                    }
                    n.defer = !0;
                    for (const w of [localStorage, sessionStorage]) Object.keys(w || {}).filter((y => y.startsWith(
                        "_zaraz_"))).forEach((x => {
                        try {
                            f[h]["z_" + x.slice(7)] = JSON.parse(w.getItem(x))
                        } catch {
                            f[h]["z_" + x.slice(7)] = w.getItem(x)
                        }
                    }));
                    n.referrerPolicy = "origin";
                    n.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(f[h])));
                    m.parentNode.insertBefore(n, m)
                };
                ["complete", "interactive"].includes(g.readyState) ? zaraz.init() : f.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body class="img js-fullheight"
    style="background-image: url({{ asset('Profile/adrien-olichon-RCAhiGJsUUE-unsplash.jpg') }});">


    <nav class="navbar navbar-expand-lg  fixed-top text-white">
        <div class="container ">
            {{-- button menu
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <svg xmlns="http://www.w3.org/20F00/svg" width="26" fill="#ffffff" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
            button menu md
            <button class="bg-secondary mb-2 border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" fill="#ffffff" class="bi bi-list "
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button> --}}
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('Profile/Tambahkan judul (1).png') }}" alt="" width="100" class="">
                {{-- <img itemprop="logo" title="Pornhub" alt="Pornhub Porn Videos" width="150" height="26"
                    src="https://di.phncdn.com/www-static/images/pornhub_logo_straight.svg?cache=2023030202"> --}}
            </a>
            {{-- button search
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="currentColor" class="bi bi-search"
                        viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </span>
            </button> --}}

            {{-- collapse search --}}
            {{-- <div class="collapse navbar-collapse " id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"></a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <div class="input-group input-group-sm mb-3">
                        <input class="form-control me-2 rounded-0" type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="input-group-text btn btn-outline-primary rounded-0"
                            type="submit">Search</button>
                    </div>
                    <button class="navbar-toggler mb-3 rounded-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24"fill="currentColor" class="bi bi-x-lg"
                                viewBox="0 0 16 16">
                                <path
                                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                            </svg>
                        </span>
                    </button>
                </form>

            </div> --}}
            {{-- collapse search --}}
        </div>
    </nav>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 text-center mb-5">
                    <h2 class="heading-section">Login</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center"></h3>

                        {{-- formulir --}}

                        <form action="{{ route('prosesLogin') }}" class="signin-form" method="post">
                            @csrf
                            {{-- username --}}
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username " name="name">
                            </div>
                            @error('name')
                                <div class="" style="color:red">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" placeholder="Password"
                                    name="password">
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            @error('password')
                                <div class="" style="color:red">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Log in</button>
                            </div>
                            <div class="form-group d-md-flex">
                                {{-- <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Belum Punya Akun ?
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div> --}}
                                <div class="  m-auto d-flex  text-center">
                                    <div class="">
                                        <p>Belum Punya Akun?</p>
                                    </div>
                                    <div style="margin-left:5px;">
                                        <a href="{{ url('/register') }}" class=" ">Daftar</a>
                                    </div>

                                </div>
                            </div>
                        </form>
                        {{-- <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="#" class="px-2 py-2 mr-md-1 rounded"><span
                                    class="ion-logo-facebook mr-2"></span> Facebook</a>
                            <a href="#" class="px-2 py-2 ml-md-1 rounded"><span
                                    class="ion-logo-twitter mr-2"></span> Twitter</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('cssjslogin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('cssjslogin/js/popper.js') }}"></script>
    <script src="{{ asset('cssjslogin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('cssjslogin/js/main.js') }}"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"7991e9e43e672ef0","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.2.0","si":100}'
        crossorigin="anonymous"></script>

</body>

</html>
