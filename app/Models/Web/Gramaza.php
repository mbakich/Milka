<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gramaza extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'category','grams'
    ];
}
