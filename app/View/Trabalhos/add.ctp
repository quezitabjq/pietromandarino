
<h1>Nova Trabalho:</h1>

 
 <?php
echo $this->Form->create("Trabalho",array("type"=>"file","controller"=>"trabalhos","action"=>"add","admin"=>true));
?>
<table style="margin-left: 200px;">
    <tr>
        <td>Categoria</td>
        <td><?  echo $this->Form->input('categoria_id', array('options' => $categorias, 'empty' => 'Selecione uma Categoria','label'=>false));?></td>
    </tr>
    <tr>
        <td>Legenda</td>
        <td><?php echo $this->Form->input("legenda",array("label"=>false));?></td>
    </tr>
    <tr>
        <td>Destaque:</td>
        <td style="alignment-adjust:auto;"><?php echo $this->Form->checkbox("principal",array("label"=>false));?></td>
    </tr>
     <tr>
        <td>Imagens</td>
        <td>
        <?php echo $this->Form->input('photo', array('type' => 'file','label'=>false)); ?>
    <?php echo $this->Form->input('photo_dir', array('type' => 'hidden')); ?>  
        </td>
    </tr>
</table>
<br/>
<?php echo $this->Form->end("Cadastrar");?>

<br/>
<?= $this->Html->link('Listagem de Trabalhos', array('controller' => 'trabalhos', 'action' => 'index')); ?>