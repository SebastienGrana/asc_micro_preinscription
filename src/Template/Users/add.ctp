<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('civility', [
             'label' => 'Civilitée']);
            
            echo $this->Form->input('last_name', [
             'label' => 'Nom de famille']);
            
            echo $this->Form->input('first_name', [
             'label' => 'Prénom']);
            
            echo $this->Form->input('email', [
             'label' => 'Email', 
             'type'=>'email']);
            
//            echo $this->Form->input('username', [
//             'label' => 'Login']);
            
            echo $this->Form->input('telephone', [
             'label' => 'Téléphone']);
            
            echo $this->Form->input('mobile_phone', [
             'label' => 'Téléphone mobile']);
            
            echo $this->Form->input('town', [
             'label' => 'Ville']);
            
            echo $this->Form->input('adress', [
             'label' => 'Adresse']);
            
            echo $this->Form->input('postal_code', [
             'label' => 'Code postal']);
            
            echo $this->Form->input('responsable_legal', [
             'label' => 'Responsable legal',
             'placeholder'=>'ex: Père']);
            
            echo $this->Form->input('password', [
             'label' => 'Mot de passe',
             'type'=>'password']);
            
            echo $this->Form->input('nationality', [
             'label' => 'Nationalitée']);
            
            echo $this->Form->input('profession', [
             'label' => 'Profession']);
            
            echo $this->Form->input('socity', [
             'label' => 'Société']);
            
            echo $this->Form->input('socity_phone', [
             'label' => 'Téléphone pro']);
            
            echo $this->Form->input('job_situation', [
             'label' => 'Situation pro']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
