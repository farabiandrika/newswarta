<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalasKomentar extends Model
{
    use HasFactory;
    protected $with = ['user', 'komentar'];
    protected $table = "balas_komentar";
    protected $fillable = [
        'isi_komentar', 'nama', 'email',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function komentar(){
        return $this->belongsTo('App\Models\Komentar');
    }
}
