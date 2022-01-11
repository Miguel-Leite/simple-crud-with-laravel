<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        
        return view('auth.index');
    }

    public function auth(Request $request) {

        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required'=>'Por favor informe o seu e-mail!',
            'password.required'=>'Por favor informe a senha!'
        ]);
        
        if (Auth::attempt(['email' => $request->email,'password'=>$request->password])) {
            return redirect()->route('products.index')->with('success','Login efectuado com sucesso!');
        } else {
            return redirect()->back()->with('danger','E-mail ou senha invalida!');
        }
    }
}
