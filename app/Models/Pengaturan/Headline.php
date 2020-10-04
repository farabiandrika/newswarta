<?php

namespace App\Models\Pengaturan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Headline extends Model
{
    protected $table = "Headline";
    protected $fillable = ['headline'];
    use HasFactory;
}
