<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of categoriasController
 *
 * @author Que
 */
class CategoriasController extends AppController {
    public $name= 'Categorias';
    public function index(){
        $this->layout = 'administrador'; 

        $this->paginate=array('limit'=>'2');//Paginação
        $categorias = $this->paginate('Categoria');
        $this->set(compact('categorias'));
    }
    

    public function  add(){
           $this->layout = 'administrador'; 

        if($this->data){
            if($this->Categoria->save($this->data))
                $this->Session->setFlash ('Categoria Adicionada com Sucesso');
            $this->data = array();//Limpa os Campos
        }
       
    }
    
    public function edit($id=null){
           $this->layout = 'administrador'; 

        if($this->data){
            if($this->Categoria->save($this->data))
            $this->Session->setFlash('Categoria Editada com Sucesso');
        $this->redirect(array('controller'=>'categorias','action'=>'index'));
        }else{
            $this->data=$this->Categoria->read(null,$id);
        }
    }
    
    public function delete($id=null){
        

        if($id){
            if($this->Categoria->delete($id))
            $this->Session->setFlash('Categoria Excluída com Sucesso');  
           $this->redirect(array('controller'=>'categorias','action'=>'index'));  
        }
    }
    public function view ($id=null){
             $this->layout = 'administrador'; 

        if($id)
        {
            $categoria =  $this->Categoria->read(null,$id);
            $this->set(compact('categoria'));
        }
    }
}

?>
