<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function fornecedores(){
        $fornecedores = [
            'nome'=> 'Fornecedor 1', 'status' => 'Ativo',
            'nome'=> 'Fornecedor 2', 'status' => 'Ativo',
            'nome'=> 'Fornecedor 3', 'status' => 'Ativo',
        ];
        return View('site.fornecedores', compact('fornecedores'));
    }
}
