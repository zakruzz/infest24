<?php

namespace App\Models\ODL;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubeventODLUmum extends Model
{
    use HasFactory;

    protected $table = "subevent_odl_umum";

    protected $fillable = [
        "nama",
        "no_wa",
        "asal_sekolah",
        "link_drive",
        "image_ig",
        "image_ic",
        "image_sis",
        "image_milab",
    ];
}
