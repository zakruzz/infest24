<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\Project\ProjectCategorySeeder;
use Database\Seeders\Project\ProjectSeeder;
use Database\Seeders\Project\ProjectTeamSeeder;
use Database\Seeders\Team\TeamDivisionSeeder;
use Database\Seeders\Team\TeamSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(WebsiteConfigurationSeeder::class);

       $this->call(UserSeeder::class);

       $this->call(ClientSeeder::class);
    }
}
