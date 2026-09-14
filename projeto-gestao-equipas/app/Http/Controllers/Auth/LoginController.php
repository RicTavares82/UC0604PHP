<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show_login(){
        return view('login');
    }

    public function login(Request $request){
        //dd($request->all());
        //Ir ao request e buscar os valores que interessam
        //Validar se existem ou cumprem as regras
        $credentials=$request->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);
        //dd($credentials);

        //Ir verificar se a pass e username correspondem a um user na BD
        if(Auth::attempt($credentials)){
            //Se entrei aqui autenticação correta
            ////SE SIM: encaminhar para uma pagina
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }


        //SE NAO: voltar ao login e apresentar erros
        return back()->withErrors(['msg'=>'Verifique as suas credencias'])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();
        //Boas praticas
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }

}
