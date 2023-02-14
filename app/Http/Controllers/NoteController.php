<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function index(Request $request)
    {
        if ($request->search) {
            $note = Note::where('note', 'LIKE', "%$request->search%")->get();
            return $note;
        }
        $note = Note::all();
        return view('note.index', ['data' => $note]);
    }

    public function show($id)
    {
        $note = Note::find($id);
        return $note;
    }

    public function create()
    {
        return view('note.create');
    }

    public function edit($id)
    {
        $note = Note::find($id);
        return view('note.edit', compact('note'));
    }

    public function store(NoteRequest $request)
    {
        Note::create([
            'title' => $request->title,
            'note' => $request->note
        ]);
        return redirect('/notes');
    }

    public function update(NoteRequest $request, $id)
    {
        $note = Note::find($id);
        $note->update([
            'title' => $request->title,
            'note' => $request->note
        ]);
        return redirect('/notes');
    }

    public function delete($id)
    {
        Note::find($id)->delete();
        return redirect('/notes');
    }
}
