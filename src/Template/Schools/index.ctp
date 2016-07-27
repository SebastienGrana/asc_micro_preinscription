<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New School'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schools index large-9 medium-8 columns content">
    <h3><?= __('Schools') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('school_id') ?></th>
                <th><?= $this->Paginator->sort('Type École') ?></th>
                <th><?= $this->Paginator->sort('Nom') ?></th>
                <th><?= $this->Paginator->sort('Adresse') ?></th>
                <th><?= $this->Paginator->sort('Ville') ?></th>
                <th><?= $this->Paginator->sort('Code Postal') ?></th>
                <th><?= $this->Paginator->sort('Telephone') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($schools as $school): ?>
            <tr>
                <td><?= $this->Number->format($school->school_id) ?></td>
                <td><?= h($school->school_type->name) ?></td>
                <td><?= h($school->name) ?></td>
                <td><?= h($school->adress) ?></td>
                <td><?= h($school->town) ?></td>
                <td><?= $this->Number->format($school->postal_code) ?></td>
                <td><?= $this->Number->format($school->telephone) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $school->school_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $school->school_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $school->school_id], ['confirm' => __('Are you sure you want to delete # {0}?', $school->school_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
