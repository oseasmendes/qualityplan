<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typeticket[]|\Cake\Collection\CollectionInterface $typetickets
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Typeticket'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typetickets index large-9 medium-8 columns content">
    <h3><?= __('Typetickets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('departamento_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($typetickets as $typeticket): ?>
            <tr>
                <td><?= $this->Number->format($typeticket->id) ?></td>
                <td><?= h($typeticket->descricao) ?></td>
                <td><?= $typeticket->has('departamento') ? $this->Html->link($typeticket->departamento->id, ['controller' => 'Departamentos', 'action' => 'view', $typeticket->departamento->id]) : '' ?></td>
                <td><?= h($typeticket->created) ?></td>
                <td><?= h($typeticket->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $typeticket->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $typeticket->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $typeticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeticket->id)]) ?>
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
