<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Food;
use App\Models\Water;
use Illuminate\Http\Request;

class ProgressController extends Controller
{
    public function show(Request $request)
    {
        $date = strtotime($request->date);
        $dateFormat = date("d/m/Y", $date);
        // Food
        $foods = Food::whereDate('created_at', $request->date)->get();
        $totalFood = 0;
        foreach ($foods as $food) {
            $totalFood = $totalFood + $food->calories;
        }
        // Exercise
        $exercises = Exercise::whereDate('created_at', $request->date)->get();
        $totalExercise = 0;
        foreach ($exercises as $exercise) {
            $totalExercise = $totalExercise + $exercise->calories;
        }
        // Water
        $waters = Water::whereDate('created_at', $request->date)->get();
        $totalWater = 0;
        foreach ($waters as $water) {
            $totalWater = $totalWater + $water->amount;
        }

        return view('progress.show', ['dateFormat' => $dateFormat, 'foods' => $foods, 'totalFood' => $totalFood, 'exercises' => $exercises, 'totalExercise' => $totalExercise, 'waters' => $waters, 'totalWater' => $totalWater]);
    }
}
