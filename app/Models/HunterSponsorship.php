<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HunterSponsorship extends Model
{
    use HasFactory;

    protected $table = "hunter_sponsorship";

    protected $fillable = ['hunter_id', 'sponsorship_id', 'sponsorship_start', 'sponsorship_end'];
}
