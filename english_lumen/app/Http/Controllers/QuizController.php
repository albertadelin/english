<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function show(){
        return view('quiz');
    }

    public function quizData(Request $request)
    {
        $q1 = $request->input('q1');
        $q2 = $request->input('q2');
        echo"<pre>";var_dump($request->input());die();
    }
}
