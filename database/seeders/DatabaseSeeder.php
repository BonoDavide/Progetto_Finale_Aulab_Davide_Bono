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
        ['name'=>'Smartphone','img_path'=>'/img/categoria_telefoni2.jpg'],
        ['name'=>'Tablet','img_path'=>'/img/categoria_tablet.jpg'],
        ['name'=>'Laptop','img_path'=>'/img/categoria_laptop.jpg'],
        ['name'=>'PC Desktop','img_path'=>'/img/categoria_PC_fisso.jpg'],
        ['name'=>'Smartwatch','img_path'=>'/img/categoria_smartwatch.jpg'],
        ['name'=>'TV','img_path'=>'/img/TV.png'],
        ['name'=>'Periferiche','img_path'=>'/img/periferiche.png'],
        ['name'=>'Console Gaming','img_path'=>'/img/categoria_console.jpg'],
        ['name'=>'Componenti Hardware','img_path'=>'/img/hardware.png'],
        ['name'=>'Energia e Ricarica','img_path'=>'/img/categoria_energia.png'],

    ];
    /**
     * Seed the application's database.
     */
    public function run(): void {

        foreach ($this->categories as $category) {
            Category::create([
                'name' => $category['name'],
                'img_path' => $category['img_path'],
            ]);
        }
    }
}
