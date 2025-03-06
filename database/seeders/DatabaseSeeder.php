<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public $categories = [
        'Smartphone',
        'Tablet',
        'Laptop',
        'PC Desktop',
        'Smartwatch',
        'TV',
        'Periferiche',
        'Console Gaming',
        'Componenti Hardware',
        'Energia e Ricarica',

    ];
    /**
     * Seed the application's database.
     */
    public function run(): void {

        foreach ($this->categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
    }
}
