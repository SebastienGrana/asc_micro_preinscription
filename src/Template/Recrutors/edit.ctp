<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $recrutor->recrutor_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $recrutor->recrutor_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Recrutors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Recrutors'), ['controller' => 'Recrutors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recrutor'), ['controller' => 'Recrutors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recrutors form large-9 medium-8 columns content">
    <?= $this->Form->create($recrutor) ?>
    <fieldset>
        <legend><?= __('Edit Recrutor') ?></legend>
        <?php
            echo $this->Form->input('school_id', [
                'options' => $schools,
                'label' => 'École']);
            echo $this->Form->input('first_name', [
                'label' => 'Prénom']);
            echo $this->Form->input('last_name', [
                'label' => 'Nom de famille']);
            echo $this->Form->input('email', [
                'label' => 'Email']);
            echo $this->Form->input('password', [
                'label' => 'Mot de passe']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
