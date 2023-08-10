<?php

namespace App\Http\Controllers;

use App\Models\corrida;
use Illuminate\Http\Request;

#Controller que trata da validação e processo de cadastro de corridas
class corridaController extends Controller
{   
    #Função para abrir a view de corrida
    public function corrida(){
        return view('/corrida');
    }

    #Função que realiza a verificação dos campos de cadastro da corrida
    public function cadastrarCorrida(Request $request){
        
        #Verifica os campos do cadastro da corrida
        $request->validate([
            'localDePartida' => 'required|min:10|max:60',
            'localDeDestino' => 'required|min:10|max:60',
            'Motorista' => 'nullable',
            'formaDePagamento' => 'required',
        ]);
        
        $corrida = corrida::create(['idpassageiro' => session('id'),
                                    'localDePartida' => $request->localDePartida,
                                    'localDeDestino' => $request->localDeDestino, 
                                    'Motorista' => $request->Motorista,
                                    'formaDePagamento' => $request->formaDePagamento]);

        #Caso a validação seja um sucesso
        return redirect()->route('listarCorridas')->with('Sucesso','Corrida Solicitada');
    }
    
    public function listarCorridas(Request $request){
        $corrida['corridas'] = corrida::where('idpassageiro',session('id'))->get();
        return view('listarCorridas', $corrida);
    } 

    public function buscarCorridas(Request $request){
        
        if($request->localDePartida){ 
            $corrida['corridas'] = corrida::where('idpassageiro',session('id'))->where('localDePartida', $request->localDePartida)->get();
            return view('listarCorridas', $corrida);
        }
        else{
            $corrida['corridas'] = corrida::where('idpassageiro',session('id'))->get();
            return view('listarCorridas', $corrida);
        }
    } 
}