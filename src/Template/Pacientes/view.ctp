<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paciente $paciente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Paciente'), ['action' => 'edit', $paciente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paciente'), ['action' => 'delete', $paciente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paciente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paciente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Aseguradoras'), ['controller' => 'Aseguradoras', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aseguradora'), ['controller' => 'Aseguradoras', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Citas'), ['controller' => 'Citas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cita'), ['controller' => 'Citas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pacientes view large-9 medium-8 columns content">
    <h3><?= h($paciente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($paciente->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apaterno') ?></th>
            <td><?= h($paciente->apaterno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amaterno') ?></th>
            <td><?= h($paciente->amaterno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= h($paciente->sexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipodoc') ?></th>
            <td><?= h($paciente->tipodoc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numdoc') ?></th>
            <td><?= h($paciente->numdoc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($paciente->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($paciente->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($paciente->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aseguradora') ?></th>
            <td><?= $paciente->has('aseguradora') ? $this->Html->link($paciente->aseguradora->id, ['controller' => 'Aseguradoras', 'action' => 'view', $paciente->aseguradora->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($paciente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nacimiento') ?></th>
            <td><?= h($paciente->nacimiento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($paciente->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($paciente->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Citas') ?></h4>
        <?php if (!empty($paciente->citas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Dia') ?></th>
                <th scope="col"><?= __('Hora') ?></th>
                <th scope="col"><?= __('Estado') ?></th>
                <th scope="col"><?= __('Lugar') ?></th>
                <th scope="col"><?= __('Motivo') ?></th>
                <th scope="col"><?= __('Diagnostico') ?></th>
                <th scope="col"><?= __('Tratamiento') ?></th>
                <th scope="col"><?= __('Masdetalles') ?></th>
                <th scope="col"><?= __('Paciente Id') ?></th>
                <th scope="col"><?= __('Medico Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($paciente->citas as $citas): ?>
            <tr>
                <td><?= h($citas->id) ?></td>
                <td><?= h($citas->dia) ?></td>
                <td><?= h($citas->hora) ?></td>
                <td><?= h($citas->estado) ?></td>
                <td><?= h($citas->lugar) ?></td>
                <td><?= h($citas->motivo) ?></td>
                <td><?= h($citas->diagnostico) ?></td>
                <td><?= h($citas->tratamiento) ?></td>
                <td><?= h($citas->masdetalles) ?></td>
                <td><?= h($citas->paciente_id) ?></td>
                <td><?= h($citas->medico_id) ?></td>
                <td><?= h($citas->created) ?></td>
                <td><?= h($citas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Citas', 'action' => 'view', $citas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Citas', 'action' => 'edit', $citas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Citas', 'action' => 'delete', $citas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $citas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
