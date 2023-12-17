<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    public function stones(){
        return $this->belongsToMany(stone::class);
    }
    public function beats(){
        return $this->belongsToMany(beat::class);
    }
}
