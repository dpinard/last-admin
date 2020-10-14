<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['id' => 1, 'name' => 'admin'],
            ['id' => 2, 'name' => 'modérateur'],
            ['id' => 3, 'name' => 'user']
        ]);

        DB::table('role_users')->insert([
            ['id' => 1, 'user_id' => 1, 'role_id' => 1],
            ['id' => 2, 'user_id' => 2, 'role_id' => 2],
        ]);
    }
}
