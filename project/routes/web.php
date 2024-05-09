<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\UserRecordController;

Route::get('/', [GameController::class, 'home'])->name('home');
Route::get('/object_game', [GameController::class, 'objectGame'])->name('object_game');
Route::get('/math_game', [GameController::class, 'mathGame'])->name('math_game');
Route::post('/validate_answer', [GameController::class, 'validateAnswer'])->name('validate_answer');
Route::post('/save_user_info', [GameController::class, 'askNameAndAge'])->name('save_user_info');
Route::post('/save_math_user_info', [GameController::class, 'saveMathUserInfo'])->name('save_math_user_info');
Route::get('/word_scramble', [GameController::class, 'wordScramble'])->name('word_scramble');
Route::post('/save_word_user_info', [GameController::class, 'saveWordUserInfo'])->name('save_word_user_info');
Route::post('/validate_word_answer', [GameController::class, 'validateWordAnswer'])->name('validate_word_answer');


Route::get('/user-records', [UserRecordController::class, 'showUserRecords'])->name('user-records');
Route::delete('/user-records/{id}', [UserRecordController::class, 'deleteUserRecord'])->name('delete-user-record');




