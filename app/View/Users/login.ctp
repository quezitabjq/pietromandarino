<h2><?php echo __('Login'); ?></h2>
    <?php echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login')));?>
        <fieldset>
        <?php
            echo $this->Form->input('username',array('label'=> 'Usuário:'));
            echo $this->Form->input('password',array('label'=> 'Senha:'));
        ?>
        </fieldset>
    <?php echo $this->Form->end('Entrar');?>