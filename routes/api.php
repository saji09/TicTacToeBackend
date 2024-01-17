<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicTacController;


Route::post('/save-winner', [TicTacController::class, 'saveWinner']);
Route::get('/get-winners', [TicTacController::class, 'getWinners']);
