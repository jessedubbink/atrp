<?php

use Illuminate\Database\Seeder;

class DefaultAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => "admin@atrp.com",
            'password' => Hash::make('password'),
        ]);

        DB::table('roles')->insert([
            'name' => "Admin",
            'guard_name' => "web",
        ]);

        DB::table('model_has_roles')->insert([
            'role_id' => 1,
            'model_type' => "App\User",
            'model_id' => 1,
        ]);
    }
}
