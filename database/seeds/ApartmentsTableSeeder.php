<?php

use Illuminate\Database\Seeder;
use Illuminate\SUpport\Str;
use App\Apartment;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $apartments = [
            [
                'title'=> 'ciccia e brufoli',
                'user_id'=> '1',
                'description'=> 'bella la ciccia',
                'rooms'=> '3',
                'beds'=> '2',
                'baths'=> '1',
                'square_meters'=> '90',
                'price'=> '400',
                'address'=> 'Via matteotti milano',
                'latitude'=> '45.56709',
                'longitude'=> '9.40567',
                'cover'=>'null'
            ],

            [
                'title'=> 'appartamento suite gold',
                'user_id'=> '1',
                'description'=> 'stupendo',
                'rooms'=> '10',
                'beds'=> '20',
                'baths'=> '50',
                'square_meters'=> '2000',
                'price'=> '10000',
                'address'=> 'Via matteotti milano',
                'latitude'=> '45.56709',
                'longitude'=> '9.40567',
                'cover'=>'null'
            ]

        ];

        foreach ($apartments as $apartment) {
        $newApartment = new Apartment();
        $newApartment->user_id = $apartment['user_id'];
        $newApartment->title = $apartment['title'];
        $newApartment->description = $apartment['description'];
        $newApartment->rooms = $apartment['rooms'];
        $newApartment->beds = $apartment['beds'];
        $newApartment->baths = $apartment['baths'];
        $newApartment->square_meters = $apartment['square_meters'];
        $newApartment->price = $apartment['price'];
        $newApartment->address = $apartment['address'];
        $newApartment->latitude = $apartment['latitude'];
        $newApartment->longitude = $apartment['longitude'];
        $newApartment->cover = $apartment['cover'];
        $newApartment->slug = Str::slug($newApartment->title, '-');
        $newApartment->save();
        }    
    }
}
