<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => ['required'],
            'username' => ['required', 'unique:users,username'],
            'password' => ['required']
        ]);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        return redirect('/');
    }
}
