<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index', compact('users'));
    }
    public function create(){
        return view('users.create');
    }

    public function store(Request $request, User $user){
        $user = $request->all();
        $user['password'] = bcrypt($user['password']);
        User::create($user);
        return redirect()->route('users.index');
    }
}
