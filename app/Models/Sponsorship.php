<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsorship extends Model
{
    use HasFactory;

    protected $table = "sponsorships";

    protected $fillable = ['name','price','duration'];

    public function hunters(){
        return $this->belongsToMany(Hunter::class, 'user_id');
    }
}
