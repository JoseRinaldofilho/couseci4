<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ClienteModel;
class Cliente extends Controller{

    
    public function index()
    {
        /**
         * usa a model cliente
         */
        $clinete_model =  new ClienteModel();

        $clientes = $clinete_model->findAll();

        $data['clientes'] = $clientes;

        echo view('clientes/index', $data);
    
    }
    
    // public function show($id = null)
    // {
    //     \show code
    // }
    
    // public function new()
    // {
    //     \new code
    // }
    
    // public function create()
    // {
    //     \create code
    // }
    
    // public function edit($id = null)
    // {
    //     \edit code
    // }
    
    // public function update($id = null)
    // {
    //     \update code
    // }
    
    // public function delete($id = null)
    // {
    //     \delete code
    // }
}