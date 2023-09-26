<?php

namespace App\Models\Event;

use Carbon\Carbon;
use App\Models\Core\WebsiteVisitor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Subevent extends Model
{
    use HasFactory;

    use HasFactory;

    public function getDateFormatted($format){
        return Carbon::make($this->created_at)->format($format);
    }

    public function getImageUrl(){
        return asset("storage/subevent/{$this->image}");
    }
}
