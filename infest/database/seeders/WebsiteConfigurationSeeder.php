<?php

namespace Database\Seeders;

use App\Models\Core\WebsiteConfiguration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class WebsiteConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WebsiteConfiguration::truncate()->insert([
            'name_website'      => 'X',
            'email'             => 'mail@mail.com',
            'phone_number'      => '62812345678',
            'fax_number'        => NULL,
            'address'           => '-',
            'address_city'      => '-',
            'logo'              => 'logo.png',
            'logo_negative'     => NULL,
            'icon'              => 'icon.png',
            'icon_negative'     => NULL,
            'meta_keywords'     => '-',
            'meta_description'  => '-',
            'status'            => 'ACTIVE',
        ]);
    }
}
