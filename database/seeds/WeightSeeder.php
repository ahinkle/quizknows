<?php

use Illuminate\Database\Seeder;

class WeightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $weights = [
            [
                'answer_id' => 1, // Dine-In
                '1' => 25,
                '2' => 100,
                '3' => 100,
                '4' => 25,
                '5' => 85,
                '6' => 85,
                '7' => 25,
                '8' => 100,
                '9' => 75,
                '10' => 75,
                '11' => 100,
                '12' => 85,
                '13' => 100,
                '14' => 85,
                '15' => 85,
                '16' => 100,
                '17' => 25,
                '18' => 100,
                '19' => 75,
                '20' => 25,
                '21' => 85,
                '22' => 50,
                '23' => 50,
                '24' => 25,
                '25' => 85,
            ],
            [
                'answer_id' => 2, // Carry-Out
                '1' => 75,
                '2' => 0,
                '3' => 0,
                '4' => 75,
                '5' => 15,
                '6' => 15,
                '7' => 75,
                '8' => 0,
                '9' => 15,
                '10' => 15,
                '11' => 0,
                '12' => 15,
                '13' => 0,
                '14' => 15,
                '15' => 15,
                '16' => 0,
                '17' => 75,
                '18' => 0,
                '19' => 25,
                '20' => 75,
                '21' => 15,
                '22' => 50,
                '23' => 50,
                '24' => 75,
                '25' => 15,
            ],
            [
                'answer_id' => 3, // Salad
                '1' => 30, // Azzip Pizza
                '2' => 45, // Cavanaughs
                '3' => 0, // Bru Burger Bar
                '4' => 15, // Chick-fil-a
                '5' => 100, // Olive Garden
                '6' => 0, // Zuki Japanese Grill
                '7' => 50, // McAllister' s Deli
                '8' => 0, // Bonefish Grill
                '9' => 0, // Mission BBQ
                '10' => 50, // Zesto On Franklin
                '11' => 40, // The Log Inn
                '12' => 25, // Texas Roadhouse
                '13' => 85, // Sauced
                '14' => 50, // Chili's Bar and Grill
                '15' => 0, // La Campirana
                '16' => 50, // COMFORT by the Cross-Eyed Cricket
                '17' => 0, // Deerhead Pizza
                '18' => 0, // Bar Louie
                '19' => 30, // Pangea Kitchen
                '20' => 30, // Kanpai
                '21' => 85, // Angelo's
                '22' => 0, // Hot Head Burritos
                '23' => 0, // Lic's Deli & Ice Cream
                '24' => 0, // Five Guys
                '25' => 25, // O'Charley’s Restaurant & Bar
            ],
            [
                'answer_id' => 4, // Fries
                '1' => 0, // Azzip Pizza
                '2' => 0, // Cavanaughs
                '3' => 90, // Bru Burger Bar
                '4' => 100, // Chick-fil-a
                '5' => 0, // Olive Garden
                '6' => 0, // Zuki Japanese Grill
                '7' => 25, // McAllister' s Deli
                '8' => 30, // Bonefish Grill
                '9' => 75, // Mission BBQ
                '10' => 50, // Zesto On Franklin
                '11' => 40, // The Log Inn
                '12' => 50, // Texas Roadhouse
                '13' => 0, // Sauced
                '14' => 80, // Chili's Bar and Grill
                '15' => 0, // La Campirana
                '16' => 30, // COMFORT by the Cross-Eyed Cricket
                '17' => 0, // Deerhead Pizza
                '18' => 75, // Bar Louie
                '19' => 0, // Pangea Kitchen
                '20' => 0, // Kanpai
                '21' => 0, // Angelo's
                '22' => 0, // Hot Head Burritos
                '23' => 0, // Lic's Deli & Ice Cream
                '24' => 100, // Five Guys
                '25' => 50, // O'Charley’s Restaurant & Bar
            ],
            [
                'answer_id' => 5, // Yes (Fries, Salad)
                '1' => 30, // Azzip Pizza
                '2' => 30, // Cavanaughs
                '3' => 100, // Bru Burger Bar
                '4' => 50, // Chick-fil-a
                '5' => 25, // Olive Garden
                '6' => 0, // Zuki Japanese Grill
                '7' => 15, // McAllister' s Deli
                '8' => 75, // Bonefish Grill
                '9' => 40, // Mission BBQ
                '10' => 60, // Zesto On Franklin
                '11' => 50, // The Log Inn
                '12' => 75, // Texas Roadhouse
                '13' => 30, // Sauced
                '14' => 75, // Chili's Bar and Grill
                '15' => 0, // La Campirana
                '16' => 50, // COMFORT by the Cross-Eyed Cricket
                '17' => 0, // Deerhead Pizza
                '18' => 30, // Bar Louie
                '19' => 0, // Pangea Kitchen
                '20' => 0, // Kanpai
                '21' => 0, // Angelo's
                '22' => 0, // Hot Head Burritos
                '23' => 0, // Lic's Deli & Ice Cream
                '24' => 30, // Five Guys
                '25' => 75, // O'Charley’s Restaurant & Bar
            ],
            [
                'answer_id' => 6, // No, Thanks (Fries, Salad)
                '1' => 70, // Azzip Pizza
                '2' => 50, // Cavanaughs
                '3' => 0, // Bru Burger Bar
                '4' => 10, // Chick-fil-a
                '5' => 10, // Olive Garden
                '6' => 100, // Zuki Japanese Grill
                '7' => 70, // McAllister' s Deli
                '8' => 25, // Bonefish Grill
                '9' => 25, // Mission BBQ
                '10' => 25, // Zesto On Franklin
                '11' => 50, // The Log Inn
                '12' => 20, // Texas Roadhouse
                '13' => 75, // Sauced
                '14' => 15, // Chili's Bar and Grill
                '15' => 100, // La Campirana
                '16' => 50, // COMFORT by the Cross-Eyed Cricket
                '17' => 100, // Deerhead Pizza
                '18' => 80, // Bar Louie
                '19' => 100, // Pangea Kitchen
                '20' => 100, // Kanpai
                '21' => 100, // Angelo's
                '22' => 100, // Hot Head Burritos
                '23' => 100, // Lic's Deli & Ice Cream
                '24' => 10, // Five Guys
                '25' => 10, // O'Charley’s Restaurant & Bar
            ],
            [
                'answer_id' => 7, // Fishing Net
                '1' => 10, // Azzip Pizza
                '2' => 5, // Cavanaughs
                '3' => 0, // Bru Burger Bar
                '4' => 0, // Chick-fil-a
                '5' => 20, // Olive Garden
                '6' => 60, // Zuki Japanese Grill
                '7' => 15, // McAllister' s Deli
                '8' => 100, // Bonefish Grill
                '9' => 0, // Mission BBQ
                '10' => 10, // Zesto On Franklin
                '11' => 40, // The Log Inn
                '12' => 30, // Texas Roadhouse
                '13' => 0, // Sauced
                '14' => 30, // Chili's Bar and Grill
                '15' => 15, // La Campirana
                '16' => 40, // COMFORT by the Cross-Eyed Cricket
                '17' => 15, // Deerhead Pizza
                '18' => 0, // Bar Louie
                '19' => 75, // Pangea Kitchen
                '20' => 75, // Kanpai
                '21' => 0, // Angelo's
                '22' => 0, // Hot Head Burritos
                '23' => 0, // Lic's Deli & Ice Cream
                '24' => 0, // Five Guys
                '25' => 30, // O'Charley’s Restaurant & Bar
            ],
            [
                'answer_id' => 8, // Giant Box of matches
                '1' => 75, // Azzip Pizza
                '2' => 80, // Cavanaughs
                '3' => 75, // Bru Burger Bar
                '4' => 75, // Chick-fil-a
                '5' => 10, // Olive Garden
                '6' => 40, // Zuki Japanese Grill
                '7' => 10, // McAllister' s Deli
                '8' => 60, // Bonefish Grill
                '9' => 75, // Mission BBQ
                '10' => 0, // Zesto On Franklin
                '11' => 30, // The Log Inn
                '12' => 60, // Texas Roadhouse
                '13' => 10, // Sauced
                '14' => 85, // Chili's Bar and Grill
                '15' => 30, // La Campirana
                '16' => 25, // COMFORT by the Cross-Eyed Cricket
                '17' => 75, // Deerhead Pizza
                '18' => 30, // Bar Louie
                '19' => 25, // Pangea Kitchen
                '20' => 20, // Kanpai
                '21' => 10, // Angelo's
                '22' => 70, // Hot Head Burritos
                '23' => 0, // Lic's Deli & Ice Cream
                '24' => 85, // Five Guys
                '25' => 85, // O'Charley’s Restaurant & Bar
            ],
            [
                'answer_id' => 9, // Beer
                '1' => 20, // Azzip Pizza
                '2' => 25, // Cavanaughs
                '3' => 50, // Bru Burger Bar
                '4' => 0, // Chick-fil-a
                '5' => 15, // Olive Garden
                '6' => 20, // Zuki Japanese Grill
                '7' => 0, // McAllister' s Deli
                '8' => 25, // Bonefish Grill
                '9' => 0, // Mission BBQ
                '10' => 10, // Zesto On Franklin
                '11' => 10, // The Log Inn
                '12' => 30, // Texas Roadhouse
                '13' => 15, // Sauced
                '14' => 50, // Chili's Bar and Grill
                '15' => 20, // La Campirana
                '16' => 15, // COMFORT by the Cross-Eyed Cricket
                '17' => 10, // Deerhead Pizza
                '18' => 90, // Bar Louie
                '19' => 0, // Pangea Kitchen
                '20' => 0, // Kanpai
                '21' => 15, // Angelo's
                '22' => 0, // Hot Head Burritos
                '23' => 0, // Lic's Deli & Ice Cream
                '24' => 0, // Five Guys
                '25' => 30, // O'Charley’s Restaurant & Bar
            ],
            [
                'answer_id' => 10, // Ice Cream
                '1' => 0, // Azzip Pizza
                '2' => 10, // Cavanaughs
                '3' => 0, // Bru Burger Bar
                '4' => 5, // Chick-fil-a
                '5' => 10, // Olive Garden
                '6' => 5, // Zuki Japanese Grill
                '7' => 10, // McAllister' s Deli
                '8' => 10, // Bonefish Grill
                '9' => 0, // Mission BBQ
                '10' => 90, // Zesto On Franklin
                '11' => 10, // The Log Inn
                '12' => 10, // Texas Roadhouse
                '13' => 0, // Sauced
                '14' => 10, // Chili's Bar and Grill
                '15' => 10, // La Campirana
                '16' => 10, // COMFORT by the Cross-Eyed Cricket
                '17' => 0, // Deerhead Pizza
                '18' => 0, // Bar Louie
                '19' => 40, // Pangea Kitchen
                '20' => 10, // Kanpai
                '21' => 10, // Angelo's
                '22' => 0, // Hot Head Burritos
                '23' => 100, // Lic's Deli & Ice Cream
                '24' => 0, // Five Guys
                '25' => 30, // O'Charley’s Restaurant & Bar
            ],
            [
                'answer_id' => 10, // Ice Cream
                '1' => 0, // Azzip Pizza
                '2' => 10, // Cavanaughs
                '3' => 0, // Bru Burger Bar
                '4' => 5, // Chick-fil-a
                '5' => 10, // Olive Garden
                '6' => 5, // Zuki Japanese Grill
                '7' => 10, // McAllister' s Deli
                '8' => 10, // Bonefish Grill
                '9' => 0, // Mission BBQ
                '10' => 90, // Zesto On Franklin
                '11' => 10, // The Log Inn
                '12' => 10, // Texas Roadhouse
                '13' => 0, // Sauced
                '14' => 10, // Chili's Bar and Grill
                '15' => 10, // La Campirana
                '16' => 10, // COMFORT by the Cross-Eyed Cricket
                '17' => 0, // Deerhead Pizza
                '18' => 0, // Bar Louie
                '19' => 40, // Pangea Kitchen
                '20' => 10, // Kanpai
                '21' => 10, // Angelo's
                '22' => 0, // Hot Head Burritos
                '23' => 100, // Lic's Deli & Ice Cream
                '24' => 0, // Five Guys
                '25' => 30, // O'Charley’s Restaurant & Bar
            ],


        ];

        /**
        1	Azzip Pizza	5225 Pearl Dr	Evansville	IN	47712	0	2018-08-16 16:14:23	2018-08-16 16:14:23
        2	Cavanaughs	421 NW Riverside Dr	Evansville	IN	47708	0	2018-08-16 16:14:23	2018-08-16 16:14:23
        3	Bru Burger Bar	222 Sycamore St	Evansville	IN	47708	0	2018-08-16 16:14:23	2018-08-16 16:14:23
        4	Chick-fil-A	7101 E Indiana St	Evansville	IN	47715	0	2018-08-16 16:14:23	2018-08-16 16:14:23
        5	Olive Garden	1100 N Green River Rd	Evansville	IN	47715	0	2018-08-16 16:14:23	2018-08-16 16:14:23
        6	Zuki Japanese Grill	1448 N Green River Rd	Evansville	IN	47715	0	2018-08-16 16:14:23	2018-08-16 16:14:23
        7	McAllister' s Deli	2220 N Green River Rd	Evansville	IN	47715	0	2018-08-16 16:14:23	2018-08-16 16:14:23
        8	Bonefish Grill	6401 E Lloyd Expy	Evansville	IN	47715	0	2018-08-16 16:14:23	2018-08-16 16:14:23
        9	Mission BBQ	1530 N Green River Rd	Evansville	IN	47715	0	2018-08-16 16:14:23	2018-08-16 16:14:23
        10	Zesto On Franklin	102 W Franklin St	Evansville	IN	47710	0	2018-08-16 16:14:23	2018-08-16 16:14:23
        11	The Log Inn	R. R. 2	Evansville	IN	47639	0	2018-08-16 16:14:23	2018-08-16 16:14:23
        12	Texas Roadhouse	7900 Eagle Crest Blvd	Evansville	IN	47715	0	2018-08-16 16:14:23	2018-08-16 16:14:23
        13	Sauced	1113 Parrett St	Evansville	IN	47713	0	2018-08-16 16:14:23	2018-08-16 16:14:23
        14	Chili's Bar and Grill	600 N Green River Rd	Evansville	IN	47715	0	2018-08-16 16:14:23	2018-08-16 16:14:23
        15	La Campirana	724 N Burkhardt Rd	Evansville	IN	47715	0	2018-08-16 16:14:23	2018-08-16 16:14:23
        16	COMFORT by the Cross-Eyed Cricket	230 Main St	Evansville	IN	47708	0	2018-08-16 16:14:23	2018-08-16 16:14:23
        17	Deerhead Pizza	5048, 222 E Columbia St,	Evansville	IN	47711	0	2018-08-16 16:14:23	2018-08-16 16:14:23
        18	Bar Louie	7700 Eagle Crest Blvd	Evansville	IN	47715	0	2018-08-16 16:14:23	2018-08-16 16:14:23
        19	Pangea Kitchen	111 S Green River Rd	Evansville	IN	47715	0	2018-08-16 16:14:23	2018-08-16 16:14:23
        20	Kanpai	4593 Washington Ave,	Evansville	IN	47714	0	2018-08-16 16:14:23	2018-08-16 16:14:23
        21	Angelo's	305 Main St	Evansville	IN	47708	0	2018-08-16 16:14:23	2018-08-16 16:14:23
        22	Hot Head Burritos	5625 Pearl Dr	Evansville	IN	47712	0	2018-08-16 16:14:23	2018-08-16 16:14:23
        23	Lic's Deli & Ice Cream	11 NW 5th St	Evansville	IN	47708	0	2018-08-16 16:14:23	2018-08-16 16:14:23
        24	Five Guys	5402 E Indiana St	Evansville	IN	47715	0	2018-08-16 16:14:23	2018-08-16 16:14:23
        25	O'Charley’s Restaurant & Bar 	7301 E Indiana St	Evansville	IN	47715	0	2018-08-16 16:14:23	2018-08-16 16:14:23

        1	1	Dine-In	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        2	1	Carry-Out	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        3	2	Salad	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        4	2	Fries	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        5	2	Yes	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        6	2	No, Thanks	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        7	3	Fishing Net	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        8	3	Giant box of matches	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        9	3	Cold Beer	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        10	3	Ice Cream	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        11	4	Money is no object.	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        12	4	I almost chose McDonalds, so close to nothing.	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        13	4	It depends on what I order. I might spend $10, I might spend $20	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        14	4	I'm only concerned about the food, so no more than $10.	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        15	5	Maybe some lean proteins but nothing heavy.	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        16	5	I'm feeling steak or BBQ.	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        17	5	No way. Animals in my plate? Thanks but no thanks.	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        18	5	Yes, even better if they're in a taco or bowl of noodles.	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        19	6	Something Casual	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        20	6	Date Night	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        21	6	Bro-ing Out.	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        22	6	Special Occasion	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        23	7	Newborn (Mild)	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        24	7	Toddler (Medium)	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        25	7	Adult (Hot)	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        26	7	Independent Woman who don't need no man (Open Flame)	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        27	8	Yes, please	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        28	8	Hard Liquor	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        29	8	Water only	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        30	8	Fruity Drinks!	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        31	9	N2	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        32	9	CO2	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        33	9	NaCL	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        34	9	H2O	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        35	10	My living room	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        36	10	Outdoor seating	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        37	10	The kind I can breathe	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
        38	10	Dimly-lit Dungeons	[]	2018-08-16 17:04:22	2018-08-16 17:04:22
         */
    }
}
