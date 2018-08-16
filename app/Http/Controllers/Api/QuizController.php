<?php

namespace App\Http\Controllers\Api;

use App\Classes\Cookie;
use App\Restaurant;
use Illuminate\Cookie\CookieJar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Answer;
use Session;

class QuizController extends Controller
{
    /**
     * Initialize the Quiz by creating initial restaurant weights
     *
     * @return mixed
     */
    public function new()
    {
        return Restaurant::get()->keyBy('id')->toArray();
    }

    /**
     * Update the restraunt weights, based upon the users selection.
     *
     * @param Request $request
     * @return mixed
     */
    public function update(Request $request)
    {
        // Get Answer
        $answer = Answer::find($request->answer);
        $weights = $request->weights;

        foreach ($answer->restaurant_weights as $key => $restaurantsWeight) {
            if (array_key_exists($key, $weights)) {
                // Add previous Weight value to new Weight
                $new_weight = $restaurantsWeight + $weights[$key]['weight'];
            } else {
                // Create new Weight value from nothing
                $new_weight = $restaurantsWeight;
            }

            $weights[$key]['weight'] = $new_weight;
        }

        // Update Cookie
        return $weights;
    }
}
