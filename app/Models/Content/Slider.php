<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model{
    use HasFactory;

    public function getImageUrl(){
        return asset("storage/slider/{$this->image}");
    }

}
