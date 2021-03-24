<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    use HasFactory;

    protected $hidden = ['id','created_at','updated_at'];

    public function portfolios(){
        return $this->hasMany(Portfolio::class);
    }
}
