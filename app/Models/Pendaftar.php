<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['parentDb', 'asalSekolah', 'berkas'];


    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn ($query, $search) => $query->where('namaLengkap', 'like', '%' . $search . '%')->orWhere('nisn', 'like', '%' . $search . '%'));
    }
    public function parentDb()
    {
        // return $this->belongsTo(ParentDb::class,)
        return $this->belongsTo(ParentDb::class, 'parent_dbs_id', 'id');
    }

    public function asalSekolah()
    {
        // return $this->belongsTo(ParentDb::class,)
        return $this->belongsTo(AsalSekolah::class, 'asalSekolah_id', 'id');
    }
    public function berkas()
    {
        // return $this->belongsTo(ParentDb::class,)
        return $this->belongsTo(Berkas::class, 'berkas_id', 'id');
    }
}
