<?php

namespace App\Models\Pengaturan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mediasosial extends Model
{
    protected $table = "mediasosial";
    protected $fillable = ['nama_fb','url_fb','nama_tw','url_tw','nama_yt','url_yt','nama_ig','url_ig'];
    use HasFactory;
}
