<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    // public function run()
    // {
    //     // $this->call(UsersTableSeeder::class);
    //     $this->call(CategoryDatabaseSeeder::class);
    // }
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'admin@gmail.com',
            'profil' =>'admin',
            'password' => Hash::make('admin@gmail.com'),
        ]);

        $this->call(AlgeriaCitiesTableSeeder::class);
    }
}
