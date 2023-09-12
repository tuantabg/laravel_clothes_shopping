<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::factory()->create([
            [
                'name' => 'Quần áo',
                'parent_id' => 0,
                'slug' => 'quan-ao'
            ],
            [
                'name' => 'Quần áo nam',
                'parent_id' => 1,
                'slug' => 'quan-ao-nam'
            ],
            [
                'name' => 'Quần áo nữ',
                'parent_id' => 2,
                'slug' => 'quan-ao-nu'
            ]
        ]);

    }
}
