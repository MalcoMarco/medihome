<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Especialidad[]|\Cake\Collection\CollectionInterface $especialidads
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Especialidad'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Medicos'), ['controller' => 'Medicos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Medico'), ['controller' => 'Medicos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="especialidads index large-9 medium-8 columns content">
    <h3><?= __('Especialidads') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($especialidads as $especialidad): ?>
            <tr>
                <td><?= $this->Number->format($especialidad->id) ?></td>
                <td><?= h($especialidad->nombre) ?></td>
                <td><?= h($especialidad->descripcion) ?></td>
                <td><?= h($especialidad->created) ?></td>
                <td><?= h($especialidad->modified) ?></td>
                <td><?= h($especialidad->estado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $especialidad->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $especialidad->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $especialidad->id], ['confirm' => __('Are you sure you want to delete # {0}?', $especialidad->id)]) ?>
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
