<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsalSekolah extends Model
{
    use HasFactory;

    public function pendaftar()
    {
        return $this->belongsTo(Pendaftar::class, 'id', 'asalSekolah_id');
    }
}
