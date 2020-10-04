<?php

namespace App\Models\Pengaturan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Struktur extends Model
{
    protected $table = "struktur";
    protected $fillable = ['struktur', 'status'];
    use HasFactory;
}
