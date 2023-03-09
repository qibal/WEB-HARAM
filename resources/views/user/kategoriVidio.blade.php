@extends('user.layoutUser')
@section('users')
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-white">
        <div class="container ">
            {{-- button menu --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <svg xmlns="http://www.w3.org/20F00/svg" width="26" fill="#ffffff" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
            {{-- button menu md --}}
            <button class="bg-secondary mb-2 border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
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
                <div class="row">
                    @foreach ($kategori as $item)
                        <div class="col-6 col-md-6">
                            <a href="{{ url('/IndoHub/kategori/' . $item->slug) }}" class="text-decoration-none">
                                <div class="bg-secondary  p-2 text-primary mt-1">
                                    {{ $item->nama_kategori }}
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
        {{-- sidebar menu --}}




        {{-- kategori --}}
        <div class="row" style="margin-top: 90px">
            {{-- awal --}}
            @foreach ($K_vidio as $item)
                <div class="col-12 col-md-3  text-center  p-1">
                    <a href="{{ url('/IndoHub/kategori/' . $item->slug) }}" class="text-decoration-none">
                        <div class="card bg-dark border-dark">
                            <img src="{{ $item->link_poto }}" alt="" class=" object-fit-cover "
                                style=" width: 100%;height: 22vh;object-fit: cover;">
                            <div class="card-body p-2">
                                <h5 class="card-title text-primary" style="font-size: 3vh">{{ $item->nama_kategori }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

            {{-- akhir --}}

        </div>
    </div>
@endsection
