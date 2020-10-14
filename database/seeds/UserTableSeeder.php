<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'test0',
            'email' => 'test0@test0.com',
            'password' => bcrypt('1234'),
        ]);

        for ($i=2; $i < 10; $i++) { 
            User::create([
                'name' => "test$i",
                'email' => 'test'.$i.'@test'.$i.'.com',
                'password' => bcrypt('1234'),
            ]);
            
        }
    }
}
