<?php

namespace App\Models;

use CodeIgniter\Model;


class AlunoModel extends Model
{
    protected $table = 'aluno_cadastro';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome', 'endereco', 'email', 'senha'];
    protected $returnType = 'object';
}
