<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    public function edit(){
        $user = User::findOrFail(auth()->user()->id);
        return view('user.edit', ['user' => $user]);
    }

    public function alterpass(){
        $user = User::findOrFail(auth()->user()->id);
        return view('user.pass', ['user' => $user]);
    }

    public function update(Request $request){
        $user = User::findOrFail(auth()->user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->telefone = $request->telefone;
        $user->update();
        return redirect('/user')->with('msg', 'Dados alterados com sucesso!');
    }

    public function updatepass(Request $request){
        $user = User::findOrFail(auth()->user()->id);
        $senhaAtual = $request->password_atual;
        $msg = '';
        if(\Hash::check($request->password_atual, $user->password)){
           
            if($request->password == $request->confirm_password){
                $user->password = bcrypt($request->password);
                $user->update();
                $msg = 'Senha alterada com sucesso!';
            }else{
                $msg = 'A confimação de senha não confere!';
            }
            return redirect('/')->with('msg', $msg);
        }

            return redirect('/')->with('msg', 'A senha atual não confere, verifique por favor!')->with('class', 'danger');
    
    }
}
