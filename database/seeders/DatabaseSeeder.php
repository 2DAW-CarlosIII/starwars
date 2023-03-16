<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        Schema::disableForeignKeyConstraints();
        $this->call([
            FilmSeeder::class,
            CharacterSeeder::class,
            CharacterFilmSeeder::class,
        ]);

        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => env('DATABASE_ADMIN'),
            'email' => env('DATABASE_EMAIL'),
            'password' => Hash::make(env('DATABASE_PASS')),
            'email_verified_at' => now()
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
