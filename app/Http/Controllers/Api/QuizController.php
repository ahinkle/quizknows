<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Restaurant;
use App\Answer;
use Session;

class QuizController extends Controller
{
    /**
     * Initialize the Quiz by storing restaurant weights to a session.
     *
     * @return Session
     */
    public function new()
    {
        $restaurants = Restaurant::get()->keyBy('id')->toArray();
        
        Session::put('restaurants_weights', $restaurants);
       
        return Session::get('restaurants_weights');
    }

    /**
     * Update the restraunt weights, based upon the users selection.
     *
     * @param  Answer $answer
     *
     * @return mixed
     */
    public function update(Answer $answer)
    {
        foreach ($answer->restaurant_weights as $restaurantsWeight) {
            Session::put('restaurants_weights.'. $restaurantsWeight['restaurant_id'] .'.weight', $restaurantsWeight['weight']);
        }

        return Session::get('restaurants_weights');
    }
}
