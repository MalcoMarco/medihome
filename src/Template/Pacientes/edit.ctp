<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paciente $paciente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $paciente->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $paciente->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Aseguradoras'), ['controller' => 'Aseguradoras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aseguradora'), ['controller' => 'Aseguradoras', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Citas'), ['controller' => 'Citas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cita'), ['controller' => 'Citas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pacientes form large-9 medium-8 columns content">
    <?= $this->Form->create($paciente) ?>
    <fieldset>
        <legend><?= __('Edit Paciente') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('apaterno');
            echo $this->Form->control('amaterno');
            echo $this->Form->control('nacimiento', ['empty' => true]);
            echo $this->Form->control('sexo');
            echo $this->Form->control('tipodoc');
            echo $this->Form->control('numdoc');
            echo $this->Form->control('telefono');
            echo $this->Form->control('direccion');
            echo $this->Form->control('email');
            echo $this->Form->control('aseguradora_id', ['options' => $aseguradoras, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
