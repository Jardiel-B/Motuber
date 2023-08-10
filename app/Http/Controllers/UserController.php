<?php

namespace App\Http\Controllers;

use App\Models\passageiro;
use App\Models\corrida;
use App\Http\Controllers\corridaController;
use Illuminate\Http\Request;

#Controller que trata da validação e processo de cadastro e login de usuário
class UserController extends Controller
{   
    protected $passageiro;

    #Função para abrir a view de cadastro
    public function cadastro(){
        return view('/cadastro');
    }

    #Função que realiza a verificação dos campos de cadastro
    public function cadastrar(Request $request){
        
        #Verifica os campos do cadastro
        $request->validate([
            'nome' => 'required|min:15',
            'email' => 'required|email',
            'senha' => 'required|min:6',
            'data_de_nascimento' => 'required|date',
            'cpf' => 'required|string|min:14|max:14',
            'telefone' => 'required|string',
            'cep' => 'required|string|min:9|max:9'
        ]);

        if(passageiro::where('email', $request->email)->first() || passageiro::where('CPF', $request->cpf)->first()){
            return redirect()->back();
        }

        $passageiro = passageiro::create($request->all());

        #Caso a validação seja um sucesso redireciona para a tela de login
        return redirect()->route('login')->with('Cadastro Bem Sucedido');
    } 

    #Função para abrir a view de login
    public function login(){
        return view('/login');
    }

    #Função que realiza a verificação dos campos de login
    public function logar(Request $request){
        
        #Verifica os campos do login
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required'
        ]);

        #Verifica os campos do login
        if($pessoa = passageiro::where('email', $request->email)->first()){
            if($pessoa->email == $request->email && $pessoa->senha == $request->senha) {
                session(['email' => $request->email, 'id' => $pessoa->id, 'cpf' => $pessoa->CPF]);
                return redirect()->route('home');
            }
        }
        
        #Caso a validação não seja um sucesso retorna para a própria página
        return redirect()->back()->with('erro', 'senha ou email errado ou não estão cadastrados');
    }

    #Função para deslogar e limpar a session
    public function logout(Request $request){
        $request->session()->flush();
        return redirect()->route('login');
    }
    
    public function conta(Request $request){
        $pessoas['dados'] = passageiro::where('email', session('email') )->first();
        return view('/conta', $pessoas);
    }

    public function edicao(){
        $pessoas['dados'] = passageiro::where('email', session('email') )->first();
        return view('/editarConta', $pessoas);
    }

    public function editar(Request $request){

        #Verifica os campos do cadastro
        $request->validate([
            'nome' => 'required|min:15',
            'email' => 'required|email',
            'senha' => 'required',
            'data_de_nascimento' => 'required|date',
            'cpf' => 'required|string|min:14|max:14',
            'telefone' => 'required|string',
            'cep' => 'required|string|min:9|max:9'
        ]);

        if($request->email == session('email') && session('cpf') == $request->cpf){
            session(['email' => $request->email]);
            $pessoa = passageiro::find(session('id'));
            $pessoa->fill($request->all());
            $pessoa->save();
                
            return redirect()->route('conta');
            }
        return redirect()->back();
    }

    public function deletar(){
        $pessoa = passageiro::find(session('id'));
        $corrida['corridas'] = corrida::where('idpassageiro',session('id'))->delete();
        $pessoa->delete();

        return redirect()->route('logout');
    }
}