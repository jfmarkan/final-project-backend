<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingMessage extends Model
{
    use HasFactory;

   protected $table = "booking_messages";

    protected $fillable = ['user_id','email','message','created_at'];
}
