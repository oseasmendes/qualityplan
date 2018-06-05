<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Action $action
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Action'), ['action' => 'edit', $action->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Action'), ['action' => 'delete', $action->id], ['confirm' => __('Are you sure you want to delete # {0}?', $action->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Actions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Action'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actiontypes'), ['controller' => 'Actiontypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actiontype'), ['controller' => 'Actiontypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Docs'), ['controller' => 'Docs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Doc'), ['controller' => 'Docs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="actions view large-9 medium-8 columns content">
    <h3><?= h($action->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ticket') ?></th>
            <td><?= $action->has('ticket') ? $this->Html->link($action->ticket->descricaoresumida, ['controller' => 'Tickets', 'action' => 'view', $action->ticket->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricaoresumida') ?></th>
            <td><?= h($action->descricaoresumida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsavel') ?></th>
            <td><?= h($action->responsavel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actiontype') ?></th>
            <td><?= $action->has('actiontype') ? $this->Html->link($action->actiontype->descricao, ['controller' => 'Actiontypes', 'action' => 'view', $action->actiontype->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($action->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($action->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataprevista') ?></th>
            <td><?= h($action->dataprevista) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricaocompleta') ?></h4>
        <?= $this->Text->autoParagraph(h($action->descricaocompleta)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Docs') ?></h4>
        <?php if (!empty($action->docs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Documentotipo') ?></th>
                <th scope="col"><?= __('Numerodoc') ?></th>
                <th scope="col"><?= __('Dataemissao') ?></th>
                <th scope="col"><?= __('Proposito') ?></th>
                <th scope="col"><?= __('Responsavel') ?></th>
                <th scope="col"><?= __('Descricaoresumida') ?></th>
                <th scope="col"><?= __('Action Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($action->docs as $docs): ?>
            <tr>
                <td><?= h($docs->id) ?></td>
                <td><?= h($docs->documentotipo) ?></td>
                <td><?= h($docs->numerodoc) ?></td>
                <td><?= h($docs->dataemissao) ?></td>
                <td><?= h($docs->proposito) ?></td>
                <td><?= h($docs->responsavel) ?></td>
                <td><?= h($docs->descricaoresumida) ?></td>
                <td><?= h($docs->action_id) ?></td>
                <td><?= h($docs->created) ?></td>
                <td><?= h($docs->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Docs', 'action' => 'view', $docs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Docs', 'action' => 'edit', $docs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Docs', 'action' => 'delete', $docs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $docs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
