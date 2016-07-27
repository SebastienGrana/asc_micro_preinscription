<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity
 *
 * @property int $student_id
 * @property string $last_name
 * @property string $first_name
 * @property string $other_first_name
 * @property bool $genre
 * @property \Cake\I18n\Time $date_of_born
 * @property string $town_of_born
 * @property string $country_of_born
 * @property string $nationality
 * @property string $actual_school
 * @property string $scolar_year
 * @property string $food_regime
 * @property bool $doubling
 * @property string $desired_formation
 * @property string $primary_school_followed
 * @property string $middel_school_followed
 *
 * @property \App\Model\Entity\Student $student
 */
class Student extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'student_id' => false
    ];
    
    
    public function getSelectGenre($studentViews){
        echo '<div class="input text required"><label for="genre">Genre</label>';
        echo $studentViews->Form->select('genre',
                [0=>'Femme',
                1=>'Homme'
                ],['empty' => '(Veuillez sélectionner un genre)']);
        echo ' </div>';
    }
    
    public function getSelectScolarYear($studentView){
        echo '<div class="input text required"><label for="scolar_year">Année scolaire</label>';
        echo $studentView->Form->select(
                'scolar_year',
                [
                '2016/2017'=>'2016/2017',
                '2017/2018'=>'2017/2018',
                '2017/2019'=>'2017/2019',
                ],['empty' => '(Veuillez sélectionner une année scolaire)']);
        echo '</div>';
    }
    
    public function getSelectFoodRegime($studentView){
        echo '<div class="input text required"><label for="food_regime">Régime</label>';
        echo $studentView->Form->select('food_regime',
                ['Ext'=>'Externe',
                'DP'=>'Demi pensionnaire'
                ],['empty' => '(Veuillez sélectionner un régime)']);
        echo '</div>';
    }
    
    public function getSelectDoubling($studentView){
        echo '<div class="input text required"><label for="doubling">Redoublant</label>';
        echo $studentView->Form->select('doubling',
                [0=>'Non',
                1=>'Oui'
                ],['default' => 0]);
        echo '</div>';
    }
    
    
    public function getSelectDesiredFormations($studentView){
        echo '<div class="input text required"><label for="desired_formation">Formation Désirée</label>';
        echo $studentView->Form->select('desired_formation',
                ['L'=>'Litéraire',
                'S'=>'Scientifique',
                'ES'=>'Économique et Sociale'
                ],['empty' => 'Veuillez choisir une formation']);
        echo '</div>';
    }
}
