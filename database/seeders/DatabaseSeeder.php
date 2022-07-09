<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
        ]);
        User::create([
           'name' => 'Fulan Al Kolam',
           'email' => 'admin@bimbingin.apps',
           'password' => bcrypt('123456'),
        ]);
    }
}
