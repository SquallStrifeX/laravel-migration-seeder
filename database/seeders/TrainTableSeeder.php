<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {


    for($i=0; $i<100; $i++){
        $new_train = new Train();
        $new_train->azienda = $faker->words(2, true);
        $new_train->stazione_di_partenza =  $faker->words(5, true);
        $new_train->stazione_di_arrivo = $faker->words(5, true);
        $new_train->orario_di_partenza =  $faker->date();
        $new_train->orario_di_arrivo =  $faker->date();
        $new_train->codice_treno = $faker->numberBetween(10000, 99999);
        $new_train->numero_carrozze = $faker->numberBetween(5, 20);
        $new_train->in_orario = $faker->boolean();
        $new_train->cancellato = $faker->boolean();
        $new_train->save();
    };
    }
}
