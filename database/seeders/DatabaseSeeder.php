<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;

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

        User::factory()->create([
            'name' => 'test',
            'email' => 'test@admin.com',
            'password' => bcrypt('123456')
        ]);

        // User::create([
        //     'name' => 'test',
        //     'email' => 'test@admin.com',
        //     'password' => bcrypt('123456')
        // ]);

        \App\Models\Post::factory(24)->create();

    }
}
