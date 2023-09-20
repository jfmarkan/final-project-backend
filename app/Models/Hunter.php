<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hunter extends Model
{
    use HasFactory;

    protected $table = "hunters";

    protected $fillable = ['name','surname','picture','cv','phone','address','services','payment'];

    //stesso risultato di $hunters = Hunter::with('specializations')->where('user_id',$user_id)->first(); nel controller
    // https://laravel.com/docs/10.x/eloquent#primary-keys
    protected $primaryKey = 'user_id'; 

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function specializations(){
        return $this->belongsToMany(Specialization::class, 'specialization_hunter', 'user_id', 'specialization_id');
    }
}
