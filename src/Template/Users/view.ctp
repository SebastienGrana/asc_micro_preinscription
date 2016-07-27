<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->user_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->user_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User Id') ?></th>
            <td><?= $this->Number->format($user->user_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Civilitée') ?></th>
            <td><?= h($user->civility) ?></td>
        </tr>
        <tr>
            <th><?= __('Nom de famille') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Prénom') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Téléphone') ?></th>
            <td><?= $this->Number->format($user->telephone) ?></td>
        </tr>
        <tr>
            <th><?= __('Téléhpone mobile') ?></th>
            <td><?= $this->Number->format($user->mobile_phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Ville') ?></th>
            <td><?= h($user->town) ?></td>
        </tr>
        <tr>
            <th><?= __('Adresse') ?></th>
            <td><?= h($user->adress) ?></td>
        </tr>
        <tr>
            <th><?= __('Code postal') ?></th>
            <td><?= $this->Number->format($user->postal_code) ?></td>
        </tr>
        <tr>
            <th><?= __('Responsable Legal') ?></th>
            <td><?= h($user->responsable_legal) ?></td>
        </tr>
        <tr>
            <th><?= __('Mot de passe') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Téléphone mobile') ?></th>
            <td><?= h($user->mobile_phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Nationalitée') ?></th>
            <td><?= h($user->nationality) ?></td>
        </tr>
        <tr>
            <th><?= __('Profession') ?></th>
            <td><?= h($user->profession) ?></td>
        </tr>
        <tr>
            <th><?= __('Société') ?></th>
            <td><?= h($user->socity) ?></td>
        </tr>
        <tr>
            <th><?= __('Téléphone pro') ?></th>
            <td><?= h($user->socity_phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Situation pro') ?></th>
            <td><?= h($user->job_situation) ?></td>
        </tr>
    </table>
</div>
