<?php

use Illuminate\Database\Seeder;
use App\Extra;

class ExtrasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $extras = [
            'wi-fi',
            'posto macchina',
            'piscina',
            'portineria',
            'sauna',
            'vista mare',
            'aria condizionata',
            'riscaldamento',
            'tv', 
            'lavatrice',
            'lavastoviglie',
            'asciugacapelli',
            'animali domestici ammessi'
        ];

        foreach($extras as $extra_name) {
            $newExtra = new Extra();
            $newExtra->name = $extra_name;
            $newExtra->save();
        }
    }
}
