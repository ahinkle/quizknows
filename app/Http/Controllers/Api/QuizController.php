<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Restaurant;
use App\Answer;

class QuizController extends Controller
{
    /**
     * Initialize the Quiz.
     *
     * @param  Request  $Request
     * @return Request
     */
    public function new(Request $request)
    {
        $restaurant = Restaurant::all();

        foreach ($restaurants as $restaurant) {
            $request->session(['restaurant_weight['.$restaurant->id.']' => 0]);
        }
        return $request;
    }

    /**
     * Update the restraunt weights, based upon the users selection.
     *
     * @param  Request  $Request
     * @param  Answer   $answer
     * @return Request
     */
    public function update(Answer $answer, Request $request)
    {
        foreach ($answer->restaurant_weights as $key => $restaurantWeight) {
            $request->session(['restaurant_weight[' . $key. ']' => 'restaurant_weight[' . $key. ']' + $restaurantWeight['weight']]);
        }
        
        return $request;
    }
}
