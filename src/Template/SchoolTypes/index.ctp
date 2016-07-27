<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New School Type'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schoolTypes index large-9 medium-8 columns content">
    <h3><?= __('School Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('school_type_id') ?></th>
                <th><?= $this->Paginator->sort('Nom') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($schoolTypes as $schoolType): ?>
            <tr>
                <td><?= h($schoolType->school_type_id)?></td>
                <td><?= h($schoolType->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $schoolType->school_type_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $schoolType->school_type_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $schoolType->school_type_id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolType->school_type_id)]) ?>
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
