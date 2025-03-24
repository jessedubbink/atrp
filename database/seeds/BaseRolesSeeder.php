<?php

use Illuminate\Database\Seeder;

class BaseRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => "Guest",
            'guard_name' => "web",
        ]);

        DB::table('roles')->insert([
            'name' => "Journalist",
            'guard_name' => "web",
        ]);

        DB::table('roles')->insert([
            'name' => "Real Estate Agent",
            'guard_name' => "web",
        ]);
    }
}
