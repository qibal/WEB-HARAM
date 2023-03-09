<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\kategori;
use App\Models\vidio;
use Illuminate\Http\Request;

class userController extends Controller
{
    function kategoriVidio()
    {
        $kategori = kategori::orderBy('nama_kategori', 'asc')->get();
        $K_vidio = kategori::inRandomOrder()->get();
        return view('user.kategoriVidio', compact('kategori', 'K_vidio'));
    }
    function ListVidio($slug)
    {

        $kategori = kategori::orderBy('nama_kategori', 'asc')->get();
        $L_vidio = vidio::where('slug_kategori', $slug)->get();

        return view('user.listVidio', compact('kategori', 'L_vidio'));
    }
    function vidioPlayer($slug_judul)
    {
        $kategori = kategori::orderBy('nama_kategori', 'asc')->get();
        $vidio = vidio::where('slug_judul', $slug_judul)->first();
        $under = vidio::inRandomOrder()->get();

        return view('user.playerVidio', compact('kategori', 'vidio', 'under'));
    }
}
