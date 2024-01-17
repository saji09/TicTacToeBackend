<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicTac;

class TicTacController extends Controller
{
    public function saveWinner(Request $request)
    {
        $request->validate([
            'winner' => 'required|string|in:X,O',
        ]);

        $winner = $request->input('winner');

        $gameResult = new TicTac;
        $gameResult->winner = $winner;
        $gameResult->save();

        return response()->json(['message' => 'Winner saved successfully']);
    }

    public function getWinners()
    {
        $winners = TicTac::all();

        return response()->json(['winners' => $winners]);
    }
}