<?php

namespace App\Http\Controllers;

use App\Models\tbl_user;
use Illuminate\Http\Request;

class TblUserController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'fname' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string'
        ]);
        $user = new tbl_user;
        $user->fname=request('fname');
        $user->email=request('email');
        $user->password=request('password');
        $user->save();
        return view('login');
    }

    public function index(){
        $users = tbl_user::all();
        return view('users',['users' => $users,
    ]);
    }
    
    public function show($id) {
        $user = User::find($id);
    
        if (!$user) {
            abort(404, 'User not found');
        }
            return view('users.show', ['user' => $user]);
    }
    public function create(){
    }

    public function edit(tbl_user $tbl_user){
    }
    public function update(Request $request, tbl_user $tbl_user){

    }
    public function destroy(tbl_user $tbl_user){
    }

}