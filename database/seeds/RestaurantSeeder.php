<?php

use Illuminate\Database\Seeder;
use App\Restaurant;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restaurant::truncate();

        $restraunts = [
            [
                'name' => 'Azzip Pizza',
                'address' => '5225 Pearl Dr',
                'city' => 'Evansville',
                'state' => 'IN',
                'zipcode' => '47712',
            ],
            [
                'name' => 'Cavanaughs',
                'address' => '421 NW Riverside Dr',
                'city' => 'Evansville',
                'state' => 'IN',
                'zipcode' => '47708',
            ],
            [
                'name' => 'Bru Burger Bar',
                'address' => '222 Sycamore St',
                'city' => 'Evansville',
                'state' => 'IN',
                'zipcode' => '47708',
            ],
            [
                'name' => 'Chick-fil-A',
                'address' => '7101 E Indiana St',
                'city' => 'Evansville',
                'state' => 'IN',
                'zipcode' => '47715',
            ],
            [
                'name' => 'Olive Garden',
                'address' => '1100 N Green River Rd',
                'city' => 'Evansville',
                'state' => 'IN',
                'zipcode' => '47715',
            ],
            [
                'name' => 'Zuki Japanese Grill',
                'address' => '1448 N Green River Rd',
                'city' => 'Evansville',
                'state' => 'IN',
                'zipcode' => '47715',
            ],
            [
                'name' => 'McAllister\' s Deli',
                'address' => '2220 N Green River Rd',
                'city' => 'Evansville',
                'state' => 'IN',
                'zipcode' => '47715',
            ],
            [
                'name' => 'Bonefish Grill',
                'address' => '6401 E Lloyd Expy',
                'city' => 'Evansville',
                'state' => 'IN',
                'zipcode' => '47715',
            ],
            [
                'name' => 'Mission BBQ',
                'address' => '1530 N Green River Rd',
                'city' => 'Evansville',
                'state' => 'IN',
                'zipcode' => '47715',
            ],
            [
                'name' => 'Zesto On Franklin',
                'address' => '102 W Franklin St',
                'city' => 'Evansville',
                'state' => 'IN',
                'zipcode' => '47710',
            ],
            [
                'name' => 'The Log Inn',
                'address' => 'R. R. 2',
                'city' => 'Evansville',
                'state' => 'IN',
                'zipcode' => '47639',
            ],
            [
                'name' => 'Texas Roadhouse',
                'address' => '7900 Eagle Crest Blvd',
                'city' => 'Evansville',
                'state' => 'IN',
                'zipcode' => '47715',
            ],
            [
                'name' => 'Sauced',
                'address' => '1113 Parrett St',
                'city' => 'Evansville',
                'state' => 'IN',
                'zipcode' => '47713',
            ],
            [
                'name' => 'Chili\'s Bar and Grill',
                'address' => '600 N Green River Rd',
                'city' => 'Evansville',
                'state' => 'IN',
                'zipcode' => '47715',
            ],
        ];

        foreach ($restraunts as $restraunt) {
            Restaurant::create([
                'name' => $restraunt['name'],
                'address' => $restraunt['address'],
                'city' => $restraunt['city'],
                'state' => $restraunt['state'],
                'zipcode' => $restraunt['zipcode'],
            ]);
        }
    }
}
