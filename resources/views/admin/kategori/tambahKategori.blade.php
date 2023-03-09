@extends('admin.layoutAdmin')
@section('admin')
    {{-- <style>
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
    </style> --}}

    <div class="loading">
    </div>
    <div class="pagetitle">
        <h1>Tambah Kategori</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/IndoHub/admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/IndoHub/admin/kategori') }}">Kategori</a></li>
                <li class="breadcrumb-item active">Tambah Kategori</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambah Kategori</h5>

            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="{{ url('/IndoHub/admin/kategori') }}" class="nav-link ">Kategori</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ url('/IndoHub/admin/kategori/Tambah') }}" class="nav-link active">Tambah</a>
                </li>
            </ul>
            <div>
                <div>

                    <form id="form">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="mt-4 mb-3"> Form Kategori</h4>
                                {{-- nama Kategori --}}
                                <label for="namakategori" class="mt-1">Nama Kategori</label>
                                <input type="text" name="namakategori" id="namakategori" class="form-control mt-2"
                                    placeholder="Family ">
                                @error('namakategori')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                {{-- link poto --}}
                                <label for="linkpoto" class="mt-1">Link poto</label>
                                <input type="text" name="linkpoto" id="linkpoto" class="form-control mt-2"
                                    placeholder="Family / splash image">
                                @error('linkpoto')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror



                                <div class="d-grid gap-2 mt-4">
                                    <button class="btn btn-primary" type="submit" id="button">Upload Data</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div><!-- End Bordered Tabs -->

        </div>
    </div>
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
                    url: "{{ route('kategoriAdminAdd') }}",
                    type: "POST",
                    data: $('#form').serialize(),
                    success: function(response) {
                        // Tampilkan notifikasi dengan Sweet Alert
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Your work has been saved',
                            showConfirmButton: false,
                            timerProgressBar: true,
                            timer: 1000
                        }).then(function() {
                            location.reload();
                        });
                    },
                    error: function(xhr) {
                        // Tampilkan notifikasi error dengan Sweet Alert
                        Swal.fire({
                            title: 'di isi woee',
                            text: xhr.responseJSON.message,
                            icon: 'error'
                        });
                    },
                });
            });
        });
    </script>
@endsection
