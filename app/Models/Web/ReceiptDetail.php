<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceiptDetail extends Model
{
   use HasFactory;

   protected $fillable = [
       'user_id','receipt_id','tacun','item','points'
   ];
}
