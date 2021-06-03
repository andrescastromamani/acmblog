<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function all(){
        return "secion de todos";
    }
    public function favorites() {
        return 'seccion favoritos';
    }
    public function archived() {
        return 'favoritos';
    }
}
