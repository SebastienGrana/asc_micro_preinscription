<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->student_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->student_id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->student_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="students view large-9 medium-8 columns content">
    <h3><?= h($student->student_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Student Id') ?></th>
            <td><?= $this->Number->format($student->student_id) ?></td>
        </tr>
                <tr>
            <th><?= __('User') ?></th>
            <td><?= $student->has('user') ? $this->Html->link($student->user->first_name ." ". $student->user->last_name, ['controller' => 'Users', 'action' => 'view', $student->user_id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('School') ?></th>
            <td><?= $student->has('school') ? $this->Html->link($student->school->name, ['controller' => 'Schools', 'action' => 'view', $student->school_id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Nom de famille') ?></th>
            <td><?= h($student->last_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Prenom') ?></th>
            <td><?= h($student->first_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Genre') ?></th>
            <td><?= $student->genre ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Autre prenoms') ?></th>
            <td><?= h($student->other_first_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Date de naissance') ?></th>
            <td><?= h($student->date_of_born) ?></td>
        </tr>
        <tr>
            <th><?= __('Ville de naissance') ?></th>
            <td><?= h($student->town_of_born) ?></td>
        </tr>
        <tr>
            <th><?= __('Pays de naissance') ?></th>
            <td><?= h($student->country_of_born) ?></td>
        </tr>
        <tr>
            <th><?= __('Nationalitée') ?></th>
            <td><?= h($student->nationality) ?></td>
        </tr>
        <tr>
            <th><?= __('École actuel') ?></th>
            <td><?= h($student->actual_school) ?></td>
        </tr>
        <tr>
            <th><?= __('Année scolaire') ?></th>
            <td><?= h($student->scolar_year) ?></td>
        </tr>
        <tr>
            <th><?= __('Régime') ?></th>
            <td><?= h($student->food_regime) ?></td>
        </tr>
        <tr>
            <th><?= __('Redoublant') ?></th>
            <td><?= $student->doubling ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Formation souhaité') ?></th>
            <td><?= h($student->desired_formation); ?></td>
        </tr> 
        <tr>
            <th><?= __('Liens de parentée') ?></th>
            <td><?= h($student->user_student_relationship); ?></td>
        </tr>        
    </table>   
    
    <div class="row">
        <h4><?= __('École primaire fréquentée(s)') ?></h4>
        <?= $this->Text->autoParagraph(h($student->primary_school_followed)); ?>
    </div>
    <div class="row">
        <h4><?= __('College fréquenté(s)') ?></h4>
        <?= $this->Text->autoParagraph(h($student->middel_school_followed)); ?>
    </div>
        <h3><?= h($student->user->user_id) ?></h3>
        <table class="vertical-table">
        <tr>
            <th>Informations de l'utilisateur : 
            <?= h($student->user->civility." ".$student->user->last_name." ".$student->user->first_name) ?></th>
            <td></td>
        </tr> 
        <tr>
            <th><?= __('Utilisateur id') ?></th>
            <td><?= h($student->user->user_id); ?>
        </tr> 
        <tr>
            <th><?= __('Utilisateur Civilitée') ?></th>
            <td><?= h($student->user->civility); ?>
        </tr>    
        <tr>
            <th><?= __('Utilisateur Nom de famille') ?></th>
            <td><?= h($student->user->last_name); ?></td>
        </tr>
        <tr>
            <th><?= __('Utilisateur Prénom') ?></th>
            <td><?= h($student->user->first_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Utilisateur Email') ?></th>
            <td><?= h($student->user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Utilisateur Téléphone') ?></th>
            <td><?= $this->Number->format($student->user->telephone) ?></td>
        </tr>
        <tr>
            <th><?= __('Utilisateur Téléhpone mobile') ?></th>
            <td><?= $this->Number->format($student->user->mobile_phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Utilisateur Ville') ?></th>
            <td><?= h($student->user->town) ?></td>
        </tr>
        <tr>
            <th><?= __('Utilisateur Adresse') ?></th>
            <td><?= h($student->user->adress) ?></td>
        </tr>
        <tr>
            <th><?= __('Utilisateur Code postal') ?></th>
            <td><?= $this->Number->format($student->user->postal_code) ?></td>
        </tr>
        <tr>
            <th><?= __('Utilisateur Responsable Legal') ?></th>
            <td><?= h($student->user->responsable_legal) ?></td>
        </tr>
        <tr>
            <th><?= __('Utilisateur Mot de passe') ?></th>
            <td><?= h($student->user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Utilisateur Téléphone mobile') ?></th>
            <td><?= h($student->user->mobile_phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Utilisateur Nationalitée') ?></th>
            <td><?= h($student->user->nationality) ?></td>
        </tr>
        <tr>
            <th><?= __('Utilisateur Profession') ?></th>
            <td><?= h($student->user->profession) ?></td>
        </tr>
        <tr>
            <th><?= __('Utilisateur Société') ?></th>
            <td><?= h($student->user->socity) ?></td>
        </tr>
        <tr>
            <th><?= __('Utilisateur Téléphone pro') ?></th>
            <td><?= h($student->user->socity_phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Utilisateur Situation pro') ?></th>
            <td><?= h($student->user->job_situation) ?></td>
        </tr>        
    </table>

</div>
