<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of trabalho
 *
 * @author Que
 */
class trabalho extends AppModel {

    public $name = 'Trabalho';
    public $belongsTo = array('Categoria');
    public $actsAs = array(
        'Upload.Upload' => array(
            'photo' => array(
                'fields' => array(
                    'dir' => 'photo_dir'
                )
            )
        )
    );

    public function listarPrincipais(){
        $params = array(
            'conditions' => array('Trabalho.principal' => 1),
            'order' => array('Trabalho.categoria_id' => 'DESC'),
            'limit' => 12
        );
        $principais = $this->Trabalho->find('list', $params);
    }

}

?>
