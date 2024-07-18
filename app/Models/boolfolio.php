<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class boolfolio extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descrizione', 'cover_image'];
}
