<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $Aziende=[
            'Italo',
            'Trenitalia',
            'Trenord',
            'NEOS',
            'Thello',
            'FrecciaRossa',
            'SNCF',
            'FlixTrain',
            'StanSted',
            'Bernina Express'
        ];
        for($i=0;$i<=20;$i++){
            $newTrain= new train();
            $newTrain->Azienda =$Aziende[rand(0,9)];
            $newTrain->Stazione_di_partenza =$faker->city();
            $newTrain->Stazione_di_arrivo =$faker->city();
            $newTrain->Orario_di_partenza =$faker->dateTimeInInterval('+1 day', '+3 weeks');
            $newTrain->Orario_di_arrivo =$faker->dateTimeInInterval('+1 day', '+3 weeks');
            $newTrain->Numero_carrozze =$faker->numberBetween(1,20);
            $newTrain->In_orario=$faker->boolean();
            $newTrain->Cancellato=$faker->boolean();
            $newTrain->save();
        }
    }
}
