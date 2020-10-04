<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = "kategori";
    protected $fillable = [
        'nama_kategori','slug_url',
    ];
    protected $with = ['berita'];

    public function berita(){
        return $this->hasMany('App\Models\Berita');
    }
}
