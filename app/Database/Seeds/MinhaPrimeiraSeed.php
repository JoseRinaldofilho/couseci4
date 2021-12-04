<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MinhaPrimeiraSeed extends Seeder
{
    public function run()
    {
        // infrima a tabela qeu quer trabalhar depois inserte
        $this->db->table('produtos')->insert([
        'nome'                 => 'MecBook',
        'descricao'          => 'Descrição do produto para nossa primeira seed',
        'valor_de_compra'   => 9299.90,
        'valor_de_venda'    => 1599.90,
        'quantidade'        => 1,
        'validade'          => '',
        ]); // passa um array
    }
}
