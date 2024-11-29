<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create(){
        return view('users.create');
        
    }

    public function store(Request $request)
{
    User::create($request->only('name', 'username', 'email')
    + ['password' => bcrypt($request->input('password')),
    ]);
    return redirect()->back();
}

}
