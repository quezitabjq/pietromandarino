<h1>Visualizando Categoria</h1>

<h2>Nome da Categoria:<?=$categoria['Categoria']['nomecategoria']?></h2>
<p>Pagina: <?=$categoria['Categoria']['pagina']?></p>

<br/>
<?= $this->Html->link('Listagem de Categorias', array('controller' => 'categorias', 'action' => 'index')); ?>