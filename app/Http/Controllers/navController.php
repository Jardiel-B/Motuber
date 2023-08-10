<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

#Controller responsável por realizar a navegação
class navController extends Controller
{
    #Função para abrir a view de home
    public function home(){
        return view('/home');
    }

    #Função para abrir a view de sobre
    public function sobre(){
        return view('/sobre');
    }

    #Função para abrir a view de download
    public function download(){
        return view('/download');
    }

    #Função para abrir a view de parceria
    public function parceria(){
        return view('/parceria');
    }

}