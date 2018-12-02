<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Child;

class QuizController extends Controller
{
    public function show(){
        return view('quiz');
    }

    public function quizData(Request $request)
    {
        $score = 0;

        if(strpos($request->input('q11'), "y name is") !== false){
            $score++;
        }

        if((strpos($request->input('q12'), "'m ") !== false) || (strpos($request->input('q12'), "am ") !== false)){
            $score++;
        }

        if($request->input('q21') == "Three") $score++;
        if($request->input('q22') == "Ten") $score++;
        if($request->input('q23') == "Eight") $score++;
        if($request->input('q24') == "One") $score++;

        if($request->input('q31') == "am") $score++;
        if($request->input('q32') == "dress") $score++;
        if($request->input('q33') == "watch") $score++;
        if($request->input('q34') == "play") $score++;


        // Put name and score in database
        Child::create([
            'name' => $request->input('q11'),
            'score' => $score
        ]);

        if($score > 7){
            echo "<h1>Felicitări ai scorul de ".$score." puncte !!! </h1><br>";
            echo "<p>*În 5 secunde vei fi redirectionat pe pagina principală</p>";
            header("refresh:5;url=http://english.local:81/");
        }elseif($score <= 7 && $score >= 5){
            echo "<h3>Capul sus! Un scor de ".$score." puncte nu este un capăt de țară!</h3>";
            echo "<p>*În 5 secunde vei fi redirectionat pe pagina principală</p>";
            header("refresh:5;url=http://english.local:81/");
        }else{
            echo "<h3>Scorul de ".$score." puncte nu te reprezintă! Data viitoare vei lua mult mai mult!</h3>";
            echo "<p>*În 5 secunde vei fi redirectionat pe pagina principală</p>";
            header("refresh:5;url=http://english.local:81/");
        }
    }
}
