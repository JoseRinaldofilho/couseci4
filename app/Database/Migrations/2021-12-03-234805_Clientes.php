<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Clientes extends Migration
{
    public function up()
    {

        $this->forge->addField([
            'id_cliente' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'data_de_nascimento' => [
                'type' => 'DATE',
                
            ],            
            'cpf' => [
                'type' => 'VARCHAR',
                'constraint' => 11,
            ],

            'telefone' => [
                'type' => 'VARCHAR',
                'constraint' => 11,
            ],

            'endereco' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
            ],

            'limite_de_credito' => [
                'type' => 'DOUBLE',
               
            ],

            'dia_de_pagamento' => [
                'type' => 'INT',
               
            ],





            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_cliente', true);
        $this->forge->createTable('clientes');
    }

    public function down()
    {
        $this->forge->dropTable('clientes');
    }
}
