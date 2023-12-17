<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stone extends Model
{
    use HasFactory;

    public function beats(){
        return $this->belongsToMany(beat::class);
    }
    public function products(){
        return $this->belongsToMany(product::class);
    }
}
