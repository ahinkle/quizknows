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
     * Update the restaurant weights, based upon the users selection.
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

        // Update Answer Pick Stat
        Answer::where('id', $request->answer)
            ->update([
                'picks' => $answer->picks + 1
            ]);

        // Update Cookie
        return $weights;
    }

    /**
     * Update the winning Restaurant's pick rate
     *
     * @param Request $request
     */
    public function finalRestaurant(Request $request) {
        $restaurant = Restaurant::where('id', $request->restaurant_id);
        $restaurant->update([ 'picks' => $restaurant->value('picks') + 1 ]);
    }

    /**
     * Get sorted Restaurants
     *
     * @return mixed
     */
    public function getRestaurants() {
        return Restaurant::orderBy('picks', 'desc')->limit(5)->get();
    }

    /**
     * Get sorted Answers
     *
     * @return mixed
     */
    public function getAnswers() {
        return Answer::orderBy('picks', 'desc')->limit(5)->get();
    }
}
