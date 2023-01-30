<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'alamat',
        'kota',
        'no_telp',
        'tgl_lahir',
    ];

    public function pinjam()
    {
        return $this->hasMany(Pinjam::class, 'id_anggota', 'id');
    }
}
