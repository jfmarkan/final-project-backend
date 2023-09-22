<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hunter extends Model
{
    use HasFactory;

    protected $table = "hunters";

    protected $fillable = ['name','surname','image','cv','phone','address','services'];

    //stesso risultato di $hunters = Hunter::with('specializations')->where('user_id',$user_id)->first(); nel controller
    // https://laravel.com/docs/10.x/eloquent#primary-keys


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function specializations(){
        return $this->belongsToMany(Specialization::class, 'hunter_specialization', 'hunter_id', 'specialization_id');
    }
}
