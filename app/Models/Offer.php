<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = "offers";
    protected $fillable = ['name','price','details','created_at','updated_at']; // الاشياء التي ممكن اعمل عليها ترانسكشن في الداتابيز
    protected $hidden =['created_at','updated_at']; // الاشياء يلي مابدي ارجعها من الداتابيز
   // use HasFactory;
   
   public $timestamps = false; // to prevent add default time to table offer
}
