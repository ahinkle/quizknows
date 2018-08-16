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
     * Initialize the Quiz.
     *
     * @return Session
     */
    public function new()
    {
        $restaurants = Restaurant::get()->toArray();
        
        Session::put('restaurants_weights', $restaurants);
       
        return Session::get('restaurants_weights');
    }

    /**
     * Update the restraunt weights, based upon the users selection.
     *
     * @param  Answer   $answer
     *
     * @return Session
     */
    public function update(Answer $answer)
    {
    }
}
