<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Action $action
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Actions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actiontypes'), ['controller' => 'Actiontypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actiontype'), ['controller' => 'Actiontypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Docs'), ['controller' => 'Docs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Doc'), ['controller' => 'Docs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actions form large-9 medium-8 columns content">
    <?= $this->Form->create($action) ?>
    <fieldset>
        <legend><?= __('Add Action') ?></legend>
        <?php
            echo $this->Form->control('data', ['empty' => true]);
            echo $this->Form->control('dataprevista', ['empty' => true]);
            echo $this->Form->control('ticket_id', ['options' => $tickets, 'empty' => true]);
            echo $this->Form->control('descricaoresumida');
            echo $this->Form->control('descricaocompleta');
            echo $this->Form->control('responsavel');
            echo $this->Form->control('actiontype_id', ['options' => $actiontypes, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
