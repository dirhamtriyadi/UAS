<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    public $timestamps = false;
    protected $primaryKey = 'no_buku';

    protected $fillable = [
        'judul',
        'pengarang',
        'tahun_terbit',
        'jenis_buku',
        'status',
    ];

    public function pinjam()
    {
        return $this->hasMany(Pinjam::class, 'id_buku', 'id');
    }
}
