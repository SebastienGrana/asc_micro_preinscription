<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Schools'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="schools form large-9 medium-8 columns content">

    <?= $this->Form->create($school) ?>
    
    <fieldset>
        <legend><?= __('Add School') ?></legend>
        <?php
            echo $this->Form->input('school_type_id', [
                'options' => $schoolTypes,
             'label' => 'Type d\'École']);
            echo $this->Form->input('name', [
             'label' => 'Nom']);
            echo $this->Form->input('adress', [
             'label' => 'Adresse']);
            echo $this->Form->input('town', [
             'label' => 'Ville']);
            echo $this->Form->input('postal_code', [
             'label' => 'Code postal']);
            echo $this->Form->input('telephone', [
             'label' => 'Téléphone']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
