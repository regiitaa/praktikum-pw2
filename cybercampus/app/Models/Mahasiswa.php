<?php

namespace App\Models;
use App\Models\Dosen;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "mahasiswa";

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
}