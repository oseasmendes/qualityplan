<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Doc[]|\Cake\Collection\CollectionInterface $docs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Doc'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actions'), ['controller' => 'Actions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Action'), ['controller' => 'Actions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="docs index large-9 medium-8 columns content">
    <h3><?= __('Docs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('documentotipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numerodoc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataemissao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proposito') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsavel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricaoresumida') ?></th>
                <th scope="col"><?= $this->Paginator->sort('action_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($docs as $doc): ?>
            <tr>
                <td><?= $this->Number->format($doc->id) ?></td>
                <td><?= h($doc->documentotipo) ?></td>
                <td><?= h($doc->numerodoc) ?></td>
                <td><?= h($doc->dataemissao) ?></td>
                <td><?= h($doc->proposito) ?></td>
                <td><?= h($doc->responsavel) ?></td>
                <td><?= h($doc->descricaoresumida) ?></td>
                <td><?= $doc->has('action') ? $this->Html->link($doc->action->id, ['controller' => 'Actions', 'action' => 'view', $doc->action->id]) : '' ?></td>
                <td><?= h($doc->created) ?></td>
                <td><?= h($doc->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $doc->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $doc->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $doc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $doc->id)]) ?>
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
