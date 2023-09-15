<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hunter extends Model
{
    use HasFactory;

    protected $table = "hunters";

    protected $fillable = ['name','surname','picture','cv','phone','address','services','payment'];

    
    public function specializations(){
        return $this->belongsToMany('App\Models\Specialization');
    }
}
