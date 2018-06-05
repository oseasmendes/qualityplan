<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ticket[]|\Cake\Collection\CollectionInterface $tickets
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Typetickets'), ['controller' => 'Typetickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Typeticket'), ['controller' => 'Typetickets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stats'), ['controller' => 'Stats', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stat'), ['controller' => 'Stats', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vendors'), ['controller' => 'Vendors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vendor'), ['controller' => 'Vendors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tecnicos'), ['controller' => 'Tecnicos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tecnico'), ['controller' => 'Tecnicos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fases'), ['controller' => 'Fases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fase'), ['controller' => 'Fases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actions'), ['controller' => 'Actions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Action'), ['controller' => 'Actions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tickets index large-9 medium-8 columns content">
    <h3><?= __('RNCI') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('typeticket','Type',['direction'=>'asc']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Proj.') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Partnumber') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('Resumo') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('Status') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('Referencia') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('departamento','Depto',['direction'=>'asc']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('Fornecedor') ?></th>            
                <th scope="col"><?= $this->Paginator->sort('Tecnico') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Fase') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Gerado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Modificado') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('User') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tickets as $ticket): ?>
            <tr>
                <td><?= $this->Number->format($ticket->id) ?></td>
                <td><?= $ticket->has('typeticket') ? $this->Html->link($ticket->typeticket->descricao, ['controller' => 'Typetickets', 'action' => 'view', $ticket->typeticket->id]) : '' ?></td>
                <td><?= h($ticket->data) ?></td>
                <td><?= $ticket->has('projeto') ? $this->Html->link($ticket->projeto->id, ['controller' => 'Projetos', 'action' => 'view', $ticket->projeto->id]) : '' ?></td>
                <td><?= h($ticket->partnumber) ?></td>
                <td><?= h($ticket->descricaoresumida) ?></td>                
                <td><?= $ticket->has('stat') ? $this->Html->link($ticket->stat->descricao, ['controller' => 'Stats', 'action' => 'view', $ticket->stat->id]) : '' ?></td>                
                <td><?= h($ticket->numeroreferencia) ?></td>                
                <td><?= $ticket->has('departamento') ? $this->Html->link($ticket->departamento->descricao, ['controller' => 'Departamentos', 'action' => 'view', $ticket->departamento->id]) : '' ?></td>
                <td><?= $ticket->has('vendor') ? $this->Html->link($ticket->vendor->nomepesquisa, ['controller' => 'Vendors', 'action' => 'view', $ticket->vendor->id]) : '' ?></td>                
                <td><?= $ticket->has('tecnico') ? $this->Html->link($ticket->tecnico->nome, ['controller' => 'Tecnicos', 'action' => 'view', $ticket->tecnico->id]) : '' ?></td>               
                <td><?= $ticket->has('fase') ? $this->Html->link($ticket->fase->fase, ['controller' => 'Fases', 'action' => 'view', $ticket->fase->id]) : '' ?></td>
                <td><?= h($ticket->created) ?></td>
                <td><?= h($ticket->modified) ?></td>                
                <td><?= $ticket->has('user') ? $this->Html->link($ticket->user->name, ['controller' => 'Users', 'action' => 'view', $ticket->user->id]) : '' ?></td>
                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ticket->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticket->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?>
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
