<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;

class Portfolio extends Model
{
    use HasFactory;

    protected $hidden=[
        'profession_id',
        'type_id'
    ];

    protected $appends = [
        'image_url'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
    ];

    public function getImageUrlAttribute(){
        return Voyager::image($this->image);
    }

    public function profession(){
        return $this->belongsTo(Profession::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
