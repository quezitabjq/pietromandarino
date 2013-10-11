<h1>Listagem de Trabalhos</h1>
<div class="CSSTableGenerator">
    <table>
        <tr>
            <td>Categoria</td>
            <td>Legenda</td> 
            <td>Principal</td>
             <td>Imagem</td>
            <td>Ações</td>
        </tr>
        <? foreach ($trabalhos as $trabalho): ?>
            <tr> 
                <td><?= $trabalho['Trabalho']['categoria_id'] ?></td>
                <td><?= $trabalho['Trabalho']['legenda'] ?></td>
                <td><?= $trabalho['Trabalho']['principal'] ?></td>
                <td><div id="miniatura2">
                        <a href="">
                            <img src="<?= $this->Html->webroot("files/trabalho/photo/" . $trabalho['Trabalho']['photo_dir'] . "/" . $trabalho['Trabalho']['photo']) ?>"/>
                        </a>
                    </div></td>
                <td>

                    <?=
                    $this->Html->link('Deletar', array('controller' => 'trabalhos', 'action' => 'delete', $trabalho['Trabalho']['id'])
                            , null, 'Deseja Excluir esse trabalho #' . $trabalho['Trabalho']['legenda'] . '?');
                    ?> |
    <?= $this->Html->link('Visualizar', array('controller' => 'trabalhos', 'action' => 'view', $trabalho['Trabalho']['id'])); ?> 
                </td>
            </tr>
<? endforeach; ?>
    </table>
</div>
<br/>
<?
echo $this->Paginator->prev('Anterior |'),
 $this->Paginator->next('Próximo');
?>
<br/>

<?= $this->Html->link('Adicionar  Trabalho', array('controller' => 'trabalhos', 'action' => 'add')); ?>