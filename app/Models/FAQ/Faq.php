<?php

namespace App\Models\FAQ;

use App\Models\Event\Subevent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Faq extends Model
{
    use HasFactory;

    public function subevent() : HasOne{
        return $this->hasOne(Subevent::class, 'id', 'subevent_id');
    }
}
