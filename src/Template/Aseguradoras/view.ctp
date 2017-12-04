<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aseguradora $aseguradora
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aseguradora'), ['action' => 'edit', $aseguradora->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aseguradora'), ['action' => 'delete', $aseguradora->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aseguradora->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Aseguradoras'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aseguradora'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="aseguradoras view large-9 medium-8 columns content">
    <h3><?= h($aseguradora->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($aseguradora->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($aseguradora->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($aseguradora->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($aseguradora->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Pacientes') ?></h4>
        <?php if (!empty($aseguradora->pacientes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Apaterno') ?></th>
                <th scope="col"><?= __('Amaterno') ?></th>
                <th scope="col"><?= __('Nacimiento') ?></th>
                <th scope="col"><?= __('Sexo') ?></th>
                <th scope="col"><?= __('Tipodoc') ?></th>
                <th scope="col"><?= __('Numdoc') ?></th>
                <th scope="col"><?= __('Telefono') ?></th>
                <th scope="col"><?= __('Direccion') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Aseguradora Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($aseguradora->pacientes as $pacientes): ?>
            <tr>
                <td><?= h($pacientes->id) ?></td>
                <td><?= h($pacientes->nombre) ?></td>
                <td><?= h($pacientes->apaterno) ?></td>
                <td><?= h($pacientes->amaterno) ?></td>
                <td><?= h($pacientes->nacimiento) ?></td>
                <td><?= h($pacientes->sexo) ?></td>
                <td><?= h($pacientes->tipodoc) ?></td>
                <td><?= h($pacientes->numdoc) ?></td>
                <td><?= h($pacientes->telefono) ?></td>
                <td><?= h($pacientes->direccion) ?></td>
                <td><?= h($pacientes->email) ?></td>
                <td><?= h($pacientes->aseguradora_id) ?></td>
                <td><?= h($pacientes->created) ?></td>
                <td><?= h($pacientes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pacientes', 'action' => 'view', $pacientes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pacientes', 'action' => 'edit', $pacientes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pacientes', 'action' => 'delete', $pacientes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacientes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
