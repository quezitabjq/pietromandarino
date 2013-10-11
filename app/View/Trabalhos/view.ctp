<h2>Legenda:<?=$trabalho['Trabalho']['legenda']?></h2>
<p>Categoria: <?=$trabalho['Trabalho']['categoria_id']?></p>
Imagem:
<div id="miniatura">
    <a href="">
<img src="<?=$this->Html->webroot("files/trabalho/photo/".$trabalho['Trabalho']['photo_dir']."/".$trabalho['Trabalho']['photo'])?>"/>
    </a>
</div>