<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Destination;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'usertype' => 'admin',

        ]);
        DB::table('destinations')->insert([

            'title' => 'Paris, France',
            'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.'
        ]);
        DB::table('destinations')->insert([

            'title' => 'Tokyo, Japan',
            'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.'
        ]);
        DB::table('destinations')->insert([

            'title' => 'New York City, USA',
            'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.'
        ]);
        DB::table('destinations')->insert([

            'title' => 'Rome, Italy',
            'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.'
        ]);
        DB::table('destinations')->insert([

            'title' => 'Sydney, Australia',
            'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.'
        ]);
        DB::table('destinations')->insert([

            'title' => 'İstanbul, Türkiye',
            'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.'
        ]);
        
    }
}
