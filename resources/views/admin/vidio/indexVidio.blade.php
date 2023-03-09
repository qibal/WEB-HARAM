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

    <div class="loading">
    </div>
    <div class="pagetitle">
        <h1>Vidio</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">vidio</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Vidio</h5>

            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="{{ url('/IndoHub/admin/vidio') }}" class="nav-link active">Vidio</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ url('/IndoHub/admin/vidio/Tambah') }}" class="nav-link ">Tambah</a>
                </li>
            </ul>
            <div>
                <div>
                    <!-- Default Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul Vidio</th>
                                <th scope="col">Durasi</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">TGL upload</th>
                                <th scope="col">link poto</th>
                                <th scope="col">link vidio</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($vidio as $item)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ Str::limit($item->judul_vidio, '30') }}</td>
                                    <td>{{ Str::limit($item->durasi, '30') }}</td>
                                    <td>{{ $item->kategori->nama_kategori }}</td>
                                    <td>{{ $item->tgl_upload }}</td>
                                    <td>{{ Str::limit($item->link_poto, '30') }}</td>
                                    <td>{{ Str::limit($item->link_vidio, '30') }}</td>
                                    <td>
                                        <div class="d-flex mt-1">
                                            <a href="{{ url('/IndoHub/admin/vidio/Edit/' . $item->id) }}"
                                                class="btn btn-outline-primary p-1">
                                                <i class="bi bi-pen"></i>
                                            </a>
                                            <button class="btn btn-primary p-1 button" id="button"
                                                data-id="{{ $item->id }}">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <!-- End Default Table Example -->
                </div>

            </div><!-- End Bordered Tabs -->

        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(window).on('load', function() {
            $('.loading').fadeOut({{ $fadeout }});
        });
    </script>
    <script>
        $('.button').click(function() {
            var id = $(this).data('id');
            // console.log(id);
            Swal.fire({
                title: 'Yakin ingin menghapus ini?',
                text: "Tindakan ini tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus data!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "GET",
                        url: '/IndoHub/admin/vidio/delete/' + id,
                        success: function(data) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Your work has been saved',
                                showConfirmButton: false,
                                timerProgressBar: true,
                                timer: 1000
                            })
                            setTimeout(function() {
                                window.location.reload();
                            }, 0);
                        },
                        error: function(data) {
                            Swal.fire({
                                title: 'Error',
                                text: xhr.responseJSON.message,
                                icon: 'error'
                            });
                        }
                    });
                }
            })
        });
    </script>
@endsection
