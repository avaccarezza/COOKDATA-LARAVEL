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

        $orders = Order::factory(10)
                ->make()
                ->each( function($order) use ($users){
                   $order->customer_id = $users->random()->id;
                   $order->save();
                   $payment = Payment::factory()->make();
                   $order->payment()->save($payment);
                });

                $carts = Cart::factory(20)->create();

                $customers = Customer::factory(50)
                        ->create()
                        ->each(function($customer) use ($orders, $carts){
                            $order  = $orders->random();
                            $order->customers()->attach([
                                $customer->id => ['quantity' => mt_rand(1,3)]
                            ]);

                            $cart = $carts->random();

                            $cart->customers()->attach([
                                $customer->id => ['quantity' => mt_rand(1,3)]
                             ]);
                            $images = Image::factory(mt_rand(2,4))->make();
                            $customer->images()->saveMany($images);
                        });

       
    }
}
