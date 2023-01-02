<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category -> name = "Bricolage";
        $category -> save();

        $category1 = new Category();
        $category1 -> name = "Electroménager";
        $category1 -> save();

        $category2 = new Category();
        $category2 -> name = "Animaux";
        $category2 -> save();

        $category3 = new Category();
        $category3 -> name = "Véhicule";
        $category3 -> save();

        $category4 = new Category();
        $category4 -> name = "Multimédia";
        $category4-> save();

        $category5 = new Category();
        $category5 -> name = "Loisirs";
        $category5 -> save();

        $category6 = new Category();
        $category6 -> name = "Meuble";
        $category6 -> save();
    }
}
