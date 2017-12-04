<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cita $cita
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cita'), ['action' => 'edit', $cita->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cita'), ['action' => 'delete', $cita->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cita->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Citas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cita'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Medicos'), ['controller' => 'Medicos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medico'), ['controller' => 'Medicos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="citas view large-9 medium-8 columns content">
    <h3><?= h($cita->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Hora') ?></th>
            <td><?= h($cita->hora) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($cita->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lugar') ?></th>
            <td><?= h($cita->lugar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Motivo') ?></th>
            <td><?= h($cita->motivo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Diagnostico') ?></th>
            <td><?= h($cita->diagnostico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tratamiento') ?></th>
            <td><?= h($cita->tratamiento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Masdetalles') ?></th>
            <td><?= h($cita->masdetalles) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paciente') ?></th>
            <td><?= $cita->has('paciente') ? $this->Html->link($cita->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $cita->paciente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Medico') ?></th>
            <td><?= $cita->has('medico') ? $this->Html->link($cita->medico->id, ['controller' => 'Medicos', 'action' => 'view', $cita->medico->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cita->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dia') ?></th>
            <td><?= h($cita->dia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cita->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cita->modified) ?></td>
        </tr>
    </table>
</div>
