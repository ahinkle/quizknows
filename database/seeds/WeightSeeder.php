<?php

use App\Answer;
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
            // Q: Dine-in or Carry-out
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

            // Q: Fries or Salad?
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

            // Q: Stranded on an Island, pick one
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

            // Q: How much are you willing to spend
            [
                'answer_id' => 11, // Money is no object
                '1' => 5, // Azzip Pizza
                '2' => 100, // Cavanaughs
                '3' => 50, // Bru Burger Bar
                '4' => 5, // Chick-fil-a
                '5' => 25, // Olive Garden
                '6' => 25, // Zuki Japanese Grill
                '7' => 15, // McAllister' s Deli
                '8' => 100, // Bonefish Grill
                '9' => 40, // Mission BBQ
                '10' => 5, // Zesto On Franklin
                '11' => 20, // The Log Inn
                '12' => 20, // Texas Roadhouse
                '13' => 70, // Sauced
                '14' => 20, // Chili's Bar and Grill
                '15' => 10, // La Campirana
                '16' => 40, // COMFORT by the Cross-Eyed Cricket
                '17' => 10, // Deerhead Pizza
                '18' => 55, // Bar Louie
                '19' => 40, // Pangea Kitchen
                '20' => 10, // Kanpai
                '21' => 20, // Angelo's
                '22' => 5, // Hot Head Burritos
                '23' => 10, // Lic's Deli & Ice Cream
                '24' => 15, // Five Guys
                '25' => 10, // O'Charley’s Restaurant & Bar
            ],
            [
                'answer_id' => 12, // I almost chose McDonalds
                '1' => 25, // Azzip Pizza
                '2' => 0, // Cavanaughs
                '3' => 5, // Bru Burger Bar
                '4' => 100, // Chick-fil-a
                '5' => 10, // Olive Garden
                '6' => 5, // Zuki Japanese Grill
                '7' => 15, // McAllister' s Deli
                '8' => 0, // Bonefish Grill
                '9' => 15, // Mission BBQ
                '10' => 75, // Zesto On Franklin
                '11' => 10, // The Log Inn
                '12' => 5, // Texas Roadhouse
                '13' => 0, // Sauced
                '14' => 25, // Chili's Bar and Grill
                '15' => 20, // La Campirana
                '16' => 5, // COMFORT by the Cross-Eyed Cricket
                '17' => 20, // Deerhead Pizza
                '18' => 5, // Bar Louie
                '19' => 5, // Pangea Kitchen
                '20' => 15, // Kanpai
                '21' => 20, // Angelo's
                '22' => 15, // Hot Head Burritos
                '23' => 15, // Lic's Deli & Ice Cream
                '24' => 10, // Five Guys
                '25' => 10, // O'Charley’s Restaurant & Bar
            ],
            [
                'answer_id' => 13, // I might spend $10 or $20
                '1' => 80, // Azzip Pizza
                '2' => 0, // Cavanaughs
                '3' => 20, // Bru Burger Bar
                '4' => 20, // Chick-fil-a
                '5' => 70, // Olive Garden
                '6' => 70, // Zuki Japanese Grill
                '7' => 50, // McAllister' s Deli
                '8' => 0, // Bonefish Grill
                '9' => 50, // Mission BBQ
                '10' => 30, // Zesto On Franklin
                '11' => 30, // The Log Inn
                '12' => 45, // Texas Roadhouse
                '13' => 0, // Sauced
                '14' => 90, // Chili's Bar and Grill
                '15' => 70, // La Campirana
                '16' => 20, // COMFORT by the Cross-Eyed Cricket
                '17' => 20, // Deerhead Pizza
                '18' => 15, // Bar Louie
                '19' => 50, // Pangea Kitchen
                '20' => 50, // Kanpai
                '21' => 30, // Angelo's
                '22' => 60, // Hot Head Burritos
                '23' => 20, // Lic's Deli & Ice Cream
                '24' => 50, // Five Guys
                '25' => 40, // O'Charley’s Restaurant & Bar
            ],
            [
                'answer_id' => 14, // No more than $10
                '1' => 60, // Azzip Pizza
                '2' => 0, // Cavanaughs
                '3' => 5, // Bru Burger Bar
                '4' => 70, // Chick-fil-a
                '5' => 5, // Olive Garden
                '6' => 5, // Zuki Japanese Grill
                '7' => 35, // McAllister' s Deli
                '8' => 0, // Bonefish Grill
                '9' => 10, // Mission BBQ
                '10' => 65, // Zesto On Franklin
                '11' => 5, // The Log Inn
                '12' => 5, // Texas Roadhouse
                '13' => 0, // Sauced
                '14' => 10, // Chili's Bar and Grill
                '15' => 10, // La Campirana
                '16' => 0, // COMFORT by the Cross-Eyed Cricket
                '17' => 65, // Deerhead Pizza
                '18' => 0, // Bar Louie
                '19' => 5, // Pangea Kitchen
                '20' => 20, // Kanpai
                '21' => 25, // Angelo's
                '22' => 50, // Hot Head Burritos
                '23' => 40, // Lic's Deli & Ice Cream
                '24' => 20, // Five Guys
                '25' => 10, // O'Charley’s Restaurant & Bar
            ],

            // Q: How much Meat
            [
                'answer_id' => 15, // Lean Proteins
                '1' => 5, // Azzip Pizza
                '2' => 0, // Cavanaughs
                '3' => 25, // Bru Burger Bar
                '4' => 10, // Chick-fil-a
                '5' => 0, // Olive Garden
                '6' => 25, // Zuki Japanese Grill
                '7' => 35, // McAllister' s Deli
                '8' => 20, // Bonefish Grill
                '9' => 10, // Mission BBQ
                '10' => 5, // Zesto On Franklin
                '11' => 5, // The Log Inn
                '12' => 15, // Texas Roadhouse
                '13' => 5, // Sauced
                '14' => 20, // Chili's Bar and Grill
                '15' => 20, // La Campirana
                '16' => 20, // COMFORT by the Cross-Eyed Cricket
                '17' => 5, // Deerhead Pizza
                '18' => 5, // Bar Louie
                '19' => 25, // Pangea Kitchen
                '20' => 25, // Kanpai
                '21' => 5, // Angelo's
                '22' => 10, // Hot Head Burritos
                '23' => 0, // Lic's Deli & Ice Cream
                '24' => 15, // Five Guys
                '25' => 5, // O'Charley’s Restaurant & Bar
            ],
            [
                'answer_id' => 16, // I'm feeling steak or BBQ
                '1' => 10, // Azzip Pizza
                '2' => 95, // Cavanaughs
                '3' => 15, // Bru Burger Bar
                '4' => 5, // Chick-fil-a
                '5' => 0, // Olive Garden
                '6' => 30, // Zuki Japanese Grill
                '7' => 0, // McAllister' s Deli
                '8' => 0, // Bonefish Grill
                '9' => 100, // Mission BBQ
                '10' => 5, // Zesto On Franklin
                '11' => 15, // The Log Inn
                '12' => 80, // Texas Roadhouse
                '13' => 10, // Sauced
                '14' => 75, // Chili's Bar and Grill
                '15' => 0, // La Campirana
                '16' => 20, // COMFORT by the Cross-Eyed Cricket
                '17' => 0, // Deerhead Pizza
                '18' => 5, // Bar Louie
                '19' => 10, // Pangea Kitchen
                '20' => 0, // Kanpai
                '21' => 0, // Angelo's
                '22' => 15, // Hot Head Burritos
                '23' => 0, // Lic's Deli & Ice Cream
                '24' => 10, // Five Guys
                '25' => 10, // O'Charley’s Restaurant & Bar
            ],
            [
                'answer_id' => 17, // No Animals
                '1' => 70, // Azzip Pizza
                '2' => 0, // Cavanaughs
                '3' => 0, // Bru Burger Bar
                '4' => 5, // Chick-fil-a
                '5' => 40, // Olive Garden
                '6' => 10, // Zuki Japanese Grill
                '7' => 35, // McAllister' s Deli
                '8' => 5, // Bonefish Grill
                '9' => 0, // Mission BBQ
                '10' => 25, // Zesto On Franklin
                '11' => 0, // The Log Inn
                '12' => 0, // Texas Roadhouse
                '13' => 20, // Sauced
                '14' => 15, // Chili's Bar and Grill
                '15' => 0, // La Campirana
                '16' => 10, // COMFORT by the Cross-Eyed Cricket
                '17' => 15, // Deerhead Pizza
                '18' => 0, // Bar Louie
                '19' => 20, // Pangea Kitchen
                '20' => 20, // Kanpai
                '21' => 15, // Angelo's
                '22' => 0, // Hot Head Burritos
                '23' => 70, // Lic's Deli & Ice Cream
                '24' => 0, // Five Guys
                '25' => 10, // O'Charley’s Restaurant & Bar
            ],
            [
                'answer_id' => 18, // Taco or Noodles
                '1' => 0, // Azzip Pizza
                '2' => 0, // Cavanaughs
                '3' => 0, // Bru Burger Bar
                '4' => 0, // Chick-fil-a
                '5' => 40, // Olive Garden
                '6' => 65, // Zuki Japanese Grill
                '7' => 0, // McAllister' s Deli
                '8' => 0, // Bonefish Grill
                '9' => 0, // Mission BBQ
                '10' => 15, // Zesto On Franklin
                '11' => 5, // The Log Inn
                '12' => 0, // Texas Roadhouse
                '13' => 90, // Sauced
                '14' => 10, // Chili's Bar and Grill
                '15' => 75, // La Campirana
                '16' => 15, // COMFORT by the Cross-Eyed Cricket
                '17' => 0, // Deerhead Pizza
                '18' => 0, // Bar Louie
                '19' => 25, // Pangea Kitchen
                '20' => 0, // Kanpai
                '21' => 75, // Angelo's
                '22' => 70, // Hot Head Burritos
                '23' => 0, // Lic's Deli & Ice Cream
                '24' => 0, // Five Guys
                '25' => 5, // O'Charley’s Restaurant & Bar
            ],

            // Q: What's the Occasion
            [
                'answer_id' => 19, // Something Casual
                '1' => 35, // Azzip Pizza
                '2' => 0, // Cavanaughs
                '3' => 10, // Bru Burger Bar
                '4' => 50, // Chick-fil-a
                '5' => 10, // Olive Garden
                '6' => 20, // Zuki Japanese Grill
                '7' => 25, // McAllister' s Deli
                '8' => 0, // Bonefish Grill
                '9' => 10, // Mission BBQ
                '10' => 20, // Zesto On Franklin
                '11' => 25, // The Log Inn
                '12' => 15, // Texas Roadhouse
                '13' => 0, // Sauced
                '14' => 35, // Chili's Bar and Grill
                '15' => 30, // La Campirana
                '16' => 5, // COMFORT by the Cross-Eyed Cricket
                '17' => 40, // Deerhead Pizza
                '18' => 0, // Bar Louie
                '19' => 20, // Pangea Kitchen
                '20' => 25, // Kanpai
                '21' => 35, // Angelo's
                '22' => 35, // Hot Head Burritos
                '23' => 50, // Lic's Deli & Ice Cream
                '24' => 35, // Five Guys
                '25' => 40, // O'Charley’s Restaurant & Bar
            ],
            [
                'answer_id' => 20, // Date Night
                '1' => 5, // Azzip Pizza
                '2' => 70, // Cavanaughs
                '3' => 70, // Bru Burger Bar
                '4' => 5, // Chick-fil-a
                '5' => 85, // Olive Garden
                '6' => 50, // Zuki Japanese Grill
                '7' => 10, // McAllister' s Deli
                '8' => 100, // Bonefish Grill
                '9' => 5, // Mission BBQ
                '10' => 20, // Zesto On Franklin
                '11' => 10, // The Log Inn
                '12' => 40, // Texas Roadhouse
                '13' => 90, // Sauced
                '14' => 10, // Chili's Bar and Grill
                '15' => 10, // La Campirana
                '16' => 30, // COMFORT by the Cross-Eyed Cricket
                '17' => 5, // Deerhead Pizza
                '18' => 65, // Bar Louie
                '19' => 10, // Pangea Kitchen
                '20' => 5, // Kanpai
                '21' => 10, // Angelo's
                '22' => 5, // Hot Head Burritos
                '23' => 30, // Lic's Deli & Ice Cream
                '24' => 5, // Five Guys
                '25' => 10, // O'Charley’s Restaurant & Bar
            ],
            [
                'answer_id' => 21, // Bro-ing Out
                '1' => 30, // Azzip Pizza
                '2' => 5, // Cavanaughs
                '3' => 40, // Bru Burger Bar
                '4' => 35, // Chick-fil-a
                '5' => 0, // Olive Garden
                '6' => 10, // Zuki Japanese Grill
                '7' => 15, // McAllister' s Deli
                '8' => 0, // Bonefish Grill
                '9' => 40, // Mission BBQ
                '10' => 15, // Zesto On Franklin
                '11' => 10, // The Log Inn
                '12' => 40, // Texas Roadhouse
                '13' => 0, // Sauced
                '14' => 25, // Chili's Bar and Grill
                '15' => 25, // La Campirana
                '16' => 0, // COMFORT by the Cross-Eyed Cricket
                '17' => 35, // Deerhead Pizza
                '18' => 90, // Bar Louie
                '19' => 10, // Pangea Kitchen
                '20' => 5, // Kanpai
                '21' => 5, // Angelo's
                '22' => 20, // Hot Head Burritos
                '23' => 20, // Lic's Deli & Ice Cream
                '24' => 50, // Five Guys
                '25' => 40, // O'Charley’s Restaurant & Bar
            ],
            [
                'answer_id' => 22, // Special Occasion
                '1' => 5, // Azzip Pizza
                '2' => 70, // Cavanaughs
                '3' => 40, // Bru Burger Bar
                '4' => 5, // Chick-fil-a
                '5' => 40, // Olive Garden
                '6' => 10, // Zuki Japanese Grill
                '7' => 15, // McAllister' s Deli
                '8' => 75, // Bonefish Grill
                '9' => 20, // Mission BBQ
                '10' => 15, // Zesto On Franklin
                '11' => 25, // The Log Inn
                '12' => 35, // Texas Roadhouse
                '13' => 45, // Sauced
                '14' => 25, // Chili's Bar and Grill
                '15' => 5, // La Campirana
                '16' => 75, // COMFORT by the Cross-Eyed Cricket
                '17' => 5, // Deerhead Pizza
                '18' => 10, // Bar Louie
                '19' => 10, // Pangea Kitchen
                '20' => 0, // Kanpai
                '21' => 5, // Angelo's
                '22' => 5, // Hot Head Burritos
                '23' => 25, // Lic's Deli & Ice Cream
                '24' => 20, // Five Guys
                '25' => 25 // O'Charley’s Restaurant & Bar
            ],

            // Q: How Spicy?
            [
                'answer_id' => 23, // Mild
                '1' => 65, // Azzip Pizza
                '2' => 30, // Cavanaughs
                '3' => 25, // Bru Burger Bar
                '4' => 50, // Chick-fil-a
                '5' => 50, // Olive Garden
                '6' => 10, // Zuki Japanese Grill
                '7' => 65, // McAllister' s Deli
                '8' => 45, // Bonefish Grill
                '9' => 25, // Mission BBQ
                '10' => 50, // Zesto On Franklin
                '11' => 40, // The Log Inn
                '12' => 30, // Texas Roadhouse
                '13' => 20, // Sauced
                '14' => 50, // Chili's Bar and Grill
                '15' => 20, // La Campirana
                '16' => 50, // COMFORT by the Cross-Eyed Cricket
                '17' => 45, // Deerhead Pizza
                '18' => 45, // Bar Louie
                '19' => 20, // Pangea Kitchen
                '20' => 20, // Kanpai
                '21' => 50, // Angelo's
                '22' => 10, // Hot Head Burritos
                '23' => 75, // Lic's Deli & Ice Cream
                '24' => 25, // Five Guys
                '25' => 30, // O'Charley's Restaurant & Bar
            ],
            [
                'answer_id' => 24, // Medium
                '1' => 50, // Azzip Pizza
                '2' => 20, // Cavanaughs
                '3' => 40, // Bru Burger Bar
                '4' => 40, // Chick-fil-a
                '5' => 40, // Olive Garden
                '6' => 20, // Zuki Japanese Grill
                '7' => 35, // McAllister' s Deli
                '8' => 35, // Bonefish Grill
                '9' => 40, // Mission BBQ
                '10' => 40, // Zesto On Franklin
                '11' => 30, // The Log Inn
                '12' => 20, // Texas Roadhouse
                '13' => 30, // Sauced
                '14' => 40, // Chili's Bar and Grill
                '15' => 35, // La Campirana
                '16' => 40, // COMFORT by the Cross-Eyed Cricket
                '17' => 35, // Deerhead Pizza
                '18' => 35, // Bar Louie
                '19' => 25, // Pangea Kitchen
                '20' => 25, // Kanpai
                '21' => 40, // Angelo's
                '22' => 20, // Hot Head Burritos
                '23' => 50, // Lic's Deli & Ice Cream
                '24' => 30, // Five Guys
                '25' => 20, // O'Charley's Restaurant & Bar
            ],
            [
                'answer_id' => 25, // Hot
                '1' => 10, // Azzip Pizza
                '2' => 10, // Cavanaughs
                '3' => 50, // Bru Burger Bar
                '4' => 5, // Chick-fil-a
                '5' => 5, // Olive Garden
                '6' => 30, // Zuki Japanese Grill
                '7' => 10, // McAllister' s Deli
                '8' => 15, // Bonefish Grill
                '9' => 50, // Mission BBQ
                '10' => 10, // Zesto On Franklin
                '11' => 10, // The Log Inn
                '12' => 10, // Texas Roadhouse
                '13' => 35, // Sauced
                '14' => 30, // Chili's Bar and Grill
                '15' => 55, // La Campirana
                '16' => 30, // COMFORT by the Cross-Eyed Cricket
                '17' => 15, // Deerhead Pizza
                '18' => 15, // Bar Louie
                '19' => 30, // Pangea Kitchen
                '20' => 30, // Kanpai
                '21' => 5, // Angelo's
                '22' => 40, // Hot Head Burritos
                '23' => 10, // Lic's Deli & Ice Cream
                '24' => 40, // Five Guys
                '25' => 10, // O'Charley's Restaurant & Bar
            ],
            [
                'answer_id' => 26, // Spicy
                '1' => 5, // Azzip Pizza
                '2' => 5, // Cavanaughs
                '3' => 30, // Bru Burger Bar
                '4' => 0, // Chick-fil-a
                '5' => 0, // Olive Garden
                '6' => 40, // Zuki Japanese Grill
                '7' => 5, // McAllister' s Deli
                '8' => 5, // Bonefish Grill
                '9' => 55, // Mission BBQ
                '10' => 5, // Zesto On Franklin
                '11' => 0, // The Log Inn
                '12' => 5, // Texas Roadhouse
                '13' => 15, // Sauced
                '14' => 25, // Chili's Bar and Grill
                '15' => 75, // La Campirana
                '16' => 20, // COMFORT by the Cross-Eyed Cricket
                '17' => 5, // Deerhead Pizza
                '18' => 5, // Bar Louie
                '19' => 40, // Pangea Kitchen
                '20' => 60, // Kanpai
                '21' => 0, // Angelo's
                '22' => 75, // Hot Head Burritos
                '23' => 0, // Lic's Deli & Ice Cream
                '24' => 10, // Five Guys
                '25' => 10, // O'Charley's Restaurant & Bar
            ],

            // Q: Alcohol?
            [
                'answer_id' => 27, // Yes, Please (Alcohol)
                '1' => 15, // Azzip Pizza
                '2' => 10, // Cavanaughs
                '3' => 30, // Bru Burger Bar
                '4' => 0, // Chick-fil-a
                '5' => 10, // Olive Garden
                '6' => 15, // Zuki Japanese Grill
                '7' => 0, // McAllister' s Deli
                '8' => 15, // Bonefish Grill
                '9' => 0, // Mission BBQ
                '10' => 0, // Zesto On Franklin
                '11' => 10, // The Log Inn
                '12' => 20, // Texas Roadhouse
                '13' => 15, // Sauced
                '14' => 25, // Chili's Bar and Grill
                '15' => 20, // La Campirana
                '16' => 10, // COMFORT by the Cross-Eyed Cricket
                '17' => 0, // Deerhead Pizza
                '18' => 70, // Bar Louie
                '19' => 50, // Pangea Kitchen
                '20' => 0, // Kanpai
                '21' => 20, // Angelo's
                '22' => 0, // Hot Head Burritos
                '23' => 0, // Lic's Deli & Ice Cream
                '24' => 0, // Five Guys
                '25' => 25, // O'Charley's Restaurant & Bar
            ],
            [
                'answer_id' => 28, // Hard Liquor(Alcohol)
                '1' => 0, // Azzip Pizza
                '2' => 30, // Cavanaughs
                '3' => 30, // Bru Burger Bar
                '4' => 0, // Chick-fil-a
                '5' => 0, // Olive Garden
                '6' => 5, // Zuki Japanese Grill
                '7' => 0, // McAllister' s Deli
                '8' => 15, // Bonefish Grill
                '9' => 0, // Mission BBQ
                '10' => 0, // Zesto On Franklin
                '11' => 0, // The Log Inn
                '12' => 10, // Texas Roadhouse
                '13' => 0, // Sauced
                '14' => 10, // Chili's Bar and Grill
                '15' => 0, // La Campirana
                '16' => 0, // COMFORT by the Cross-Eyed Cricket
                '17' => 0, // Deerhead Pizza
                '18' => 100, // Bar Louie
                '19' => 5, // Pangea Kitchen
                '20' => 0, // Kanpai
                '21' => 5, // Angelo's
                '22' => 0, // Hot Head Burritos
                '23' => 0, // Lic's Deli & Ice Cream
                '24' => 0, // Five Guys
                '25' => 5, // O'Charley's Restaurant & Bar
            ],
            [
                'answer_id' => 29, // Water Only
                '1' => 75, // Azzip Pizza
                '2' => 15, // Cavanaughs
                '3' => 30, // Bru Burger Bar
                '4' => 100, // Chick-fil-a
                '5' => 70, // Olive Garden
                '6' => 60, // Zuki Japanese Grill
                '7' => 75, // McAllister' s Deli
                '8' => 15, // Bonefish Grill
                '9' => 90, // Mission BBQ
                '10' => 60, // Zesto On Franklin
                '11' => 50, // The Log Inn
                '12' => 10, // Texas Roadhouse
                '13' => 60, // Sauced
                '14' => 10, // Chili's Bar and Grill
                '15' => 10, // La Campirana
                '16' => 50, // COMFORT by the Cross-Eyed Cricket
                '17' => 75, // Deerhead Pizza
                '18' => 0, // Bar Louie
                '19' => 30, // Pangea Kitchen
                '20' => 70, // Kanpai
                '21' => 5, // Angelo's
                '22' => 40, // Hot Head Burritos
                '23' => 75, // Lic's Deli & Ice Cream
                '24' => 75, // Five Guys
                '25' => 50, // O'Charley's Restaurant & Bar
            ],
            [
                'answer_id' => 30, // Fruit Drinks!
                '1' => 0, // Azzip Pizza
                '2' => 15, // Cavanaughs
                '3' => 0, // Bru Burger Bar
                '4' => 10, // Chick-fil-a
                '5' => 0, // Olive Garden
                '6' => 0, // Zuki Japanese Grill
                '7' => 10, // McAllister' s Deli
                '8' => 15, // Bonefish Grill
                '9' => 0, // Mission BBQ
                '10' => 0, // Zesto On Franklin
                '11' => 0, // The Log Inn
                '12' => 15, // Texas Roadhouse
                '13' => 0, // Sauced
                '14' => 15, // Chili's Bar and Grill
                '15' => 100, // La Campirana
                '16' => 20, // COMFORT by the Cross-Eyed Cricket
                '17' => 0, // Deerhead Pizza
                '18' => 40, // Bar Louie
                '19' => 60, // Pangea Kitchen
                '20' => 0, // Kanpai
                '21' => 15, // Angelo's
                '22' => 0, // Hot Head Burritos
                '23' => 0, // Lic's Deli & Ice Cream
                '24' => 0, // Five Guys
                '25' => 25, // O'Charley's Restaurant & Bar
            ],

            // Q: Chemical Formula for Salt
            [
                'answer_id' => 31, // No Salt please
                '1' => 40, // Azzip Pizza
                '2' => 35, // Cavanaughs
                '3' => 0, // Bru Burger Bar
                '4' => 5, // Chick-fil-a
                '5' => 50, // Olive Garden
                '6' => 25, // Zuki Japanese Grill
                '7' => 25, // McAllister' s Deli
                '8' => 45, // Bonefish Grill
                '9' => 5, // Mission BBQ
                '10' => 20, // Zesto On Franklin
                '11' => 20, // The Log Inn
                '12' => 0, // Texas Roadhouse
                '13' => 20, // Sauced
                '14' => 5, // Chili's Bar and Grill
                '15' => 30, // La Campirana
                '16' => 10, // COMFORT by the Cross-Eyed Cricket
                '17' => 10, // Deerhead Pizza
                '18' => 30, // Bar Louie
                '19' => 10, // Pangea Kitchen
                '20' => 10, // Kanpai
                '21' => 10, // Angelo's
                '22' => 15, // Hot Head Burritos
                '23' => 50, // Lic's Deli & Ice Cream
                '24' => 5, // Five Guys
                '25' => 10 // O'Charley’s Restaurant & Bar
            ],
            [
                'answer_id' => 32, // CO2
                '1' => 0, // Azzip Pizza
                '2' => 5, // Cavanaughs
                '3' => 0, // Bru Burger Bar
                '4' => 5, // Chick-fil-a
                '5' => 0, // Olive Garden
                '6' => 5, // Zuki Japanese Grill
                '7' => 0, // McAllister' s Deli
                '8' => 0, // Bonefish Grill
                '9' => 15, // Mission BBQ
                '10' => 0, // Zesto On Franklin
                '11' => 5, // The Log Inn
                '12' => 5, // Texas Roadhouse
                '13' => 0, // Sauced
                '14' => 5, // Chili's Bar and Grill
                '15' => 0, // La Campirana
                '16' => 5, // COMFORT by the Cross-Eyed Cricket
                '17' => 0, // Deerhead Pizza
                '18' => 20, // Bar Louie
                '19' => 0, // Pangea Kitchen
                '20' => 0, // Kanpai
                '21' => 0, // Angelo's
                '22' => 0, // Hot Head Burritos
                '23' => 0, // Lic's Deli & Ice Cream
                '24' => 0, // Five Guys
                '25' => 0 // O'Charley’s Restaurant & Bar
            ],
            [
                'answer_id' => 33, // NaCL
                '1' => 5, // Azzip Pizza
                '2' => 5, // Cavanaughs
                '3' => 20, // Bru Burger Bar
                '4' => 20, // Chick-fil-a
                '5' => 0, // Olive Garden
                '6' => 10, // Zuki Japanese Grill
                '7' => 5, // McAllister' s Deli
                '8' => 5, // Bonefish Grill
                '9' => 15, // Mission BBQ
                '10' => 5, // Zesto On Franklin
                '11' => 10, // The Log Inn
                '12' => 10, // Texas Roadhouse
                '13' => 10, // Sauced
                '14' => 15, // Chili's Bar and Grill
                '15' => 0, // La Campirana
                '16' => 15, // COMFORT by the Cross-Eyed Cricket
                '17' => 5, // Deerhead Pizza
                '18' => 20, // Bar Louie
                '19' => 15, // Pangea Kitchen
                '20' => 5, // Kanpai
                '21' => 5, // Angelo's
                '22' => 5, // Hot Head Burritos
                '23' => 0, // Lic's Deli & Ice Cream
                '24' => 20, // Five Guys
                '25' => 20 // O'Charley’s Restaurant & Bar
            ],
            [
                'answer_id' => 34, // H2O
                '1' => 10, // Azzip Pizza
                '2' => 10, // Cavanaughs
                '3' => 10, // Bru Burger Bar
                '4' => 15, // Chick-fil-a
                '5' => 15, // Olive Garden
                '6' => 10, // Zuki Japanese Grill
                '7' => 20, // McAllister' s Deli
                '8' => 5, // Bonefish Grill
                '9' => 10, // Mission BBQ
                '10' => 15, // Zesto On Franklin
                '11' => 15, // The Log Inn
                '12' => 5, // Texas Roadhouse
                '13' => 15, // Sauced
                '14' => 20, // Chili's Bar and Grill
                '15' => 15, // La Campirana
                '16' => 15, // COMFORT by the Cross-Eyed Cricket
                '17' => 20, // Deerhead Pizza
                '18' => 0, // Bar Louie
                '19' => 15, // Pangea Kitchen
                '20' => 15, // Kanpai
                '21' => 20, // Angelo's
                '22' => 15, // Hot Head Burritos
                '23' => 25, // Lic's Deli & Ice Cream
                '24' => 15, // Five Guys
                '25' => 20 // O'Charley’s Restaurant & Bar
            ],

            // Q: What is your ideal atmosphere
            [
                'answer_id' => 35, // My Living room
                '1' => 25, // Azzip Pizza
                '2' => 0, // Cavanaughs
                '3' => 0, // Bru Burger Bar
                '4' => 35, // Chick-fil-a
                '5' => 0, // Olive Garden
                '6' => 5, // Zuki Japanese Grill
                '7' => 15, // McAllister' s Deli
                '8' => 0, // Bonefish Grill
                '9' => 10, // Mission BBQ
                '10' => 5, // Zesto On Franklin
                '11' => 5, // The Log Inn
                '12' => 5, // Texas Roadhouse
                '13' => 0, // Sauced
                '14' => 20, // Chili's Bar and Grill
                '15' => 10, // La Campirana
                '16' => 0, // COMFORT by the Cross-Eyed Cricket
                '17' => 30, // Deerhead Pizza
                '18' => 0, // Bar Louie
                '19' => 5, // Pangea Kitchen
                '20' => 20, // Kanpai
                '21' => 5, // Angelo's
                '22' => 25, // Hot Head Burritos
                '23' => 45, // Lic's Deli & Ice Cream
                '24' => 10, // Five Guys
                '25' => 10 // O'Charley’s Restaurant & Bar
            ],
            [
                'answer_id' => 36, // Outdoor Seating
                '1' => 15, // Azzip Pizza
                '2' => 5, // Cavanaughs
                '3' => 30, // Bru Burger Bar
                '4' => 0, // Chick-fil-a
                '5' => 0, // Olive Garden
                '6' => 0, // Zuki Japanese Grill
                '7' => 5, // McAllister' s Deli
                '8' => 0, // Bonefish Grill
                '9' => 0, // Mission BBQ
                '10' => 5, // Zesto On Franklin
                '11' => 5, // The Log Inn
                '12' => 0, // Texas Roadhouse
                '13' => 30, // Sauced
                '14' => 5, // Chili's Bar and Grill
                '15' => 0, // La Campirana
                '16' => 25, // COMFORT by the Cross-Eyed Cricket
                '17' => 0, // Deerhead Pizza
                '18' => 20, // Bar Louie
                '19' => 0, // Pangea Kitchen
                '20' => 0, // Kanpai
                '21' => 0, // Angelo's
                '22' => 0, // Hot Head Burritos
                '23' => 20, // Lic's Deli & Ice Cream
                '24' => 5, // Five Guys
                '25' => 5 // O'Charley’s Restaurant & Bar
            ],
            [
                'answer_id' => 33, // The kind I breathe
                '1' => 10, // Azzip Pizza
                '2' => 5, // Cavanaughs
                '3' => 10, // Bru Burger Bar
                '4' => 15, // Chick-fil-a
                '5' => 5, // Olive Garden
                '6' => 10, // Zuki Japanese Grill
                '7' => 15, // McAllister' s Deli
                '8' => 5, // Bonefish Grill
                '9' => 10, // Mission BBQ
                '10' => 10, // Zesto On Franklin
                '11' => 10, // The Log Inn
                '12' => 5, // Texas Roadhouse
                '13' => 10, // Sauced
                '14' => 10, // Chili's Bar and Grill
                '15' => 10, // La Campirana
                '16' => 15, // COMFORT by the Cross-Eyed Cricket
                '17' => 15, // Deerhead Pizza
                '18' => 0, // Bar Louie
                '19' => 15, // Pangea Kitchen
                '20' => 10, // Kanpai
                '21' => 15, // Angelo's
                '22' => 10, // Hot Head Burritos
                '23' => 15, // Lic's Deli & Ice Cream
                '24' => 10, // Five Guys
                '25' => 15 // O'Charley’s Restaurant & Bar
            ],
            [
                'answer_id' => 34, // Dimly-lit Dungeons
                '1' => 0, // Azzip Pizza
                '2' => 5, // Cavanaughs
                '3' => 15, // Bru Burger Bar
                '4' => 0, // Chick-fil-a
                '5' => 0, // Olive Garden
                '6' => 5, // Zuki Japanese Grill
                '7' => 0, // McAllister' s Deli
                '8' => 10, // Bonefish Grill
                '9' => 5, // Mission BBQ
                '10' => 5, // Zesto On Franklin
                '11' => 5, // The Log Inn
                '12' => 10, // Texas Roadhouse
                '13' => 15, // Sauced
                '14' => 10, // Chili's Bar and Grill
                '15' => 5, // La Campirana
                '16' => 5, // COMFORT by the Cross-Eyed Cricket
                '17' => 10, // Deerhead Pizza
                '18' => 80, // Bar Louie
                '19' => 5, // Pangea Kitchen
                '20' => 15, // Kanpai
                '21' => 15, // Angelo's
                '22' => 5, // Hot Head Burritos
                '23' => 0, // Lic's Deli & Ice Cream
                '24' => 5, // Five Guys
                '25' => 5 // O'Charley’s Restaurant & Bar
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

        foreach ($weights as $weight) {
            // Get the Answer's row ID and remove it from initial weight array
            $answer_id = $weight['answer_id'];
            unset($weight['answer_id']);

            // Apply Restaurant weights to given answer
            Answer::where('id', $answer_id)
                ->update([
                    'restaurant_weights' => json_encode($weight)
                ]);
        }
    }
}
