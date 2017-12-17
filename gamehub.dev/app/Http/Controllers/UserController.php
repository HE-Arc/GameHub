<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('users.index', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $user->name = $request->get('name');

        $user->email = $request->get('email');

        $user->password = $request->get('password');

        $user->save();

        return redirect()->route('route.index')->with('success', 'User updated successfully');
    }
}
