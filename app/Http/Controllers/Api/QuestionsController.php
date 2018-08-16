<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;
use App\Http\Resources\QuestionResource;

class QuestionsController extends Controller
{
    /**
     * Return a collection of questions with the available answers.
     *
     * @return QuestionResource
     */
    public function index()
    {
        $questions = Question::with('Answers')
            ->inRandomOrder()
            ->get();

        return QuestionResource::collection($questions);
    }
}
