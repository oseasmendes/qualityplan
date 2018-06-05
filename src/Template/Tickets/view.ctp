<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ticket $ticket
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ticket'), ['action' => 'edit', $ticket->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ticket'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Typetickets'), ['controller' => 'Typetickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typeticket'), ['controller' => 'Typetickets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Stats'), ['controller' => 'Stats', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stat'), ['controller' => 'Stats', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vendors'), ['controller' => 'Vendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vendor'), ['controller' => 'Vendors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tecnicos'), ['controller' => 'Tecnicos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tecnico'), ['controller' => 'Tecnicos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fases'), ['controller' => 'Fases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fase'), ['controller' => 'Fases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actions'), ['controller' => 'Actions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Action'), ['controller' => 'Actions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tickets view large-9 medium-8 columns content">
    <h3><?= h($ticket->descricaoresumida) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Typeticket') ?></th>
            <td><?= $ticket->has('typeticket') ? $this->Html->link($ticket->typeticket->descricao, ['controller' => 'Typetickets', 'action' => 'view', $ticket->typeticket->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stat') ?></th>
            <td><?= $ticket->has('stat') ? $this->Html->link($ticket->stat->descricao, ['controller' => 'Stats', 'action' => 'view', $ticket->stat->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Formversion') ?></th>
            <td><?= h($ticket->formversion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numeroreferencia') ?></th>
            <td><?= h($ticket->numeroreferencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Departamento') ?></th>
            <td><?= $ticket->has('departamento') ? $this->Html->link($ticket->departamento->descricao, ['controller' => 'Departamentos', 'action' => 'view', $ticket->departamento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vendor') ?></th>
            <td><?= $ticket->has('vendor') ? $this->Html->link($ticket->vendor->nomepesquisa, ['controller' => 'Vendors', 'action' => 'view', $ticket->vendor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unidade') ?></th>
            <td><?= h($ticket->unidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Partnumber') ?></th>
            <td><?= h($ticket->partnumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Partnumbercliente') ?></th>
            <td><?= h($ticket->partnumbercliente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tecnico') ?></th>
            <td><?= $ticket->has('tecnico') ? $this->Html->link($ticket->tecnico->nome, ['controller' => 'Tecnicos', 'action' => 'view', $ticket->tecnico->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fase') ?></th>
            <td><?= $ticket->has('fase') ? $this->Html->link($ticket->fase->fase, ['controller' => 'Fases', 'action' => 'view', $ticket->fase->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricaoresumida') ?></th>
            <td><?= h($ticket->descricaoresumida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $ticket->has('user') ? $this->Html->link($ticket->user->name, ['controller' => 'Users', 'action' => 'view', $ticket->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $ticket->has('projeto') ? $this->Html->link($ticket->projeto->codigo, ['controller' => 'Projetos', 'action' => 'view', $ticket->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ticket->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Registrototal') ?></th>
            <td><?= $this->Number->format($ticket->registrototal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Setup') ?></th>
            <td><?= $this->Number->format($ticket->setup) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Retrabalho') ?></th>
            <td><?= $this->Number->format($ticket->retrabalho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estoque') ?></th>
            <td><?= $this->Number->format($ticket->estoque) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade') ?></th>
            <td><?= $this->Number->format($ticket->quantidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($ticket->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ticket->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($ticket->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Historico') ?></h4>
        <?= $this->Text->autoParagraph(h($ticket->historico)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Actions') ?></h4>
        <?php if (!empty($ticket->actions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Dataprevista') ?></th>
                <th scope="col"><?= __('Ticket Id') ?></th>
                <th scope="col"><?= __('Descricaoresumida') ?></th>
                <th scope="col"><?= __('Descricaocompleta') ?></th>
                <th scope="col"><?= __('Responsavel') ?></th>
                <th scope="col"><?= __('Actiontype Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ticket->actions as $actions): ?>
            <tr>
                <td><?= h($actions->id) ?></td>
                <td><?= h($actions->data) ?></td>
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
