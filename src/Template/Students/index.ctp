<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Student'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="students index large-9 medium-8 columns content">
    <h3><?= __('Students') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('student_id') ?></th>
                <th><?= $this->Paginator->sort('Nom') ?></th>
                <th><?= $this->Paginator->sort('Prénom') ?></th>
                <th><?= $this->Paginator->sort('École') ?></th>
                <th><?= $this->Paginator->sort('Nom de famille') ?></th>
                <th><?= $this->Paginator->sort('Prenom') ?></th>
                <th><?= $this->Paginator->sort('Autres Prenom') ?></th>
                <th><?= $this->Paginator->sort('Genre') ?></th>
                <th><?= $this->Paginator->sort('Date de naissance') ?></th>
                <th><?= $this->Paginator->sort('Ville de naissance') ?></th>
                <th><?= $this->Paginator->sort('Pays de naissance') ?></th>
                <th><?= $this->Paginator->sort('Nationalitée') ?></th>
                <th><?= $this->Paginator->sort('École actuel') ?></th>
                <th><?= $this->Paginator->sort('Année scolaire') ?></th>
                <th><?= $this->Paginator->sort('Régime') ?></th>
                <th><?= $this->Paginator->sort('Redoublant') ?></th>
                <th><?= $this->Paginator->sort('Formation désirée') ?></th>
                <th><?= $this->Paginator->sort('Liens de parentée') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
            <tr>
                <td><?= $this->Number->format($student->student_id) ?></td>
                <td><?= h($student->last_name) ?></td>
                <td><?= h($student->first_name) ?></td>
                <td><?= h($student->school->name) ?></td>
                <td><?= h($student->last_name) ?></td>
                <td><?= h($student->first_name) ?></td>
                <td><?= h($student->other_first_name) ?></td>
                <td><?php if($student->genre == 0){ //Affiche le genre de l'éleve
                    echo "F";
                }else if($student->genre == 1){
                    echo "M";
                } ?></td>
                <td><?= h($student->date_of_born) ?></td>
                <td><?= h($student->town_of_born) ?></td>
                <td><?= h($student->country_of_born) ?></td>
                <td><?= h($student->nationality) ?></td>
                <td><?= h($student->actual_school) ?></td>
                <td><?= h($student->scolar_year) ?></td>
                <td><?= h($student->food_regime) ?></td>
                <td>
                <?php if($student->doubling == 0){ //Affiche si l'éleve à redoublé
                        echo "Non";
                    }else if($student->doubling == 1){
                        echo "Oui";
                    } ?></td>
                <td> <?= h($student->desired_formation) ?></td>
                <td><?= h($student->user_student_relationship) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $student->student_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $student->student_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $student->student_id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->student_id)]) ?>
                        
                    <?php $completName = $student->first_name ."_". $student->last_name; ?>
                    <?= $this->Html->link('Exporter', [
                        'controller' => 'students', 
                        'action' => 'exportOne',
                        $student->student_id,
                        $student->user->user_id,
                        $completName
                    ]) 
                    ?>
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
