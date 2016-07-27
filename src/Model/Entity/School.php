<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * School Entity
 *
 * @property int $school_id
 * @property int $school_type_id
 * @property string $name
 * @property string $adress
 * @property string $town
 * @property int $postal_code
 * @property int $telephone
 *
 * @property \App\Model\Entity\School $school
 * @property \App\Model\Entity\SchoolType $school_type
 */
class School extends Entity
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
        'school_id' => false
    ];
}
