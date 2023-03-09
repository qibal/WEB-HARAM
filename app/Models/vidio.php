<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class vidio extends Model
{
    use HasFactory;
    function kategori()
    {
        return $this->belongsTo(kategori::class);
    }
}
