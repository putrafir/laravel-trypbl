<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentDb extends Model
{
    use HasFactory;

    public function pendaftar()
    {
        return $this->belongsTo(Pendaftar::class, 'id', 'parent_dbs_id');
    }
}
