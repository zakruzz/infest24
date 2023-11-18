<?php

namespace App\Models;

use App\Models\Auth\User;
use App\Models\BuktiFollow;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Participant extends Model
{
    use HasFactory;

    protected $table = "participants";

    protected $fillable = [
        "user_id",
        "name",
        "no_wa",
        "institusi",
        "type",
        "tema",
    ];

    public function user() : HasOne{
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function buktiFollow() : HasOne{
        return $this->hasOne(BuktiFollow::class, 'participant_id', 'id');
    }

    public function pembayaran() : HasOne{
        return $this->hasOne(Pembayaran::class, 'participant_id', 'id');
    }
}
