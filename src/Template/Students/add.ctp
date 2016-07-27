<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Students'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<?php
    $studentModel = new \App\Model\Entity\Student;
?>
<div class="students form large-9 medium-8 columns content">
    <?= $this->Form->create($student) ?>
    <fieldset>
        <legend><?= __('Add Student') ?></legend>
        <?php            
            echo $this->Form->input('user_id',
                ['options' => $users, 
                'label' => 'Utilisateur']);
            echo $this->Form->input('school_id',
                ['options' => $schools, 
                'label' => 'École']);
//            echo $this->Form->input('user_student_relationship',[
//                'label' => 'Liens de parentée']);
            
            
            echo $this->Form->input('last_name', [
             'label' => 'Nom de famille']);
            
            echo $this->Form->input('first_name', [
             'label' => 'Prenom']);
            
            echo $this->Form->input('other_first_name', [
             'label' => 'Autre prenoms']);
            $studentModel->getSelectGenre($this);
            echo $this->Form->input('date_of_born', [
             'label' => 'Date de naissance']);
            echo $this->Form->input('town_of_born', [
             'label' => 'Ville de naissance']);
            echo $this->Form->input('country_of_born', [
             'label' => 'Pays de naissance']);
            echo $this->Form->input('nationality', [
             'label' => 'Nationalitée']);
            echo $this->Form->input('actual_school', [
             'label' => 'École actuel']);
            
            $studentModel->getSelectScolarYear($this); //Appel de function générant un Select et l'affiche
            $studentModel->getSelectFoodRegime($this);
            $studentModel->getSelectDoubling($this);
            $studentModel->getSelectDesiredFormations($this);
            
            echo $this->Form->input('user_student_relationship', [
             'label' => 'Liens de parentée']);
            echo $this->Form->input('primary_school_followed', [
             'label' => 'École primaire fréquentée(s)']);
            echo $this->Form->input('middel_school_followed', [
             'label' => 'College fréquenté(s)']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
