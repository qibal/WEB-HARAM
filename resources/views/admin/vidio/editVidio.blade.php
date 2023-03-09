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
        <h1>Edit Vidio</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Formulir</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Formulir Edot</h5>

            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="{{ url('/IndoHub/admin/vidio') }}" class="nav-link ">Vidio</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ url('/IndoHub/admin/vidio/Tambah') }}" class="nav-link ">Tambah</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ url('/IndoHub/admin/vidio/Tambah') }}" class="nav-link active">Edit</a>
                </li>
            </ul>
            <div>
                <div>

                    <form id="form">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="mt-4 mb-3"> Form Vidio</h4>
                                <input type="hidden" name="cid" value="{{ $data->id }}">
                                {{-- judul vidio --}}
                                <label for="judulvidio" class="mt-1">Judul Vidio</label>
                                <input type="text" name="judulvidio" id="namakategori" class="form-control mt-2"
                                    placeholder="Mantap mantap" value="{{ $data->judul_vidio }}">
                                @error('judulvidio')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                {{-- Durasi --}}
                                <label for="judulvidio" class="mt-1">Durasi</label>
                                <input type="text" name="durasi" id="durasi" class="form-control mt-2"
                                    placeholder="10:00 " value="{{ $data->durasi }}">
                                @error('durasi')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                {{-- kategori vidio --}}
                                <label for="kategorividio" class="mt-3">Kategori </label>
                                <select class="form-select" aria-label="Default select example" name="kategorividio">

                                    <option hidden selected value="{{ $data->kategori_vidio }}">{{ $data->kategori_vidio }}
                                    </option>

                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->nama_kategori }}">{{ $item->nama_kategori }}</option>
                                    @endforeach
                                </select>
                                @error('kategorividio')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                {{-- tanggal upload --}}
                                <label for="tanggal_upload" class="mt-3">Tanggal upload</label>
                                <input type="text" name="tanggal_upload" id="tanggal_upload" class="form-control mt-2"
                                    placeholder="mei 3 2023 / Di View" value="{{ $data->tgl_vidio }}">
                                @error('tanggal_upload')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                {{-- link poto --}}
                                <label for="linkpoto" class="mt-3">Link Vidio</label>
                                <input type="text" name="linkpoto" id="linkpoto" class="form-control mt-2"
                                    placeholder="www.uploadfoto.com" value="{{ $data->link_vidio }}">
                                @error('linkvidio')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                {{-- link vidio --}}
                                <label for="linkVidio" class="mt-3">Link Vidio</label>
                                <input type="text" name="linkvidio" id="namakategori" class="form-control mt-2"
                                    placeholder="www.uploadVidio.com" value="{{ $data->link_vidio }}">
                                @error('linkvidio')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror


                                <div class="d-grid gap-2 mt-4">
                                    <button class="btn btn-primary" type="submit" id="button">Edit Data</button>
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
                    url: "{{ route('vidioAdminUpdate') }}",
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
                            timer: 1500
                        }).then(function() {
                            location.reload();
                        });
                    },
                    error: function(xhr) {
                        // Tampilkan notifikasi error dengan Sweet Alert
                        Swal.fire({
                            title: 'Jangan lupa di isi',
                            text: xhr.responseJSON.message,
                            icon: 'error'
                        });
                    }
                });
            });
        });
    </script>
@endsection
