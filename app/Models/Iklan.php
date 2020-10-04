<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iklan extends Model
{
    protected $table = "iklan";
    protected $fillable = ['banner','url','status'];
    use HasFactory;
}
