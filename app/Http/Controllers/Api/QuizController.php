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
     * @param  Request  $Request
     * @return Request
     */
    public function new(Request $request)
    {
        $restaurants = Restaurant::get()->toArray();
        
        Session::put('restaurants_weights', $restaurants);
       
        return Session::get('restaurants_weights.0');
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
        //
    }
}
