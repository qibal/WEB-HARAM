<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
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

<body class="img js-fullheight" style="background-image: url({{ asset('cssjslogin/bg.jpg') }});">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Register</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center"></h3>

                        {{-- formulir --}}

                        <form id="form" class="signin-form">
                            @csrf
                            {{-- username --}}
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" name="username">
                            </div>
                            @error('username')
                                <div class="" style="color:red">{{ $message }}</div>
                            @enderror
                            {{-- email --}}
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Example@gmail.com"
                                    name="email">
                            </div>
                            @error('email')
                                <div class="" style="color:red">{{ $message }}</div>
                            @enderror
                            {{-- password --}}
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
                                <button type="submit"
                                    class="form-control btn btn-primary submit px-3">Register</button>
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
                                        <p>Sudah Punya Akun?</p>
                                    </div>
                                    <div style="margin-left:5px;">
                                        <a href="{{ url('/login') }}" class=" ">Login</a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    {{-- <script>
        $(window).on('load', function() {
            $('.loading').fadeOut(500);
        });
    </script> --}}
    <script>
        $(document).ready(function() {
            $('#form').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: "{{ route('prosesRegistrasi') }}",
                    type: "POST",
                    data: $('#form').serialize(),
                    success: function(response) {
                        // Tampilkan notifikasi dengan Sweet Alert
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Berhasil Silahkan Login',
                            showConfirmButton: false,
                            timerProgressBar: true,
                            timer: 1500
                        }).then(function() {
                            location.reload();
                        });
                    },
                    error: function(xhr) {
                        // Tampilkan notifikasi error dengan Sweet Alert
                        Swal.fire({
                            title: 'Belum di isi',
                            text: xhr.responseJSON.message,
                            icon: 'error'
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>