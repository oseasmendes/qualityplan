<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Doc $doc
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Doc'), ['action' => 'edit', $doc->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Doc'), ['action' => 'delete', $doc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $doc->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Docs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Doc'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actions'), ['controller' => 'Actions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Action'), ['controller' => 'Actions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="docs view large-9 medium-8 columns content">
    <h3><?= h($doc->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Documentotipo') ?></th>
            <td><?= h($doc->documentotipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numerodoc') ?></th>
            <td><?= h($doc->numerodoc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Proposito') ?></th>
            <td><?= h($doc->proposito) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsavel') ?></th>
            <td><?= h($doc->responsavel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricaoresumida') ?></th>
            <td><?= h($doc->descricaoresumida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Action') ?></th>
            <td><?= $doc->has('action') ? $this->Html->link($doc->action->id, ['controller' => 'Actions', 'action' => 'view', $doc->action->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($doc->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataemissao') ?></th>
            <td><?= h($doc->dataemissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($doc->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($doc->modified) ?></td>
        </tr>
    </table>
</div>
