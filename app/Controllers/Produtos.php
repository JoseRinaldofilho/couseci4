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
        echo "Esse dados ven da model(banco de dados  ou migration)";
        $produto_model = new ProdutoModel();
        //busca
        // $produto = $produto_model->findAll();// first , insert, updated, delete

        // busca id
       // $produto = $produto_model->where('id_produto', 1)->first();//  insert, updated, delete

        //inseri 
        // $produto_model->insert([
        //     'nome'  =>'produto texte',
        //     'descricao' =>'produto Novo',
        //     'valor_de_compra' => 199,
        //     'valor_de_venda' => 500,
        //     'quantidade'       =>10,
        //     'validade'       => ''

        // ]);//   updated, delete
       // dd($produto_model);

            // atualiza
        
        //     $dados = [
        //         'nome'          => "IPHONE I7",
        //         'descricao'      => "Produto ",
        //         'valor_de_compra' => 3099.99,
        //         'valor_de_venda' => 17899.90,
        //         'quantidade'     => 2,
        //         'validade'       => '2090'
        
        //         ];
        // $produto_model
        // ->where('id_produto', 4)
        // ->set($dados)// esse set e doados    
        // ->update(); // delete

        // DELETE 

            

            $produto_model
            ->where('id_produto', 4)
            ->delete();

      //  dd($produto);
    }
}
