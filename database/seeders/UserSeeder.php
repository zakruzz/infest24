<?php

namespace Database\Seeders;

use App\Models\Auth\Admin;
use App\Models\Auth\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        Role::create(['name' => 'Superuser']);
        Role::create(['name' => 'Inskill']);
        Role::create(['name' => 'Inspection']);

        $superuser = User::create([
            'name'              => 'Superadmin',
            'email'             => 'super@infest',
            'password'          => Hash::make('infest2024'),
            'image'             => 'default.png',
            'type'              => 'superadmin',
            'is_darkmode'       => 0,
        ]);

        $inskill = User::create([
            'name'              => 'INSKILL',
            'email'             => 'inskill@infest',
            'password'          => Hash::make('infest2024'),
            'image'             => 'default.png',
            'type'              => 'superadmin',
            'is_darkmode'       => 0,
        ]);

        $inspection = User::create([
            'name'              => 'INSPECTION',
            'email'             => 'inspection@infest',
            'password'          => Hash::make('infest2024'),
            'image'             => 'default.png',
            'type'              => 'superadmin',
            'is_darkmode'       => 0,
        ]);

        $superuser->assignRole('Superuser');
        $inskill->assignRole('Inskill');
        $inspection->assignRole('Inspection');

    }
}
