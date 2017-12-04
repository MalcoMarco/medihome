<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aseguradora $aseguradora
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aseguradora->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aseguradora->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Aseguradoras'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="aseguradoras form large-9 medium-8 columns content">
    <?= $this->Form->create($aseguradora) ?>
    <fieldset>
        <legend><?= __('Edit Aseguradora') ?></legend>
        <?php
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
