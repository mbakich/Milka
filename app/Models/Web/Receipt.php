<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Receipt extends Model implements HasMedia
{
   use HasFactory, InteractsWithMedia;

   protected $fillable = [
       'userId','rawOcrData','status','submissionDate','processingDate','pointsAwarded'
   ];
}
