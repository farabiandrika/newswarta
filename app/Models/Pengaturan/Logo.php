<?php

namespace App\Models\Pengaturan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    protected $table = "logo";
    protected $fillable = ['logo','status'];
    use HasFactory;
}
