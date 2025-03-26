<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __invoke()
    {
        return view('cms.login');
    }

    public function handleLogin(Request $request){
        $validatedData = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($validatedData)){
            return to_route('cms.index');
        }

        return back()->with('errorMessage', 'Credenciais incorretas!');
    }
}
