<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        // if (!$user || !Hash::check($request->password, $user->password)) {
        //     throw  \Illuminate\Validation\ValidationException::withMessages([
        //         'email' => ['The credentials you entered is incorrect.']
        //     ]);
        // }

        if (!auth()->attempt($request->only('email', 'password'))) {
            throw  \Illuminate\Validation\ValidationException::withMessages([
                'email' => ['The credentials you entered is incorrect.']
            ]);
        }
    }
}
