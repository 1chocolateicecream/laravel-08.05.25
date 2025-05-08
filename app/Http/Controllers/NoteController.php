<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', ['notes' => $notes]);
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        Note::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
    
        return redirect('/notes');
    }

    public function show($id)
    {
        $note = Note::findOrFail($id);
        return view('notes.show', ['note' => $note]);
    }

    public function destroy($id)
    {
        Note::findOrFail($id)->delete();
        return redirect("/notes");
    }
}
