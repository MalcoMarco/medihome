<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Especialidad $especialidad
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $especialidad->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $especialidad->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Especialidads'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Medicos'), ['controller' => 'Medicos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Medico'), ['controller' => 'Medicos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="especialidads form large-9 medium-8 columns content">
    <?= $this->Form->create($especialidad) ?>
    <fieldset>
        <legend><?= __('Edit Especialidad') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('estado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
