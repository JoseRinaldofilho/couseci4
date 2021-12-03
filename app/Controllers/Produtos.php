<?php

namespace App\Controllers;

use App\Models\ProdutoModel;
use CodeIgniter\Controller;

class Produtos extends Controller
{
    public function index()
    {
        $titulo = '<h2>Meus Produtos</h2>';
        $produtos = [
            [
                'nome'          => "NotBook",
                'descricao'      => "Produto Usado",
                'valor_de_compra' => 899.99,
                'valor_de_venda' => 1399.90,
                'quantidade'     => 11,
                'validade'       => ''
            ],
            [
                'nome'          => "Computador I7",
                'descricao'      => "Produto Novo",
                'valor_de_compra' => 1099.99,
                'valor_de_venda' => 1899.90,
                'quantidade'     => 1,
                'validade'       => ''
            ],
            [
                'nome'          => "Computador I7",
                'descricao'      => "Produto Novo",
                'valor_de_compra' => 3099.99,
                'valor_de_venda' => 17899.90,
                'quantidade'     => 2,
                'validade'       => '2090'
            ]
        ];
        // mdan para views
        $data['titulo'] = $titulo;
        $data['produtos'] = $produtos;
        echo view('produtos/index', $data, $produtos);
    }
    public function novo()
    {
        echo "Novo produto";
    }

    public function model()
    {
        $produto_model = new ProdutoModel();

        $produto = $produto_model->findAll();

        dd($produto);
    }


}
