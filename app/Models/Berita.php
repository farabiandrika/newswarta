<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = "berita";
    protected $with = ['users','kategori','komentar','gambar','tags'];
    protected $fillable = [
        'user_id', 'kategori_id', 'judul', 'isi', 'slug_url', 'status', 'gambar',
    ];

    public function users(){
        return $this->belongsTo('App\Models\User');
    }

    public function kategori(){
        return $this->belongsTo('App\Models\Kategori');
    }

    public function komentar(){
        return $this->hasMany('App\Models\Komentar');
    }

    public function gambar(){
        return $this->hasMany('App\Models\Gambar');
    }

    public function tags(){
        return $this->hasMany('App\Models\Tag');
    }

}
