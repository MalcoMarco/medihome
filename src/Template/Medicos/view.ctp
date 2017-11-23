<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medico $medico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Medico'), ['action' => 'edit', $medico->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Medico'), ['action' => 'delete', $medico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medico->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Medicos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medico'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Especialidads'), ['controller' => 'Especialidads', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Especialidad'), ['controller' => 'Especialidads', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Citas'), ['controller' => 'Citas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cita'), ['controller' => 'Citas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="medicos view large-9 medium-8 columns content">
    <h3><?= h($medico->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= h($medico->codigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($medico->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apaterno') ?></th>
            <td><?= h($medico->apaterno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amaterno') ?></th>
            <td><?= h($medico->amaterno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= h($medico->sexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dni') ?></th>
            <td><?= h($medico->dni) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($medico->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($medico->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($medico->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Especialidad') ?></th>
            <td><?= $medico->has('especialidad') ? $this->Html->link($medico->especialidad->id, ['controller' => 'Especialidads', 'action' => 'view', $medico->especialidad->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($medico->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $this->Number->format($medico->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nacimiento') ?></th>
            <td><?= h($medico->nacimiento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($medico->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($medico->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Citas') ?></h4>
        <?php if (!empty($medico->citas)): ?>
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
            <?php foreach ($medico->citas as $citas): ?>
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
