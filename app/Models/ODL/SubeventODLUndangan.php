<?php

namespace App\Models\ODL;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubeventODLUndangan extends Model
{
    use HasFactory;

    protected $table = "subevent_odl_undangan";

    protected $fillable = [
        "nama",
        "no_wa",
        "asal_sekolah",
        "nama_guru",
        "wa_guru",
        "image_ig",
        "image_ic",
        "image_milab",
        "image_sis",
    ];
}
