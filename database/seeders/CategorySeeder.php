<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::create([
        //     'name' => 'Post',
        //     'description' => 'Post content'
        // ]);

        // Category::create([
        //     'name' => 'About',
        //     'description' => 'About content'
        // ]);

        Category::create([
            'name' => 'Dog',
            'description' => 'Dog content'
        ]);


    }
}
