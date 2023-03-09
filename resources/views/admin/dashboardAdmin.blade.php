@extends('admin.layoutAdmin')
@section('admin')
    <style>
        .loading {
            background-image: url("{{ asset('Profile/Spinner-1s-200px.gif') }}");
            background-repeat: no-repeat;
            background-position: center;
            background-color: white;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 99999;
        }
    </style>

    <div class="loading"></div>
    <div class="row">
        {{-- vidio --}}
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
                <div class="filter">
                    <a class="icon" href="{{ url('/IndoHub/admin/kategori') }}">
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Vidio </h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class='bx bxs-video'></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $count_vidio }}</h6>
                            <span class="text-success small pt-1 fw-bold"></span> <span
                                class="text-muted small pt-2 ps-1">Jumlah </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end vidio --}}

        {{-- kategori --}}
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
                <div class="filter">
                    <a class="icon" href="{{ url('/IndoHub/admin/vidio') }}">
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Kategori </h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class='bx bxs-layer'></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $count_kategori }}</h6>
                            <span class="text-success small pt-1 fw-bold"> </span> <span
                                class="text-muted small pt-2 ps-1">Jumlah </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- end kategori --}}


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(window).on('load', function() {
            $('.loading').fadeOut({{ $fadeout }});
        });
    </script>
@endsection
