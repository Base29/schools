<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $school_name
 * @property int $created_by
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $username
 * @property string|null $password
 * @property string|null $salt
 * @property string|null $email
 * @property string $image
 * @property string $db_color
 * @property int $number_of_student
 * @property int $tracker
 * @property int|null $email_verified
 * @property string|null $parent_api_key
 * @property string|null $user_api_key
 * @property int|null $parent_ownerId
 * @property int|null $ownerId
 * @property int|null $user_group_id
 * @property int|null $access
 * @property string|null $association
 * @property int|null $property
 * @property int|null $rooms
 * @property int|null $activity
 * @property int|null $links
 * @property string|null $invoice
 * @property int $invoice_status
 * @property int $payment_status
 * @property int $user_plan
 * @property string|null $created
 * @property int $user_mode
 * @property string $next_date
 * @property string|null $last_active
 * @property string|null $notes
 * @property string|null $message
 * @property int|null $active
 * @property int $show_data
 * @property string|null $user_logo
 *
 * @property \App\Model\Entity\UserGroup $user_group
 */
class User extends Entity {
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
        'school_name' => true,
        'created_by' => true,
        'first_name' => true,
        'last_name' => true,
        'username' => true,
        'password' => true,
        'salt' => true,
        'email' => true,
        'image' => true,
        'db_color' => true,
        'number_of_student' => true,
        'tracker' => true,
        'email_verified' => true,
        'parent_api_key' => true,
        'user_api_key' => true,
        'parent_ownerId' => true,
        'ownerId' => true,
        'user_group_id' => true,
        'access' => true,
        'association' => true,
        'property' => true,
        'rooms' => true,
        'activity' => true,
        'links' => true,
        'invoice' => true,
        'invoice_status' => true,
        'payment_status' => true,
        'user_plan' => true,
        'created' => true,
        'user_mode' => true,
        'next_date' => true,
        'last_active' => true,
        'notes' => true,
        'message' => true,
        'active' => true,
        'show_data' => true,
        'user_logo' => true,
        'user_group' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];

    protected function _setPassword($password) {
        return (new DefaultPasswordHasher)->hash($password);
    }
}
