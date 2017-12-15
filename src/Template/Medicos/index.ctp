<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medico[]|\Cake\Collection\CollectionInterface $medicos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Medico'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Especialidads'), ['controller' => 'Especialidads', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Especialidad'), ['controller' => 'Especialidads', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Citas'), ['controller' => 'Citas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cita'), ['controller' => 'Citas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="medicos index large-9 medium-8 columns content">
    <h3><?= __('Medicos') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table-responsive">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col" style="padding-right: 40px"><?= $this->Paginator->sort('codigo') ?></th>
                <th scope="col" style="padding-right: 40px"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col" style="padding-right: 40px"><?= $this->Paginator->sort('apaterno') ?></th>
                <th scope="col" style="padding-right: 40px"><?= $this->Paginator->sort('amaterno') ?></th>
                <th scope="col" style="padding-right: 40px"><?= $this->Paginator->sort('nacimiento') ?></th>
                <th scope="col" style="padding-right: 40px"><?= $this->Paginator->sort('sexo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col" style="padding-right: 80px"><?= $this->Paginator->sort('dni') ?></th>
                <th scope="col" style="padding-right: 40px"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col" style="padding-right: 40px"><?= $this->Paginator->sort('direccion') ?></th>
                <th scope="col" style="padding-right: 80px"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col" style="padding-right: 40px"><?= $this->Paginator->sort('especialidad_id') ?></th>
                <th scope="col" style="padding-right: 60px"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" style="padding-right: 80px"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions" style="padding-right: 90px"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($medicos as $medico): ?>
            <tr>
                <td><?= $this->Number->format($medico->id) ?></td>
                <td><?= h($medico->codigo) ?></td>
                <td><?= h($medico->nombre) ?></td>
                <td><?= h($medico->apaterno) ?></td>
                <td><?= h($medico->amaterno) ?></td>
                <td><?= h($medico->nacimiento) ?></td>
                <td><?= h($medico->sexo) ?></td>
                <td><?= $this->Number->format($medico->estado) ?></td>
                <td><?= h($medico->dni) ?></td>
                <td><?= h($medico->telefono) ?></td>
                <td><?= h($medico->direccion) ?></td>
                <td><?= h($medico->email) ?></td>

                <td><?= $medico->has('especialidad') ? $this->Html->link($medico->especialidad->nombre, ['controller' => 'Especialidads', 'action' => 'view', $medico->especialidad->id]) : '' ?></td>
                <td><?= h($medico->created) ?></td>
                <td><?= h($medico->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $medico->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $medico->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $medico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medico->id)]) ?>
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
