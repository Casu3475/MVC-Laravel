<?php

namespace Database\Seeders;

use App\Models\Ads;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $annonce1 = new Post();
        $annonce1 ->title = "Chaise";
        $annonce1 ->price = 15;
        $annonce1 ->description = "Chaise pour salon. Vendu par lot de 6";
        $annonce1 ->location = "Caen";
        $annonce1 ->condition_id = 1;
        $annonce1 ->image1 = "images/chaise_01.jpg";
        $annonce1 ->category_id ="House";
        $annonce1 ->user_id = "33";
        $annonce1 -> save();

        $annonce2 = new Post();
        $annonce2 ->title = "Chat";
        $annonce2 ->price = 250;
        $annonce2 ->description = "Chaton de 2 mois, vacciné et tatoué. Adore jouer et demande beaucoup de câlins";
        $annonce2 ->location = "Toulouse";
        $annonce2 ->image1 = "images/chat_01.jpg";
        $annonce2 ->category_id = "Animals";
        $annonce2 ->condition_id ="2";
        $annonce2 ->user_id = "33";
        $annonce2 -> save();

        $annonce3 = new Post();
        $annonce3 ->title = "Chien";
        $annonce3 ->price = 380;
        $annonce3 ->description = "Chien de race, vacciné et tatoué. 3 mois. N'attend que son maître";
        $annonce3 ->location = "Amiens";
        $annonce3 ->image1 = "images/chien_01.jpg";
        $annonce3 ->category_id = "Animals";
        $annonce3 ->condition_id ="2";
        $annonce3 ->user_id = "33";
        $annonce3 -> save();

        $annonce4 = new Post();
        $annonce4 ->title = "Four";
        $annonce4 ->price = 35;
        $annonce4 ->description = "four micro_ondes avec grill intégré. Couleur noire";
        $annonce4 ->location = "Bordeaux";
        $annonce4 ->image1 = "images/four.jpg";
        $annonce4 ->category_id = "House";
        $annonce4 ->condition_id ="1";
        $annonce4 ->user_id = "33";
        $annonce4 -> save();

        $annonce5 = new Post();
        $annonce5 ->title = "Karcher";
        $annonce5 ->price = 35;
        $annonce5 ->description = "karcher ayant servi mais gardant une bonne puissance de nettoyage";
        $annonce5 ->location = "Lyon";
        $annonce5 ->image1 = "images/karcher.jpg";
        $annonce5 ->category_id = "House";
        $annonce5 ->condition_id ="1";
        $annonce5 ->user_id = "33";
        $annonce5 -> save();

        $annonce6 = new Post();
        $annonce6 ->title = "Ordinateur";
        $annonce6 ->price = 580;
        $annonce6 ->description = "Macbook pro. Bonne mémoire. Rapide. Peu servi. Disponible de suite. Couleur métallisée.";
        $annonce6 ->location = "Marseille";
        $annonce6 ->image1 = "images/ordinateur.jpg";
        $annonce6 ->category_id = "Multimedia";
        $annonce6 ->condition_id ="1";
        $annonce6 ->user_id = "33";
        $annonce6 -> save();

        $annonce7 = new Post();
        $annonce7 ->title = "Perceuse";
        $annonce7 ->price = 25;
        $annonce7 ->description = "Perceuse, devisseuse. Ayant servi mais toujours fonctionnelle. Bonne puissance. Légère.";
        $annonce7 ->location = "Montpellier";
        $annonce7 ->image1 = "images/perceuse.jpg";
        $annonce7 ->category_id = "House";
        $annonce7 ->condition_id ="1";
        $annonce7 ->user_id = "33";
        $annonce7 -> save();

        $annonce8 = new Post();
        $annonce8 ->title = "Table";
        $annonce8 ->price = 150;
        $annonce8 ->description = "table de salon pour 6 personnes. Dimensions 180 x 80 cm. Très peu servie. Vend pour cause de déménagement";
        $annonce8 ->location = "Toulouse";
        $annonce8 ->image1 = "images/table.jpg";
        $annonce8 ->category_id = "House";
        $annonce8 ->condition_id ="2";
        $annonce8 ->user_id = "33";
        $annonce8 -> save();

        $annonce9 = new Post();
        $annonce9 ->title = "Trotinette";
        $annonce9 ->price = 15;
        $annonce9 ->description = "pour enfant. Idéal cadeau pour Noël. Paiement en espèce SVP";
        $annonce9 ->location = "Caen";
        $annonce9 ->image1 = "images/trotinette.jpg";
        $annonce9 ->category_id = "Hobbies";
        $annonce9 ->condition_id ="0";
        $annonce9 ->user_id = "33";
        $annonce9 -> save();

        $annonce10 = new Post();
        $annonce10 ->title = "Velo";
        $annonce10 ->price = 135;
        $annonce10 ->description = "Vélo pour homme. 9 vitesses. Couleur rouge. Cadre Alu. Avec pédaliers";
        $annonce10 ->location = "Caen";
        $annonce10 ->image1 = "images/velo.jpg";
        $annonce10 ->category_id = "Hobbies";
        $annonce10 ->condition_id ="0";
        $annonce10 ->user_id = "33";
        $annonce10 -> save();

        $annonce11 = new Post();
        $annonce11 ->title = "Voiture";
        $annonce11 ->price = 14500;
        $annonce11 ->description = "Vends voiture de marque Citröen. Couleur bleu métallisé. 85000 km. 6CV. BVA. BEG. Révision OK. Libre de suite";
        $annonce11 ->location = "Marseille";
        $annonce11 ->image1 = "images/voiture_1.jpg";
        $annonce11 ->category_id = "Vehicles";
        $annonce11 ->condition_id ="1";
        $annonce11 ->user_id = "33";
        $annonce11 -> save();

        $annonce12 = new Post();
        $annonce12 ->title = "Cuisiner";
        $annonce12 ->price = 50;
        $annonce12 ->description = "Donne cours de cuisine, de type asiatique. Me déplace. Possibilité de cours individuel ou en groupe. Ingrédients inclus dans le prix. Y'a plus qu'à passer ensuite à table § Forfait 3h.";
        $annonce12 ->location = "Toulouse";
        $annonce12 ->image1 = "images/cuisine.jpg";
        $annonce12 ->category_id = "Services";
        $annonce12 ->condition_id ="2";
        $annonce12 ->user_id = "33";
        $annonce12 -> save();
    }
}
