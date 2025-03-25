<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
   use HasFactory;

   protected $fillable = [
       'name','code'
   ];
}
