<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
        [
            'azienda' => 'Trenitalia',
            'stazione_di_partenza' => 'Roma Termini',
            'stazione_di_arrivo' => 'Milano Centrale',
            'orario_di_partenza' => '08:00:00',
            'orario_di_arrivo' => '12:00:00',
            'codice_treno' => 'AV950',
            'numero_carrozze' => 12,
            'in_orario' => true,
            'cancellato' => false
        ],
        [
            'azienda' => 'Trenitalia',
            'stazione_di_partenza' => 'Roma Termini',
            'stazione_di_arrivo' => 'Milano Centrale',
            'orario_di_partenza' => '08:00:00',
            'orario_di_arrivo' => '12:00:00',
            'codice_treno' => 'AV950',
            'numero_carrozze' => 12,
            'in_orario' => true,
            'cancellato' => false
        ],
    ];

    foreach($trains as $train){
        $new_train = new Train();
        $new_train->azienda = $train['azienda'];
        $new_train->stazione_di_partenza = $train['stazione_di_partenza'];
        $new_train->stazione_di_arrivo = $train['stazione_di_arrivo'];
        $new_train->orario_di_partenza = $train['orario_di_partenza'];
        $new_train->orario_di_arrivo = $train['orario_di_arrivo'];
        $new_train->codice_treno = $train['codice_treno'];
        $new_train->numero_carrozze = $train['numero_carrozze'];
        $new_train->in_orario = $train['in_orario'];
        $new_train->cancellato = $train['cancellato'];
        $new_train->save();
    };
    }
}
