<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
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

    public function store(UserFormRequest $request){
        $user = $request->all();
        $user['password'] = bcrypt($user['password']);
        User::create($user);
        return redirect()->route('users.index');
    }
    public function edit(User $user){
        return view('users.edit',compact('user'));
    }
    public function update(UserFormRequest $request,User $user){
        $usr = $request->all();
        $usr['password'] = bcrypt($usr['password']);
        $user->update($usr);
        return redirect()->route('users.index');
    }
    public function destroy(User $user){
        $user->delete();
        return redirect()->route('users.index');
    }
}
