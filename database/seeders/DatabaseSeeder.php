<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\App;
use App\Models\AppUser;
use App\Models\Consultant;
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
    Profile::factory()->create([
    'profile' => 'Consultor',
    ]);
    Profile::factory()->create([
    'profile' => 'Gerencia',
    ]);
    Profile::factory()->create([
    'profile' => 'Administrador',
     ]);
        
        $customers = Customer::factory(3)->create();  
        //$users = User::factory(30)->create();


        $users = User::factory(10)
        ->create()
        ->each(function($user) use ($customers){
            

            $customer = $customers->random();
            $image = Image::factory()
             ->user()
             ->make();
             $user->image()->save($image);
        });
        /*$users = User::factory(50)
        ->create()
        ->each(function($user) use ($customers){
            

            $customer = $customers->random();

            $customer->users()->attach([
                $user->id => ['quantity' => mt_rand(1,3)]
             ]);
             $image = Image::factory()
             ->user()
             ->make();
             $user->image()->save($image);
        });*/


App::factory()->create([
'app' => 'Database',
'type_of_app' => 'Aplicaciones',
]);
App::factory()->create([
'app' => 'Gestion',
'type_of_app' => 'Aplicaciones',
]);
$apps = App::factory(5)->create();
        //$consultants = Consultant::factory(10)->create();
       //$app_users =  AppUser::factory()->count(10)->create();
        
    }
}
