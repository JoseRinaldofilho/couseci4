<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model{
    protected $table      = 'undefined';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    public function cadastraRegistro()
    {
        echo "Módulo responsavel por cadastra todos os Registros do produto";
    }
}