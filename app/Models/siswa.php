<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class siswa extends Model
{
    use HasFactory;
    protected $fillable = ['nis', 'nama', 'jurusan'];
    protected $table = 'siswa';
    public $timestamps = false;
}