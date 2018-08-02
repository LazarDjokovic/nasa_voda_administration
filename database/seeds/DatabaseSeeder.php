<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'created_at' => Carbon::now()
        ]);
        DB::table('roles')->insert([
            'name' => 'user',
            'created_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'id_role'=>1,
            'name' => 'admin',
            'email'=>'info@nasavoda.rs',
            'password'=>Hash::make('admin123'),
            'created_at' => Carbon::now(),
        ]);
    }
}
