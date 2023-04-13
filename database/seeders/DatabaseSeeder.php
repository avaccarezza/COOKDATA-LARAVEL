<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\App;
use App\Models\Customer;
use App\Models\Image;
use App\Models\Profile;
use App\Models\User;
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
        $profiles = Profile::factory(3)->create();  
        $customers = Customer::factory(3)->create();  
        $apps = App::factory(10)->create();
        $users = User::factory(20)->create();
        
    }
}
