<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;

    protected $table = 'pinjam';
    public $timestamps = false;
    protected $primaryKey = 'no_pinjam';

    protected $fillable = [
        'id_anggota',
        'no_buku',
        'tgl_pinjam',
        'tgl_kembali',
    ];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota', 'id');
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'no_buku', 'no_buku');
    }
}
