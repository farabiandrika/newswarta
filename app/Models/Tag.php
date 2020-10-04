<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Ramsey\Uuid\Uuid as Generator;

class Tag extends Model
{
    protected $fillable = ['nama_tag','slug_url','berita_id'];
    protected $with = ['berita'];
    use HasFactory;

    public function users()
    {
        return $this->belongsTo('App\Models\Berita');
    }
}
