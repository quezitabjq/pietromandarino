<?php

class TrabalhosController extends AppController {

    public $name = 'Trabalhos';

    public function index() {
        $this->layout = 'administrador';
        $this->paginate = array('limit' => '1'); //Paginação
        $trabalhos = $this->paginate('Trabalho');
        $this->set(compact('trabalhos'));
    }
    public function logos(){
    $this->set('trabalhos', $this->Trabalho->find('all',array(array('conditions'=> array('Trabalho.principal' => 1)))));   
    }

    public function add() {
        $this->layout = 'administrador';
        $this->loadModel('Categoria');
        $this->set('categorias', $this->Categoria->find('list', array('fields' => 'nomecategoria', 'order' => 'nomecategoria')));

        if (!empty($this->request->data)) {
         
            $this->Trabalho->save($this->request->data);
            $this->redirect(array('controller' => 'trabalhos', 'action' => 'index'));
        }
    }

    public function edit($id = null) {
        $this->layout = 'administrador';
        if ($id) {
            $this->loadModel('Categoria');
            $this->set('categorias', $this->Categoria->find('list', array('fields' => 'nome', 'order' => 'nome')));
            if ($this->data) {
                if ($this->Trabalho->save($this->data))
                    $this->Session->setFlash('Trabalho Editado com Sucesso');
                $this->redirect(array('controller' => 'trabalhos', 'action' => 'index'));
            }
        }
    }

    public function delete($id = null) {
        if ($id) {
            if ($this->Trabalho->delete($id))
                $this->Session->setFlash('Trabalho Excluído com Sucesso');
            $this->redirect(array('controller' => 'trabalhos', 'action' => 'index'));
        }
    }

    public function view($id = null) {
        $this->layout = 'administrador';

        if ($id) {
            $trabalho = $this->Trabalho->read(null, $id);
            $this->set(compact('trabalho'));
        }
    }

}

?>