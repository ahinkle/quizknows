<?php

use Illuminate\Database\Seeder;
use App\Question;
use App\Answer;

class QuestionAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'question' => 'Dine-In, Carry-out, or Delivery?',
                'answers'  => [
                    'Dine-In',
                    'Carry-Out',
                    'Delivery',
                ],
            ],
            [
                'question' => 'Do you want salad or fries with that?',
                'answers' => [
                    'Salad',
                    'Fries',
                    'Yes',
                    'No, Thanks',
                ],
            ],
            [
                'question' => 'You\'re stranded on a deserted island. Pick one item.',
                'answers' => [
                    'Fishing Net',
                    'Giant box of matches',
                    'Cold Beer',
                    'Ice Cream',
                ],
            ],
            [
                'question' => 'How much money are you willing to spend?',
                'answers' => [
                    'Money is no object.',
                    'I almost chose McDonalds, so close to nothing.',
                    'It depends on what I order. I might spend $10, I might spend $20',
                    'I\'m only concerned about the food, so no more than $10.',
                ],
            ],
            [
                'question' => 'Do you want meat?',
                'answers' => [
                    'Maybe some lean proteins but nothing heavy.',
                    'I\'m feeling steak or BBQ.',
                    'No way. Animals in my plate? Thanks but no thanks.',
                    'Yes, even better if they\'re in a taco or bowl of noodles.',
                ],
            ],
            [
                'question' => 'What\'s the occasion?',
                'answers' => [
                    'Something Casual',
                    'Date Night',
                    'Bro-ing Out.',
                    'Special Occasion',
                ],
            ],
        ];
    }
}
