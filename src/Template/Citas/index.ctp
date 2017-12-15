<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cita[]|\Cake\Collection\CollectionInterface $citas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cita'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Medicos'), ['controller' => 'Medicos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Medico'), ['controller' => 'Medicos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="citas index large-9 medium-8 columns content">
    <h3><?= __('Citas') ?></h3>
    <table cellpadding="0" cellspacing="0" class=" table table-responsive">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col" style="padding-right: 40px"><?= $this->Paginator->sort('dia') ?></th>
                <th scope="col" style="padding-right: 10px" ><?= $this->Paginator->sort('hora') ?></th>
                <th scope="col" style="padding-right: 40px"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col" style="padding-right: 40px"><?= $this->Paginator->sort('lugar') ?></th>
                <th scope="col" style="padding-right: 90px"><?= $this->Paginator->sort('motivo') ?></th>
                <th scope="col" style="padding-right: 40px"><?= $this->Paginator->sort('diagnostico') ?></th>
                <th scope="col" style="padding-right: 40px"><?= $this->Paginator->sort('tratamiento') ?></th>
                <th scope="col" style="padding-right: 40px"><?= $this->Paginator->sort('masdetalles') ?></th>
                <th scope="col" style="padding-right: 40px"><?= $this->Paginator->sort('paciente_id') ?></th>
                <th scope="col" style="padding-right: 40px"><?= $this->Paginator->sort('medico_id') ?></th>
                <th scope="col" style="padding-right: 80px"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" style="padding-right: 80px"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions" style="padding-right: 80px"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($citas as $cita): ?>
            <tr>
                <td><?= $this->Number->format($cita->id) ?></td>
                <td><?= h($cita->dia) ?></td>
                <td><?= h($cita->hora) ?></td>
                <td><?= h($cita->estado) ?></td>
                <td><?= h($cita->lugar) ?></td>
                <td><?= h($cita->motivo) ?></td>
                <td><?= h($cita->diagnostico) ?></td>
                <td><?= h($cita->tratamiento) ?></td>
                <td><?= h($cita->masdetalles) ?></td>
                <td><?= $cita->has('paciente') ? $this->Html->link($cita->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $cita->paciente->id]) : '' ?></td>
                <td><?= $cita->has('medico') ? $this->Html->link($cita->medico->id, ['controller' => 'Medicos', 'action' => 'view', $cita->medico->id]) : '' ?></td>
                <td><?= h($cita->created) ?></td>
                <td><?= h($cita->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cita->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cita->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cita->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cita->id)]) ?>
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
