<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataCategory = [
            [
                'category_name' => "Rock and Roll",
                'description' =>  "lorem ipsum dolor sit amet, consectetur adipiscing elit."
            ],
            [
                'category_name' => "Pop",
                'description' =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
            ],
            [
                'category_name' => "Jazz",
                'description' =>  "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
            ],
            [
                'category_name' => "Blues",
                'description' =>  "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."
            ],
            [
                'category_name' => "Classical",
                'description' =>  "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            ]
        ];
        Category::insert($dataCategory);
    }
}
