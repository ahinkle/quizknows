<?php

namespace App\Http\Controllers;

use App\Http\Resources\QuestionAnswerResource;
use App\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Homepage/Start of Quiz
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function homepage() {
        return view('quiz');
    }

    /**
     * Get collection of Questions and their Answers
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index() {
        // Get questions + answers
        $questions = Question::with('Answers')
            ->inRandomOrder()
            ->limit(10)
            ->get();

        return QuestionAnswerResource::collection($questions);
    }

    public function update(Request $request) {
        // Submit answer
    }
}
