<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;

    protected $primaryKey = 'nisn';

    public function parentDb()
    {
        // return $this->belongsTo(ParentDb::class,)
        return $this->belongsTo(ParentDb::class, 'parent_dbs_id', 'id');
    }
}
