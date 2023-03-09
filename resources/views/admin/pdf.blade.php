@extends('admin.layoutAdmin')
@section('admin')
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
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($vidio as $item)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $item->judul_vidio, '30' }}</td>
                    <td>{{ $item->durasi, '30' }}</td>
                    <td>{{ $item->kategori->nama_kategori }}</td>
                    <td>{{ $item->tgl_upload }}</td>
                    <td>{{ $item->link_poto, '30' }}</td>
                    <td>{{ $item->link_vidio, '30' }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
