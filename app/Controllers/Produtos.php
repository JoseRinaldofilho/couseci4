<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Produtos extends Controller{

    public function index()
    {
        $titulo = '<h2>Meus Produtos</h2>';
        // mdan para views
        $data['titulo'] = $titulo;
        echo view('produtos/index', $data);
    }
    public function novo()
    {
        echo "Novo produto";
    }
}