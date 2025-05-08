<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\NoteController;
Route::get('/notes', [NoteController::class, 'index']);

Route::get('/notes/create', [NoteController::class, 'create']);

Route::post('/notes', [NoteController::class, 'store']);

Route::get('/notes/{id}', [NoteController::class, 'show']);