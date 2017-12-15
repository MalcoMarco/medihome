<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paciente[]|\Cake\Collection\CollectionInterface $pacientes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aseguradoras'), ['controller' => 'Aseguradoras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aseguradora'), ['controller' => 'Aseguradoras', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Citas'), ['controller' => 'Citas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cita'), ['controller' => 'Citas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pacientes index large-9 medium-8 columns content">
    <h3><?= __('Pacientes') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table-responsive">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col" style="padding-right: 40px"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col" style="padding-right: 40px"><?= $this->Paginator->sort('apaterno') ?></th>
                <th scope="col" style="padding-right: 40px"><?= $this->Paginator->sort('amaterno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nacimiento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sexo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipodoc') ?></th>
                <th scope="col" style="padding-right: 30px"><?= $this->Paginator->sort('numdoc') ?></th>
                <th scope="col" style="padding-right: 30px"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col" style="padding-right: 30px"><?= $this->Paginator->sort('direccion') ?></th>
                <th scope="col" style="padding-right: 99px"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aseguradora_id') ?></th>
                <th scope="col" style="padding-right: 40px"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" style="padding-right: 40px"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions" style="padding-right: 80px"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pacientes as $paciente): ?>
            <tr>
                <td><?= $this->Number->format($paciente->id) ?></td>
                <td><?= h($paciente->nombre) ?></td>
                <td><?= h($paciente->apaterno) ?></td>
                <td><?= h($paciente->amaterno) ?></td>
                <td><?= h($paciente->nacimiento) ?></td>
                <td><?= h($paciente->sexo) ?></td>
                <td><?= h($paciente->tipodoc) ?></td>
                <td><?= h($paciente->numdoc) ?></td>
                <td><?= h($paciente->telefono) ?></td>
                <td><?= h($paciente->direccion) ?></td>
                <td><?= h($paciente->email) ?></td>
                <td><?= $paciente->has('aseguradora') ? $this->Html->link($paciente->aseguradora->id, ['controller' => 'Aseguradoras', 'action' => 'view', $paciente->aseguradora->id]) : '' ?></td>
                <td><?= h($paciente->created) ?></td>
                <td><?= h($paciente->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $paciente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paciente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paciente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paciente->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
