<?php foreach ($trabalhos as $trabalho) { ?>
    <div id="miniatura">
       
         <a href="">
<img src="<?=$this->Html->webroot("files/trabalho/photo/".$trabalho['Trabalho']['photo_dir']."/".$trabalho['Trabalho']['photo'])?>"/>
    </a>
    </div>
<?php } ?> 