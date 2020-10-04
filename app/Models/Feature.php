<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    protected $with = ['berita'];
    protected $fillable = [
        'berita_id', 'urutan',
    ];

    public function berita(){
        return $this->belongsTo('App\Models\Berita');
    }
}
