<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'agam',
            'username' => 'agamf',
            'email' => 'agamf@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Vaksin',
            'slug' => 'vaksin'
        ]);

        Category::create([
            'name' => 'Covid-19',
            'slug' => 'covid-19'
        ]);


        Category::create([
            'name' => 'Health & Care',
            'slug' => 'health&care'
        ]);

        Post::factory(20)->create();
    }
}
