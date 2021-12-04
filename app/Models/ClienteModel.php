<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{
    protected $table      = 'clientes';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_cliente';
    protected $allowedFields = [
        'id_cliente',
        'nome',
        'data_de_nascimento',
        'cpf',
        'telefone',
        'endereco',
        'limite_de_credito',
        'dia_de_pagamento'
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}
