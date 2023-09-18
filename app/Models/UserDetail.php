<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $table = "user_details";

    protected $fillable = ['name','surname','picture','cv','phone','address','services','payment'];
}