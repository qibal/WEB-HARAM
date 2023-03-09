@extends('user.layoutUser')
@section('users')
    <style>
        .gambar {
            position: relative;
            text-align: center;
            color: white;
        }

        /* Centered text */
        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .centered .play {
            width: 20%;
        }

        .centered .play:hover {
            width: 24%;
        }
    </style>



    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-white">
        <div class="container ">
            {{-- button menu --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" fill="#ffffff" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
            {{-- button menu md --}}
            <button class="offcanvas mb-2 " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" fill="#ffffff" class="bi bi-list "
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
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

    <div class="container bg-dark">
        {{-- side bar menu --}}
        <div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Kategori</h5>
                <button type="button" class="btn-close bg-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

                @foreach ($kategori as $item)
                    <a href="{{ url('/IndoHub/kategori/' . $item->slug) }}" class="text-decoration-none">
                        <div class="bg-secondary  p-2 text-primary mt-1">
                            {{ $item->nama_kategori }}
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        {{-- sidebar menu --}}




        <div class="row" style="margin-top: 90px">
            {{-- awal --}}
            <a href="{{ $vidio->link_vidio }}" class="text-decoration-none ">
                <div class="col-md-12 shadow">
                    <div class="gambar  ">
                        <img src="{{ $vidio->link_poto }}" alt="Snow"
                            style=" width: 100%;height: 60vh;object-fit: cover;">

                        <div class="centered">
                            <img src="{{ asset('Profile/play.svg') }}" class="play">
                        </div>
                    </div>
                    <div class="p-4 text-white">
                        <h3 style="font-size:4vh">{{ $vidio->judul_vidio }}</h3>
                        <div class="mt-3 d-flex ">

                            {{-- durasi --}}
                            <div>
                                <h5 style="font-size:3vh">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" fill="currentColor"
                                        class="bi bi-clock mb-1" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                    {{ $vidio->durasi }}
                                </h5>

                            </div>


                            {{-- tgl upload --}}
                            <div class="ms-3">
                                <h5 style="font-size:3vh">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" fill="currentColor"
                                        class="bi bi-calendar-week mb-1" viewBox="0 0 16 16">
                                        <path
                                            d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                        <path
                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                    </svg>
                                    {{ $vidio->tgl_upload }}
                                </h5>

                            </div>


                        </div>

                    </div>
                </div>
            </a>
            {{-- akhir --}}


            <h4 class="my-3 text-primary">VIEW MORE</h4>
            <hr>
        </div>

        {{-- list vidio dibawah PlayerVidio --}}
        <div class="row">
            {{-- awal --}}
            @foreach ($under as $item)
                {{-- awal --}}
                <div class="col-6 col-md-3 p-1">
                    <a href=" {{ url('/IndoHub/vidioPlayer/' . $item->slug_judul) }}" class="text-decoration-none">
                        <div class="card bg-dark shadow">
                            <img src="{{ $item->link_poto }}" alt="" class=" object-fit-cover "
                                style=" width: 100%;height: 21vh;object-fit: cover;">
                            <div class="card-body pt-2   pb-0 ps-2 pe-2">
                                <h6 class="card-title text-primary" style="font-size: 2vh">
                                    {{ Str::limit($item->judul_vidio, 55) }} </h6>
                                <div class="d-flex justify-content-between text-white">
                                    <div class=" d-flex ">

                                        {{-- durasi --}} <div class="mb-2 ">
                                            <h6 style="font-size: 2vh " class="text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" fill="currentColor"
                                                    class="bi bi-clock mb-1 " viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                    <path
                                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                </svg>
                                                {{ $item->durasi }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- akhir --}}
            @endforeach
            {{-- akhir --}}
        </div>
    </div>
@endsection
