<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
        public function index()
    {
        $notes = \App\Models\Note::all();
        return view('notes.index', ['notes' => $notes]);
    }
}
