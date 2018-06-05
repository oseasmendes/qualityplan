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
    <h3 style= "color: #B0C4DE"><?= __('Quality Tickets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>

                <th scope="col"><?= $this->Paginator->sort('id') ?></th>              
                <th scope="col"><?= $this->Paginator->sort('typeticket_id','Tipo') ?></th>                                
                <th scope="col"><?= $this->Paginator->sort('projeto_id','Projeto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricaoresumida','Resumo') ?></th>         
                <th scope="col"><?= $this->Paginator->sort('departamento_id','Depto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vendor_id') ?></th>                                
                <!-- <th scope="col"><?= $this->Paginator->sort('tecnico_id') ?></th> -->               
                <th scope="col"><?= $this->Paginator->sort('stat_id','Status') ?></th>                                
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>               
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tickets as $ticket): ?>
            <tr>                
                <td><?= $this->Number->format($ticket->id) ?></td>              
                <td><?= $ticket->has('typeticket') ? $ticket->typeticket->descricao : '' ?></td>                                
                <!-- <td><?= $ticket->has('projeto') ? $this->Html->link($ticket->projeto->codigo, ['controller' => 'Projetos', 'action' => 'view', $ticket->projeto->id]) : '' ?></td> -->
                <td><?= $ticket->has('projeto') ? $ticket->projeto->codigo : '' ?></td>
                <td><?= h($ticket->descricaoresumida) ?></td>                                                                
                <td><?= $ticket->has('departamento') ? $ticket->departamento->descricao : '' ?></td>
                <td><?= $ticket->has('vendor') ? $ticket->vendor->nomepesquisa : '' ?></td>                                
                <!-- <td><?= $ticket->has('tecnico') ? $ticket->tecnico->nome : '' ?> --></td>                
                <td><?= $ticket->has('stat') ? $ticket->stat->descricao : '' ?></td>
                <td><?= h($ticket->created) ?></td>
                                                                               
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ticket->id]) ?>                     
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticket->id]) ?>
                    <!-- <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?> -->

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
