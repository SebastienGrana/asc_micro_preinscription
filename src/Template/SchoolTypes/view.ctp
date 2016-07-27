<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit School Type'), ['action' => 'edit', $schoolType->school_type_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete School Type'), ['action' => 'delete', $schoolType->school_type_id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolType->school_type_id)]) ?> </li>
        <li><?= $this->Html->link(__('List School Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List School Types'), ['controller' => 'SchoolTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School Type'), ['controller' => 'SchoolTypes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="schoolTypes view large-9 medium-8 columns content">
    <h3><?= h($schoolType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Type d\'école') ?></th>
            <td><?= h($schoolType->school_type_id)?></td>
        </tr>
        <tr>
            <th><?= __('Nom') ?></th>
            <td><?= h($schoolType->name) ?></td>
        </tr>
    </table>
</div>
