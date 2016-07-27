<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $user_id
 * @property string $civility
 * @property string $first_name
 * @property string $email
 * @property int $telephone
 * @property string $town
 * @property int $postal_code
 * @property string $adress
 * @property string $responsable_legal
 * @property string $password
 * @property int $mobile_phone
 * @property string $nationality
 * @property string $relationship
 * @property string $profession
 * @property string $socity
 * @property int $socity_phone
 * @property string $job_situation
 *
 * @property \App\Model\Entity\User $user
 */
class User extends Entity
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
        'email' => true,
        'password' => true,
        'user_id' => false
    ];
    
    protected function _setPassword($password) {
        $hasher = new DefaultPasswordHasher();
        return $hasher -> hash($password);
    }
}
