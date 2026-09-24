<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    public function show(){
        return view('login');
    }

    public function login(Request $request){
        //dd($request->all());
        $rules =[
            'email'=>'required|email',
            'password'=>'required|string',

        ];
        $messages =[
            'email.required'=>'O email é obrigatório',
            'email.email'=>'O formato do email está errado',
            'password.required'=>'A password é obrigatória'
        ];
        $credentials = $request->validate($rules, $messages);
        //dd($credentials);
        if(Auth::attempt($credentials, $request->boolean('remember'))){
            //Autenticação correta - Redirecionar o user para onde se quiser

            if(Auth::user()->hasRole('admin')){
                return redirect()->route('admin.dashboard')
                    ->with('success','Autenticação feita com sucesso');
            }
            if(Auth::user()->hasRole('editor')){
                return redirect()->route('editor.dashboard')
                    ->with('success','Autenticação feita com sucesso');
            }
            if(Auth::user()->hasRole('user')){
                return redirect()->route('user.dashboard')
                    ->with('success','Autenticação feita com sucesso');
            }

            return redirect()->intended(route('home'))
                ->with('success','Autenticação feita com sucesso');
        }

        return back()->withErrors(
            [
                'email'=>'As credenciais são inválidas',
                'password'=>'As credenciais são inválidas',
            ]
        )->onlyInput('email');

    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home')
            ->with('success','Sessão terminada com sucesso');
    }


    public function fastLogin(string $id){
        $user=User::find($id);
        Auth::login($user);
        if(Auth::user()->hasRole('admin')){
            return redirect()->route('admin.dashboard')
                ->with('success','Autenticação feita com sucesso');
        }
        if(Auth::user()->hasRole('editor')){
            return redirect()->route('editor.dashboard')
                ->with('success','Autenticação feita com sucesso');
        }
        if(Auth::user()->hasRole('user')){
            return redirect()->route('user.dashboard')
                ->with('success','Autenticação feita com sucesso');
        }

    }

    public function showCreate(){

    }
    public function create(Request $request){

    }
}
