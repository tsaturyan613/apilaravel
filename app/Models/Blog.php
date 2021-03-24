<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;

class Blog extends Model
{
    use HasFactory;

    protected $appends = [
        'image_url'
    ];

    protected $casts =[
        'created_at' => 'datetime:Y-m-d',
    ];

    public function getImageUrlAttribute(){
        return Voyager::image($this->image);
    }

}
