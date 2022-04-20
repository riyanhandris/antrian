<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $user = User::where('np', $request->np)->first();

        if (!Hash::check($request->password, $user->password)) {
            return 'password tidak sama';
        }
        Auth::login($user);
        return redirect('/dashboard');
    }
}
