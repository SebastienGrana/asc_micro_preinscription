<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Recrutor'), ['action' => 'edit', $recrutor->recrutor_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Recrutor'), ['action' => 'delete', $recrutor->recrutor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $recrutor->recrutor_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Recrutors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recrutor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recrutors'), ['controller' => 'Recrutors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recrutor'), ['controller' => 'Recrutors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="recrutors view large-9 medium-8 columns content">
    <h3><?= h($recrutor->recrutor_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Recrutor') ?></th>
            <td><?= h($recrutor->recrutor_id) ?></td>
        </tr>
        <tr>
            <th><?= __('École') ?></th>
            <td><?= $recrutor->has('school') ? $this->Html->link($recrutor->school->name, ['controller' => 'Schools', 'action' => 'view', $recrutor->school->school_id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Prénom') ?></th>
            <td><?= h($recrutor->first_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Nom de famille') ?></th>
            <td><?= h($recrutor->last_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($recrutor->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Mot de passe') ?></th>
            <td><?= h($recrutor->password) ?></td>
        </tr>
    </table>
</div>
<?php echo $session->read('Auth.User.username');?>