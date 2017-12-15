<?php
$cakeDescription = 'CakePHP';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <?php if (isset($current_user)): ?>
                    <li> <a href="/especialidads"> Especialidades</a> </li> 
                    <li><a href="/medicos"> Medicos</a></li>
                    <li><a href="/pacientes"> Pacientes</a></li>
                    <li><a href="/citas">Citas</a></li>
                    <li><a href="/users"> Usuarios</a></li>
                    <li><?=$this->Html->link('Cerrar Sesion',['controller'=>'Users','action'=>'logout']) ?> </li>                    
                <?php endif ?>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
