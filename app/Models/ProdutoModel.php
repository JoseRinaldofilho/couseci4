<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model{
   protected $table = 'produtos';
   protected $primaryKey = 'id_produto';
   
   protected $useAutoIncrement = true;
   
   protected $returnType = 'array';
   protected $useSoftDeletes = false;
   
   protected $allowedFields = [
      'id_produto',
      'name',
      'descricao',
      'valor_de_compra',
      'valor_de_venda',
      'quantidade',
      'validade'

   ];
   
    protected $useTimestamps = true;
   protected $createdField = 'created_at';
   protected $updatedField = 'updated_at';
   protected $deletedField = 'deleted_at';
   
   protected $validationRules = [];
   protected $validationMessages = [];
   protected $skipValidation = false;
   
}