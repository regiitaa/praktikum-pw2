<?php

namespace App\Models;
use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'dosen';

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }
}