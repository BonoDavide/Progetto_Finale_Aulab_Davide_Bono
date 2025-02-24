<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $categories = [
            ['name' => 'Viaggi'],
            ['name' => 'Film'],
            ['name' => 'Musica'],
            ['name' => 'Articoli Sportivi'],
            ['name' => 'Food'],
            ['name' => 'Giardinaggio'],
            ['name' => 'Pet'],
            ['name' => 'Libri'],
            ['name' => 'Informatica'],
            ['name' => 'Arredamento'],
        ];
        foreach($categories as $category){

            DB::table('categories')->insert([
                'name'=> $category['name']
            ]);
        }

    }
}
