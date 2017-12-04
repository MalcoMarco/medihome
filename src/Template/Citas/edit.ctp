<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cita $cita
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cita->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cita->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Citas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Medicos'), ['controller' => 'Medicos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Medico'), ['controller' => 'Medicos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="citas form large-9 medium-8 columns content">
    <?= $this->Form->create($cita) ?>
    <fieldset>
        <legend><?= __('Edit Cita') ?></legend>
        <?php
            echo $this->Form->control('dia');
            echo $this->Form->control('hora');
            echo $this->Form->control('estado');
            echo $this->Form->control('lugar');
            echo $this->Form->control('motivo');
            echo $this->Form->control('diagnostico');
            echo $this->Form->control('tratamiento');
            echo $this->Form->control('masdetalles');
            echo $this->Form->control('paciente_id', ['options' => $pacientes]);
            echo $this->Form->control('medico_id', ['options' => $medicos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
