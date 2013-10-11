<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of categoria
 *
 * @author Que
 */
class Categoria extends AppModel {
    public $name='Categoria';
    public $hasMany =array('Trabalho');
}

?>
