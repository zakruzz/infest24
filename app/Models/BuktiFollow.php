<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuktiFollow extends Model
{
    use HasFactory;

    protected $table = 'bukti_follow';

    protected $fillable = [
        'user_id',
        'participant_id',
        'ss_infest',
        'ss_ic',
        'ss_sis',
        'ss_milab',
        'ss_instastory',
        'ss_poster',
        'ss_twibbon',
        'link_drive',
    ];
}
