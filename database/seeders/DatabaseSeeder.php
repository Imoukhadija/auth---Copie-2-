<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Clients;

use App\Models\Vehicules ;
use  App\Models\Categories;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        \App\Models\User::factory(1)->create();
         \App\Models\Clients::factory(5)->create();
         
         \App\Models\Vehicules::factory(5)->create();
         
         \App\Models\Categories::factory(5)->create();
         \App\Models\Costumer::factory(1)->create();

    }
}
