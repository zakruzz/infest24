<?php

namespace Database\Seeders;

use App\Models\Auth\Admin;
use App\Models\Auth\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        $datas  = [
            [
                'name'              => 'Superadmin',
                'email'             => 'super@infest',
                'password'          => Hash::make('infest2023'),
                'image'             => 'default.png',
                'type'              => 'superadmin',
                'is_darkmode'       => 0,
            ],
        ];

        User::truncate()->insert($datas);

    }
}
