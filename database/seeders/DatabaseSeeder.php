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
        ['Smartphone', 'images/categories/smartphone.jpg'],
        ['Tablet', 'images/categories/tablet.jpg'],
        ['Laptop', 'images/categories/laptop.jpg'],
        ['PC Desktop', 'images/categories/pc-desktop.jpg'],
        ['Smartwatch', 'images/categories/smartwatch.jpg'],
        ['TV', 'images/categories/tv.jpg'],
        ['Periferiche', 'images/categories/periferiche.jpg'],
        ['Console Gaming', 'images/categories/console-gaming.jpg'],
        ['Componenti Hardware', 'images/categories/componenti-hardware.jpg'],
        ['Energia e Ricarica', 'images/categories/energia-ricarica.jpg'],
    ];

    public function run(): void {

        foreach ($this->categories as $category) {
            Category::create([
                'name' => $category[0],
                "img_path" =>$category[1]
            ]);
        }
    }
}
