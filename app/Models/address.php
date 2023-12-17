<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class address extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
