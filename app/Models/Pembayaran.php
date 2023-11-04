<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = "abstraks";

    protected $fillable = [
        "user_id",
        "participant_id",
        "filename",
    ];
}
