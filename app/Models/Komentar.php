<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    protected $table = "komentar";
    protected $fillable = [
        'isi_komentar','nama', 'email', 'berita_id',
    ];
    protected $with = ['berita'];

    public function berita(){
        return $this->belongsTo('App\Models\Berita');
    }
}
