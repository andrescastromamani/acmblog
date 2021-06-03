<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function all(){
        return view('notes.all');
    }
    public function favorites() {
        return view('notes.favorites');
    }
    public function archived() {
        return view('notes.archived');
    }
}
