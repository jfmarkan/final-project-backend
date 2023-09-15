<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecializationUser extends Model
{
    use HasFactory;

    protected $table = "specialization_user";

    protected $fillable = ['user_id', 'specialization_id']
}
