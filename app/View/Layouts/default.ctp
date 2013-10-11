<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>Pietro Mandarino</title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css(array('style','CadastroCategoria','table'));

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <div id="fita"></div>

                <div id="logo">   <?php echo $this->Html->image('logo.png');
                        ?></div>
                <div id="contato"><div id="social">
                        <a href="http://twitter.com">  <?php echo $this->Html->image('twitter.png');
                        ?></a>
                        <a href="https://www.facebook.com/pietromandarino12"><?php echo $this->Html->image('facebook.png');
                        ?>
                        </a><a href="http://instagram.com/"><?php echo $this->Html->image('instagram.png');
                        ?></a>
                    </div> 
                    <div id="email"> <?php echo $this->Html->image('contato.png');
                        ?>
                    </div>
                </div>
                <div id="clear"></div>

                <div id="menu">
                    <div class="logos"><a href="#"></a></div>
                    <div class="doisde"><a href="#"></a></div>
                    <div class="tresde"><a href="#"></a></div>
                </div>
            </div>
            <div id="content">

                <?php echo $this->Session->flash(); ?>

                <?php echo $this->fetch('content'); ?>
            </div>
            <div id="clear"></div>
            <div id="footer">
              
            </div>
        </div>

    </body>
</html>
