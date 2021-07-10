<?php

use Illuminate\Database\Seeder;
use App\Sponsorship;

class SponsorshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sponsorships = [
            [
                'name' => 'base',
                'price' => 2.99,
                'duration' => 24
            ],

            [
                'name' => 'medium',
                'price' => 5.99,
                'duration' => 72
            ],

            [
                'name' => 'premium',
                'price' => 9.99,
                'duration' => 144
            ],
        ];

        foreach($sponsorships as $sponsorship) {
            $newSponsorship = new Sponsorship();
            $newSponsorship->name = $sponsorship['name'];
            $newSponsorship->price = $sponsorship['price'];
            $newSponsorship->duration = $sponsorship['duration'];
            $newSponsorship->save();
        }
    }
}
