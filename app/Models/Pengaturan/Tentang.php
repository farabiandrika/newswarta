<?php

namespace App\Models\Pengaturan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    protected $table = "tentang";
    protected $fillable = ['tentang'];
    use HasFactory;
}
