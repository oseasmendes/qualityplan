<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departamento $departamento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Departamento'), ['action' => 'edit', $departamento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Departamento'), ['action' => 'delete', $departamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departamento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Departamentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departamento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Typetickets'), ['controller' => 'Typetickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typeticket'), ['controller' => 'Typetickets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="departamentos view large-9 medium-8 columns content">
    <h3><?= h($departamento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($departamento->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $departamento->has('user') ? $this->Html->link($departamento->user->name, ['controller' => 'Users', 'action' => 'view', $departamento->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($departamento->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($departamento->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($departamento->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Tickets') ?></h4>
        <?php if (!empty($departamento->tickets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Typeticket Id') ?></th>
                <th scope="col"><?= __('Stat Id') ?></th>
                <th scope="col"><?= __('Formversion') ?></th>
                <th scope="col"><?= __('Numeroreferencia') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Departamento Id') ?></th>
                <th scope="col"><?= __('Vendor Id') ?></th>
                <th scope="col"><?= __('Registrototal') ?></th>
                <th scope="col"><?= __('Unidade') ?></th>
                <th scope="col"><?= __('Setup') ?></th>
                <th scope="col"><?= __('Retrabalho') ?></th>
                <th scope="col"><?= __('Estoque') ?></th>
                <th scope="col"><?= __('Partnumber') ?></th>
                <th scope="col"><?= __('Partnumbercliente') ?></th>
                <th scope="col"><?= __('Quantidade') ?></th>
                <th scope="col"><?= __('Tecnico Id') ?></th>
                <th scope="col"><?= __('Projeto') ?></th>
                <th scope="col"><?= __('Fase') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Descricaoresumida') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($departamento->tickets as $tickets): ?>
            <tr>
                <td><?= h($tickets->id) ?></td>
                <td><?= h($tickets->typeticket_id) ?></td>
                <td><?= h($tickets->stat_id) ?></td>
                <td><?= h($tickets->formversion) ?></td>
                <td><?= h($tickets->numeroreferencia) ?></td>
                <td><?= h($tickets->data) ?></td>
                <td><?= h($tickets->departamento_id) ?></td>
                <td><?= h($tickets->vendor_id) ?></td>
                <td><?= h($tickets->registrototal) ?></td>
                <td><?= h($tickets->unidade) ?></td>
                <td><?= h($tickets->setup) ?></td>
                <td><?= h($tickets->retrabalho) ?></td>
                <td><?= h($tickets->estoque) ?></td>
                <td><?= h($tickets->partnumber) ?></td>
                <td><?= h($tickets->partnumbercliente) ?></td>
                <td><?= h($tickets->quantidade) ?></td>
                <td><?= h($tickets->tecnico_id) ?></td>
                <td><?= h($tickets->projeto) ?></td>
                <td><?= h($tickets->fase) ?></td>
                <td><?= h($tickets->historico) ?></td>
                <td><?= h($tickets->created) ?></td>
                <td><?= h($tickets->modified) ?></td>
                <td><?= h($tickets->descricaoresumida) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tickets', 'action' => 'view', $tickets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tickets', 'action' => 'edit', $tickets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tickets', 'action' => 'delete', $tickets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tickets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Typetickets') ?></h4>
        <?php if (!empty($departamento->typetickets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Departamento Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($departamento->typetickets as $typetickets): ?>
            <tr>
                <td><?= h($typetickets->id) ?></td>
                <td><?= h($typetickets->descricao) ?></td>
                <td><?= h($typetickets->departamento_id) ?></td>
                <td><?= h($typetickets->created) ?></td>
                <td><?= h($typetickets->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Typetickets', 'action' => 'view', $typetickets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Typetickets', 'action' => 'edit', $typetickets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Typetickets', 'action' => 'delete', $typetickets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typetickets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
