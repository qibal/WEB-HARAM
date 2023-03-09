<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\kategori;
use App\Models\vidio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
// use PDF;

use Dompdf\Dompdf;

class adminController extends Controller
{
    function dashboardAdmin()
    {
        $count_vidio = vidio::count();
        $count_kategori = kategori::count();
        $fadeout = ($count_kategori + $count_vidio) * 30;

        return view('admin.dashboardAdmin', compact('count_vidio', 'count_kategori', 'fadeout'));
    }
    // function kategori
    function kategoriAdmin()
    {
        $kategori = kategori::orderBy('nama_kategori', 'asc')->get();
        $fadeout = kategori::count() * 100;
        return view('admin.kategori.indexKategori', compact('kategori', 'fadeout'));
    }
    function kategoriAdminTambah()
    {
        return view('admin.kategori.tambahKategori');
    }
    function kategoriAdminAdd(Request $request)
    {
        $validate = $request->validate([
            'namakategori' => 'required',
            'linkpoto' => 'required',
        ], [
            // custom pesan validasi
            'namakategori.required' => 'Nama kategori harus di isi',
            'linkpoto.required' => 'link poto woee',
        ]);
        $duplikat = kategori::where('nama_kategori', $request->namakategori)->first();
        if ($duplikat !== null) {
            return response()->json(['status' => 'duplikate']);
        } else {
            $input = new kategori();
            $input->nama_kategori = $request->namakategori;
            $input->slug = Str::slug($request->namakategori, '_');
            $input->link_poto = $request->linkpoto;
            $input->save();
            if ($input) {
                return response()->json(['status' => 'success']);
            }
        }
    }
    function kategoriAdminEdit($id)
    {
        $data = kategori::where('id', $id)->first();
        return view('admin.kategori.editKategori', compact('data'));
    }
    function kategoriAdminUpdate(Request $request)
    {
        $validate = $request->validate([
            'namakategori' => 'required',
        ], [
            // custom pesan validasi
            'namakategori.required' => 'Judul vidio harus di isi',
        ]);
        $id = $request->get('cid');

        $input = kategori::find($id);
        $input->nama_kategori = $request->namakategori;
        $input->slug = Str::slug($request->namakategori, '_');
        $input->update();

        if ($input) {
            return response()->json(['status' => 'success']);
        }
    }
    function kategoriAdminDelete($id)
    {
        $delete = kategori::findOrFail($id);
        $delete->delete();
        if ($delete) {
            return response()->json(['status' => 'success']);
        }
    }






    // function vidio
    function vidioAdmin()
    {
        // tampilkan data berdasarkan judul vidio dari a -z
        $vidio = vidio::orderBy('judul_vidio', 'asc')->get();
        $fadeout = vidio::count() * 100;

        // menampilkan data secara random
        // $vidio = vidio::inRandomOrder()->get();
        return view('admin.vidio.indexVidio', compact('vidio', 'fadeout'));
    }
    // pdf
    public function cetak_pdf()
    {
        $vidio = vidio::orderBy('judul_vidio', 'asc')->get();
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('admin.pdf', compact('vidio')));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }
    // end pdf


    function vidioAdminTambah()
    {
        $kategori = kategori::orderBy('nama_kategori', 'asc')->get();
        return view('admin.vidio.tambahVidio', compact('kategori'));
    }
    function vidioAdminAdd(Request $request)
    {
        $validate = $request->validate([
            'judulvidio' => 'required',
            'durasi' => 'required',
            'kategorividio' => 'required',
            'tanggal_upload' => 'required',
            'linkpoto' => 'required',
            'linkvidio' => 'required',
        ], [
            // custom pesan validasi
            'judulvidio.required' => 'Judul vidio harus di isi',
            'durasi.required' => 'Durasi durasi eee',
            'kategorividio.required' => 'Kategori  harus di isi',
            'tanggal_upload.required' => 'TGL upload  harus di isi',
            'linkpoto.required' => 'Mana link fotonya',
            'linkvidio.required' => 'link vidio mana woee',
        ]);

        $input = new vidio();
        $input->judul_vidio = $request->judulvidio;
        $input->slug_judul = Str::slug($request->judulvidio, '_');
        $input->durasi = $request->durasi;
        $input->kategori_id = $request->kategorividio;
        $input->slug_kategori = Str::slug($request->slug, '_');
        $input->tgl_upload = $request->tanggal_upload;
        $input->link_poto = $request->linkpoto;
        $input->link_vidio = $request->linkvidio;
        $input->save();

        if ($input) {
            return response()->json(['status' => 'success']);
        }
    }
    function vidioAdminEdit($id)
    {
        $data = vidio::where('id', $id)->first();
        $kategori = kategori::orderBy('nama_kategori', 'asc')->get();
        return view('admin.vidio.editVidio', compact('data', 'kategori'));
    }
    function vidioAdminUpdate(Request $request)
    {
        $validate = $request->validate([
            'judulvidio' => 'required',
            'durasi' => 'required',
            'kategorividio' => 'required',
            'tanggal_upload' => 'required',
            'linkpoto' => 'required',
            'linkvidio' => 'required',
        ], [
            // custom pesan validasi
            'judulvidio.required' => 'Judul vidio harus di isi',
            'durasi.required' => 'Durasi durasi eee',
            'kategorividio.required' => 'Kategori  harus di isi',
            'tanggal_upload.required' => 'TGL upload  harus di isi',
            'linkpoto.required' => 'Mana link fotonya',
            'linkvidio.required' => 'link vidio mana woee',
        ]);
        $id = $request->get('cid');

        $input = vidio::find($id);
        $input->judul_vidio = $request->judulvidio;
        $input->slug_judul = Str::slug($request->judulvidio, '_');
        $input->kategori_vidio = $request->kategorividio;
        $input->slug_kategori = Str::slug($request->kategorividio, '_');
        $input->link_poto = $request->linkpoto;
        $input->link_vidio = $request->linkvidio;
        $input->update();

        if ($input) {
            return response()->json(['status' => 'success']);
        }
    }
    function vidioAdminDelete($id)
    {
        $delete = vidio::findOrFail($id);
        $delete->delete();
        if ($delete) {
            return response()->json(['status' => 'success']);
        }
    }
}
