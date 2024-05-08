<?php

namespace App\Http\Controllers;

use App\Models\UserRecord;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function mathGame()
    {
        return view('math_game');
    }

    public function objectGame()
    {
        return view('object_game');
    }

    public function wordScramble()
    {
        return view('word_scramble');
    }

    public function validateAnswer(Request $request)
    {
        $userAnswers = $request->input('answers');
        $correctAnswers = ["elephant", "fruits", "car", "shoes", "ball"];
        $correctCount = 0;
        $results = [];

        foreach ($userAnswers as $index => $answer) {
            if ($answer === $correctAnswers[$index]) {
                $correctCount++;
                $results[] = "Question " . ($index + 1) . ": Correct! Well done!";
            } else {
                $results[] = "Question " . ($index + 1) . ": Sorry, that's incorrect. Please try again.";
            }
        }

        $score = ($correctCount / count($correctAnswers)) * 100;

        return response()->json(['results' => $results, 'score' => number_format($score, 2)]);
    }

    public function askNameAndAge(Request $request)
    {
        $name = $request->input('name');
        $age = $request->input('age');
        $score = $request->input('score');
        $game = $request->input('game');

        $userRecord = new UserRecord();
        $userRecord->name = $name;
        $userRecord->age = $age;
        $userRecord->score = $score;
        $userRecord->game = $game;
        $userRecord->save();

        return response()->json(['message' => 'User record saved successfully']);
    }

    public function saveMathUserInfo(Request $request)
    {
        $name = $request->input('name');
        $age = $request->input('age');
        $score = $request->input('score');
        $game = $request->input('game');

        $userRecord = new UserRecord();
        $userRecord->name = $name;
        $userRecord->age = $age;
        $userRecord->score = $score;
        $userRecord->game = $game;
        $userRecord->save();

        return response()->json(['name' => $name, 'age' => $age]);
    }

    public function validateWordAnswer(Request $request)
    {
        $userAnswers = $request->input('answers');
        $correctAnswers = ["word", "color", "bed", "chair", "table" /* Add more correct answers here */];
        $correctCount = 0;
        $results = [];

        foreach ($userAnswers as $index => $answer) {
            if ($answer === $correctAnswers[$index]) {
                $correctCount++;
                $results[] = "Question " . ($index + 1) . ": Correct! Well done!";
            } else {
                $results[] = "Question " . ($index + 1) . ": Sorry, that's incorrect. Please try again.";
            }
        }

        $score = ($correctCount / count($correctAnswers)) * 100;

        return response()->json(['results' => $results, 'score' => number_format($score, 2)]);
    }

    public function saveWordUserInfo(Request $request)
    {
        $name = $request->input('name');
        $age = $request->input('age');
        $score = $request->input('score');
        $game = $request->input('game');
    
        $userRecord = new UserRecord();
        $userRecord->name = $name;
        $userRecord->age = $age;
        $userRecord->score = $score;
        $userRecord->game = $game;
        $userRecord->save();
    
        return response()->json(['name' => $name, 'age' => $age]);
    }

}

  
