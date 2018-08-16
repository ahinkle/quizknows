<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Restaurant;

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
}
