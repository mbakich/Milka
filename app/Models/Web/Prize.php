<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prize extends Model
{
   use HasFactory;

   protected $fillable = [
       'name','description','imageUrl','pointsCost','totalStock','remainingStock','maxPerUser','country_code'
   ];
}
