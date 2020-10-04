<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    use HasFactory;
    protected $table = "gambar";
    protected $fillable = [
        'nama', 'keterangan', 'slug_url','berita_id',
    ];
    protected $with = ['berita'];

    public function berita(){
        return $this->belongsTo('App\Models\Berita');
    }
}
