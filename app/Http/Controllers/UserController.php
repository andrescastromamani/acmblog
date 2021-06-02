<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(Request $request){
        if($request){
            $search = trim($request->get('search'));
            $users = User::where('name','LIKE','%'.$search.'%')->orderBy('id','asc')->get();
            return view('users.index', compact('users','search'));
        }
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
    public function show(User $user){
        return view('users.show',compact('user'));
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
