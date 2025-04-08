<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeyWords extends Model
{
    use HasFactory;

    protected $fillable = [
        'sinonim'
    ];
}
