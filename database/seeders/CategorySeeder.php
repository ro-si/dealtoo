<?php
// database/seeders/CategorySeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category; // Assurez-vous que ce namespace est correct

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Auto et Moto']);
        Category::create(['name' => 'Téléphone Mobile']);
        Category::create(['name' => 'Hi-Tech']);
        Category::create(['name' => 'Meubles et Electroménagers']);
        Category::create(['name' => 'Immobilier']);
        Category::create(['name' => 'Animaux']);
        Category::create(['name' => 'Mode']);
        Category::create(['name' => 'Beauté et Bien Etre']);
        Category::create(['name' => 'Services']);
        Category::create(['name' => 'Apprentissages']);
        Category::create(['name' => 'Evènements']);
    }
}
