<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actiontype $actiontype
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Actiontype'), ['action' => 'edit', $actiontype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Actiontype'), ['action' => 'delete', $actiontype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actiontype->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Actiontypes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actiontype'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actions'), ['controller' => 'Actions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Action'), ['controller' => 'Actions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="actiontypes view large-9 medium-8 columns content">
    <h3><?= h($actiontype->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($actiontype->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($actiontype->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($actiontype->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($actiontype->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Actions') ?></h4>
        <?php if (!empty($actiontype->actions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Tipoacao') ?></th>
                <th scope="col"><?= __('Dataprevista') ?></th>
                <th scope="col"><?= __('Ticket Id') ?></th>
                <th scope="col"><?= __('Descricaoresumida') ?></th>
                <th scope="col"><?= __('Descricaocompleta') ?></th>
                <th scope="col"><?= __('Responsavel') ?></th>
                <th scope="col"><?= __('Actiontype Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($actiontype->actions as $actions): ?>
            <tr>
                <td><?= h($actions->id) ?></td>
                <td><?= h($actions->data) ?></td>
                <td><?= h($actions->tipoacao) ?></td>
                <td><?= h($actions->dataprevista) ?></td>
                <td><?= h($actions->ticket_id) ?></td>
                <td><?= h($actions->descricaoresumida) ?></td>
                <td><?= h($actions->descricaocompleta) ?></td>
                <td><?= h($actions->responsavel) ?></td>
                <td><?= h($actions->actiontype_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Actions', 'action' => 'view', $actions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Actions', 'action' => 'edit', $actions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Actions', 'action' => 'delete', $actions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
