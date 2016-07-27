<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit School'), ['action' => 'edit', $school->school_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete School'), ['action' => 'delete', $school->school_id], ['confirm' => __('Are you sure you want to delete # {0}?', $school->school_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Schools'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="schools view large-9 medium-8 columns content">
    <h3><?= h($school->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('School Id') ?></th>
            <td><?= $this->Number->format($school->school_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Type d\'école') ?></th>
            <td><?= h($school->school_type->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Nom') ?></th>
            <td><?= h($school->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Adresse') ?></th>
            <td><?= h($school->adress) ?></td>
        </tr>
        <tr>
            <th><?= __('Ville') ?></th>
            <td><?= h($school->town) ?></td>
        </tr>

        <tr>
            <th><?= __('Code postal') ?></th>
            <td><?= $this->Number->format($school->postal_code) ?></td>
        </tr>
        <tr>
            <th><?= __('Téléphone') ?></th>
            <td><?= $this->Number->format($school->telephone) ?></td>
        </tr>
    </table>
</div>
