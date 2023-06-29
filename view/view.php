<?php $sobre = new mvc;?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Sobre MVC</title>
    </head>
    <body>
        <h1>Sobre MVC</h1>
        <p><b>Source:</b></p>
        <?php echo $sobre->openArray($sobre->sources()); ?>
        <p><?php echo $sobre->model(); ?></p>
        <p><?php echo $sobre->view(); ?></p>
        <p><?php echo $sobre->controller(); ?></p>
        <p><b>Os métodos são:</b></p>
        <p><?php echo $sobre->getMethods($sobre); ?></p>
        <p><b>A Classe é:</b></p>
        <p><?php echo $sobre->getClass($sobre); ?></p>
    </body>
</html>