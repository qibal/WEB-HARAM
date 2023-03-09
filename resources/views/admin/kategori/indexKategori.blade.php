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
        <h1>Kategori</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/IndoHub/admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Kategori</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Kategori</h5>

            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="{{ url('/IndoHub/admin/kategori') }}" class="nav-link active">Kategori</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ url('/IndoHub/admin/kategori/Tambah') }}" class="nav-link ">Tambah</a>
                </li>
            </ul>
            <div>
                <div>
                    <!-- Default Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">link poto</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($kategori as $item)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ Str::limit($item->nama_kategori, '30') }}</td>
                                    <td>{{ Str::limit($item->link_poto, '30') }}</td>
                                    <td>
                                        <div class="d-flex mt-1">
                                            <a href="{{ url('/IndoHub/admin/kategori/Edit/' . $item->id) }}"
                                                class="btn btn-outline-primary p-1">
                                                <i class="bi bi-pen"></i>
                                            </a>
                                            <button class="btn btn-primary p-1 button"
                                                id="button"data-id="{{ $item->id }}">
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
                        url: '/IndoHub/admin/kategori/delete/' + id,
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
