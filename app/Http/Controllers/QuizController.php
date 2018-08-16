<?php

namespace App\Http\Controllers;

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
}
