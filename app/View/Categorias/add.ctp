        <h1>Nova categoria:</h1>
        <?
        echo $this->Form->create('Categoria', array('action' => 'add')),
        $options = array(1 => 'Logos', 2 => 'Jobs 2D',3=> 'Jobs 3D' ),
        $this->Form->select('pagina', $options, array('label' =>'Pagina')), 
        $this->Form->input('nomecategoria',array('label' => 'Descrição:')),
        $this->Form->end('Cadastrar');
        ?>

        <br/>
        <?= $this->Html->link('Listagem de Categorias', array('controller' => 'categorias', 'action' => 'index')); ?>