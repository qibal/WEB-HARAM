<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class vidio extends Model
{
    use HasFactory;
    protected $table = "vidios";

    protected $fillable = ['judul_vidio', 'slug_judul', 'durasi', 'kategori_id', 'slug_kategori', 'link_poto', 'link_vidio', 'tgl_uploas\d'];
    function kategori()
    {
        return $this->belongsTo(kategori::class);
    }
}
