<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('form');
    }
    public function register_action(Request $request)
    {
        $request->session()->put([
            'first_name'=> $request->first_name,
            'last_name' => $request->last_name
        ]);
        return redirect('welcome');
    }
    public function welcome(Request $request)
    {
        $data = $request->session()->all();
        return view('welcome', $data);
    }
}
