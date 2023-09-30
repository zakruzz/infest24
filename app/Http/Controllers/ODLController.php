<?php

namespace App\Http\Controllers;

use App\Models\ODL\SubeventODLUmum;
use Illuminate\Http\Request;

class ODLController extends Controller
{
    public function save(Request $request) {

        if($request->tipe_pendaftaran == "umum") {
            $request->validate([
                "nama" => "required",
                "no_wa" => "required",
                "asal_sekolah" => "required",
                "image_ig" => "mimes:jpeg,jpg,png|max:5000",
                "image_ic" => "mimes:jpeg,jpg,png|max:5000",
                "image_sis" => "mimes:jpeg,jpg,png|max:5000",
                "image_milab" => "mimes:jpeg,jpg,png|max:5000",
            ]);
    
            $result = SubeventODLUmum::create([
                "nama" => $request->nama,
                "no_wa" => $request->no_wa,
                "asal_sekolah" => $request->asal_sekolah,
                "image_ig" => "abc",
                "image_ic" => "abc",
                "image_sis" => "abc",
                "image_milab" => "abc",
            ]);
        }elseif($request->tipe_pendaftaran == "undangan") {
            $request->validate([
                "nama" => "required",
                "no_wa" => "required",
                "asal_sekolah" => "required",
                "image_ig" => "mimes:jpeg,jpg,png|max:5000",
                "image_ic" => "mimes:jpeg,jpg,png|max:5000",
                "image_sis" => "mimes:jpeg,jpg,png|max:5000",
                "image_milab" => "mimes:jpeg,jpg,png|max:5000",
            ]);
        }

    }
}
