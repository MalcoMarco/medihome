<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medico $medico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $medico->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $medico->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Medicos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Especialidads'), ['controller' => 'Especialidads', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Especialidad'), ['controller' => 'Especialidads', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Citas'), ['controller' => 'Citas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cita'), ['controller' => 'Citas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="medicos form large-9 medium-8 columns content">
    <?= $this->Form->create($medico) ?>
    <fieldset>
        <legend><?= __('Edit Medico') ?></legend>
        <?php
            echo $this->Form->control('codigo');
            echo $this->Form->control('nombre');
            echo $this->Form->control('apaterno');
            echo $this->Form->control('amaterno');
            echo $this->Form->control('nacimiento', ['empty' => true]);
            echo $this->Form->control('sexo');
            echo $this->Form->control('estado');
            echo $this->Form->control('dni');
            echo $this->Form->control('telefono');
            echo $this->Form->control('direccion');
            echo $this->Form->control('email');
            echo $this->Form->control('especialidad_id', ['options' => $especialidads, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
