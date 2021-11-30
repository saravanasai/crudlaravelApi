<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User\User;
use App\Models\User\Wallet;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)->create()->each(function($user){
             Wallet::create(["user_wallet"=>$user->id,"balance"=>rand(25000,100000)]);
        });
    }
}
