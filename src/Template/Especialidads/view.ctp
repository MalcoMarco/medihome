<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Especialidad $especialidad
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Especialidad'), ['action' => 'edit', $especialidad->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Especialidad'), ['action' => 'delete', $especialidad->id], ['confirm' => __('Are you sure you want to delete # {0}?', $especialidad->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Especialidads'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Especialidad'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Medicos'), ['controller' => 'Medicos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medico'), ['controller' => 'Medicos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="especialidads view large-9 medium-8 columns content">
    <h3><?= h($especialidad->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($especialidad->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($especialidad->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($especialidad->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($especialidad->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($especialidad->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($especialidad->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Medicos') ?></h4>
        <?php if (!empty($especialidad->medicos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Codigo') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Apaterno') ?></th>
                <th scope="col"><?= __('Amaterno') ?></th>
                <th scope="col"><?= __('Nacimiento') ?></th>
                <th scope="col"><?= __('Sexo') ?></th>
                <th scope="col"><?= __('Estado') ?></th>
                <th scope="col"><?= __('Dni') ?></th>
                <th scope="col"><?= __('Telefono') ?></th>
                <th scope="col"><?= __('Direccion') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Especialidad Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($especialidad->medicos as $medicos): ?>
            <tr>
                <td><?= h($medicos->id) ?></td>
                <td><?= h($medicos->codigo) ?></td>
                <td><?= h($medicos->nombre) ?></td>
                <td><?= h($medicos->apaterno) ?></td>
                <td><?= h($medicos->amaterno) ?></td>
                <td><?= h($medicos->nacimiento) ?></td>
                <td><?= h($medicos->sexo) ?></td>
                <td><?= h($medicos->estado) ?></td>
                <td><?= h($medicos->dni) ?></td>
                <td><?= h($medicos->telefono) ?></td>
                <td><?= h($medicos->direccion) ?></td>
                <td><?= h($medicos->email) ?></td>
                <td><?= h($medicos->especialidad_id) ?></td>
                <td><?= h($medicos->created) ?></td>
                <td><?= h($medicos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Medicos', 'action' => 'view', $medicos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Medicos', 'action' => 'edit', $medicos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Medicos', 'action' => 'delete', $medicos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medicos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
