<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>Pietro Mandarino</title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css(array('style', 'CadastroCategoria', 'table'));
        echo $this->Html->script(array('bootstrap', 'bootstrap.min', 'jquery.epAjaxUpload','jquery'));
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <div id="fita"></div>

                <div id="logo"><a href="index.html"> <?php echo $this->Html->image('logo.png');
                        ?></a></div>
                <div id="contato"><div id="social"></div> <?php echo $this->Html->image('acesso_restrito.png');
                        ?></div></div>
                <div id="clear"></div>
            </div>
            <div id="espaco"></div>
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