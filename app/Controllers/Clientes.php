<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\ClientesModel;

class Clientes extends BaseController
{
    private $model;  
    public function __construct()
    {
        $this->model = new ClientesModel();
    }    

    public function index()
    {
       return view('clientes/clientes_home');
    }

    public function cadastro()
    {
        
        helper('form');
        $data['action'] = 'cadastro';
    
        if( $this->request->getMethod() === 'post' ){
          
            $this->model->set('img', base64_encode( file_get_contents( addslashes( $this->request->getFile('img') ) ) ));
            $this->model->set('nome', $this->request->getPost('nome') );
            $this->model->set('endereco', $this->request->getPost('endereco') );
        
            $res = $this->model->insert();

            if($res){
                $data['msg'] = 'Aluno Cadastrado com Sucesso';
                return $this->dados($res, $data);                 
            }else{
                throw new \CodeIgniter\Exceptions\PageNotFoundException('Não foi possível realizar cadastrar' );
            }
          
        }
        return view('clientes/clientes_form', $data);    
       
    }


    public function dados($id, $data = null)
    {
                
        $data['result'] = $this->model->find($id);
        isset($data['msg']) ? '' : $data['display'] = 'none';
               
        return view('clientes/clientes_dados', $data);

    }

    public function listar()
    {
 
        $data['result'] = $this->model->find();
        $data['count'] = $this->model->countAll();
        
         

        return view('clientes/clientes_listar', $data);
       
    }

    public function alterar($id = null)
    {
        helper('form');
        $data['result'] = $this->model->find($id);
        $data['action'] = 'alterar';
        if( $this->request->getMethod() === 'post' ){
            if(! empty( addslashes( $this->request->getFile('img') )) ) {
                 $dados['img'] = base64_encode( file_get_contents( addslashes( $this->request->getFile('img') ) ) );
            }
            
            $id = $this->request->getPost('id') ;
            $dados['nome'] = $this->request->getPost('nome') ;
            $dados['endereco'] = $this->request->getPost('endereco') ;
            if ($this->model->update($id, $dados)){
                $data['msg'] = 'Aluno Alterado com Sucesso';
                
                return $this->dados($id, $data); 
            }else{
                throw new \CodeIgniter\Exceptions\PageNotFoundException('Não foi possível realizar alteração' );
            }
                        
        }
        return view('clientes/clientes_form', $data );    
           
    }

    public function excluir($id = null) 
    {
        if($this->model->delete($id)){
            return view('clientes/clientes_home');   
        }else{
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Não foi possível excluir' );
        }
           

        
    }


}
