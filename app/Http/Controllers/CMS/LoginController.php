<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __invoke()
    {
        return view('cms.login');
    }

    public function handleLogin(Request $request){
        dd($request);
        return to_route('cms.index');
    }
}
