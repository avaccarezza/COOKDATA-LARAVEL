<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Cart;
use App\Models\Image;
use App\Models\Order;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Database\Seeder;
use App\Models\Customer;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        

        $users = User::factory(20)
                ->create()
                ->each(function($user){
                    $image = Image::factory()
                    ->user()
                    ->make();

                    $user->image()->save($image);
                });

       

             

       
    }
}
