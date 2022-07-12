<?php

namespace App\Controllers;

use App\Models\AlunoModel;
use Config\Database;

class Aluno extends BaseController
{
    public function index()
    {
        
        return view('templates/principal');
        
    }

    public function listar()
    {
        $listar = new AlunoModel();
        //print_r($listar->find());
        $data['listar'] = $listar->find();
        return view('templates/listar', $data);
    }

    public function cadastrar()
    {
        return view('templates/cadastro');
    }

    public function inserir()
    {
        
        $cadastrar = new AlunoModel();
        $cadastrar ->set('nome', $this->request->getPost('nome'));
        $cadastrar ->set('endereco', $this->request->getPost('endereco'));
        $cadastrar ->set('email', $this->request->getPost('email'));
        $cadastrar ->set('senha', $this->request->getPost('senha'));
        
        $cadastrar->insert();
        
        return redirect('/');
    }
}
