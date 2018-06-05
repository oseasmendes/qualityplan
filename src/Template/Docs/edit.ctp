<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Doc $doc
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $doc->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $doc->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Docs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Actions'), ['controller' => 'Actions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Action'), ['controller' => 'Actions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="docs form large-9 medium-8 columns content">
    <?= $this->Form->create($doc) ?>
    <fieldset>
        <legend><?= __('Edit Doc') ?></legend>
        <?php
            echo $this->Form->control('documentotipo');
            echo $this->Form->control('numerodoc');
            echo $this->Form->control('dataemissao', ['empty' => true]);
            echo $this->Form->control('proposito');
            echo $this->Form->control('responsavel');
            echo $this->Form->control('descricaoresumida');
            echo $this->Form->control('action_id', ['options' => $actions, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
