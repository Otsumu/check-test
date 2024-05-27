<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(UserRequest $request)
{
    $validatedData = $request->validated();

    $user = User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'password' => bcrypt($validatedData['password']),
    ]);

    \Log::debug('Request data:', $request->all());

    Auth::login($user);

    return redirect()->route('login');
}

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();

            if ($user->admin()) {
                return redirect()->route('admin');
            } else {
                return redirect()->route('register');
            }
        } else {
            return redirect()->route('login');
        }
    }
}
