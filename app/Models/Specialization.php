<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    use HasFactory;

    protected $table = "specializations";

    protected $fillable = ['name'];

    public function hunters(){
        return $this->belongsToMany('App\Models\Hunter');
    }
}
