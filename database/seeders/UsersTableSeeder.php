<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed users
        DB::table('users')->insert([
            'name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@example.com',
            'city' => 'City1',
            'country' => 'Country1',
            'summary' => 'Lorem ipsum dolor sit amet.',
            'frameworks' => json_encode([
                ['name' => 'Laravel', 'level' => 'Intermediate'],
                ['name' => 'Vue.js', 'level' => 'Beginner'],
            ]),
            'hobbies' => json_encode([
                ['name' => 'Reading', 'description' => 'I love reading books.'],
                ['name' => 'Cooking', 'description' => 'I enjoy trying new recipes.'],
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seed more users
        DB::table('users')->insert([
            'name' => 'Jane',
            'last_name' => 'Smith',
            'email' => 'jane.smith@example.com',
            'city' => 'City2',
            'country' => 'Country2',
            'summary' => 'Consectetur adipiscing elit.',
            'frameworks' => json_encode([
                ['name' => 'React', 'level' => 'Advanced'],
                ['name' => 'Angular', 'level' => 'Intermediate'],
            ]),
            'hobbies' => json_encode([
                ['name' => 'Traveling', 'description' => 'I love exploring new places.'],
                ['name' => 'Photography', 'description' => 'Capturing moments with my camera.'],
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Add more users as needed...

    }
}
