<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $schoolType->school_type_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $schoolType->school_type_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List School Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List School Types'), ['controller' => 'SchoolTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School Type'), ['controller' => 'SchoolTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schoolTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($schoolType) ?>
    <fieldset>
        <legend><?= __('Edit School Type') ?></legend>
        <?php
            echo $this->Form->input('name', [
             'label' => 'Nom']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
