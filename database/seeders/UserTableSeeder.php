<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            'name' => 'andres',
            'email' => 'andres@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
