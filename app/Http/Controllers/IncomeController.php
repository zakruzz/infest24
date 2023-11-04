<?php

namespace App\Http\Controllers;

use App\Models\Auth\User;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class IncomeController extends Controller
{
    public function save(Request $request) {

        if($request->password === $request->confirm_password) {
            $user = User::create([
                'name'              => $request->nama_tim,
                'email'             => $request->email,
                'password'          => Hash::make($request->password),
                'image'             => 'default.png',
                'type'              => 'superadmin',
                'is_darkmode'       => 0,
            ]);

            $daftar_nama = [];

            foreach($request->nama as $nama) {
                $daftar_nama[] = $nama;
            }

            Participant::create([
                "user_id" => $user->id,
                "name" => json_encode($daftar_nama),
                "no_wa" => $request->no_wa,
                "institusi" => $request->institusi,
                "type" => $request->type,
                "tema" => $request->tema,
            ]);

            $user->assignRole($request->type);
        }

        if($request->type == 'Inspection') {
            return redirect()->away('https://chat.whatsapp.com/FgxOCl6eA3PLOcq0stnE2r');
        }elseif($request->type == 'Inskill') {
            return redirect()->away('https://chat.whatsapp.com/E7dYjQJbqjaL3U0hTF3aSu');
        }
    }

}
