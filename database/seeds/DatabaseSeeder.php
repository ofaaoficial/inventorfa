<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create([
            'name' => 'David',
            'email' => 'davidstevenreyes@hotmail.com',
            'document' => '1031178189',
            'phone_number' => '3195768307',
            'password' => bcrypt('DavidReyes'),
            'role' => 'admin',
        ]);


        Product::create([
            'name' => 'Product test',
            'quantity' => '1',
            'description' => 'description product test',
        ]);

    }
}
