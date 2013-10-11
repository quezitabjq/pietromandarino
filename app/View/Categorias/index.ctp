<h1>Listagem de Categorias</h1>
<div class="CSSTableGenerator">
<table>
    <tr>
        <td>Página</td>
        <td>Nome</td> 
        <td>Criado</td>
        <td>Editado</td>
        <td>Ações</td>
    </tr>
    <? foreach ($categorias as $categoria):?>
    <tr> 
    <td><?=$categoria['Categoria']['pagina']?></td>
        <td><?=$categoria['Categoria']['nomecategoria']?></td>
        <td><?=$categoria['Categoria']['created']?></td>
        <td><?=$categoria['Categoria']['modified']?></td>
        <td>
         
            <?=$this->Html->link('Deletar',array('controller'=>'categorias','action'=>'delete',$categoria['Categoria']['id'])
                    ,null,'Deseja Excluir essa Categoria #'.$categoria['Categoria']['nomecategoria'].'?');?> |
            <?=$this->Html->link('Visualizar',array('controller'=>'categorias','action'=>'view',$categoria['Categoria']['id']));?> 
        </td>
    </tr>
        <?  endforeach;?>
</table>
    </div>
<br/>
 <? echo $this->Paginator->prev('Anterior |') ,
         $this->Paginator->next('Próximo');?>
<br/>
<br/>
<?=$this->Html->link('Adicionar Categoria',array('controller'=>'categorias','action'=>'add'));?>