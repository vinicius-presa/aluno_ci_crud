<?php 

namespace App\Models;

use CodeIgniter\Model;


class ClientesModel extends Model
{
    protected $table = 'alunos';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['nome', 'endereco', 'img'];
    protected $returnType = 'object';

    
}

