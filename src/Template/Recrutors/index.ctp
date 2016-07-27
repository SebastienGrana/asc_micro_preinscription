<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Recrutor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recrutors index large-9 medium-8 columns content">
    <h3><?= __('Recrutors') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('recrutor_id') ?></th>
                <th><?= $this->Paginator->sort('École') ?></th>
                <th><?= $this->Paginator->sort('Prénom') ?></th>
                <th><?= $this->Paginator->sort('Nom de famille') ?></th>
                <th><?= $this->Paginator->sort('Email') ?></th>
                <th><?= $this->Paginator->sort('Mot de passe') ?></th><!--Temporaire--><!--Temporaire-->
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
      
        <tbody>
            <?php foreach ($recrutors as $recrutor): ?>
            <tr>
                
                <td><?= $this->Number->format($recrutor->recrutor_id)?></td>
                
                <td><?= h($recrutor->school->name) ?></td>
                <td><?= h($recrutor->first_name) ?></td>
                <td><?= h($recrutor->last_name) ?></td>
                <td><?= h($recrutor->email) ?></td>
                <td><?= h($recrutor->password) ?></td><!--Temporaire--><!--Temporaire-->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $recrutor->recrutor_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recrutor->recrutor_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recrutor->recrutor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $recrutor->recrutor_id)]) ?>
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
