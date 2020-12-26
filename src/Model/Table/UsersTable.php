<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\UserGroupsTable&\Cake\ORM\Association\BelongsTo $UserGroups
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('UserGroups', [
            'foreignKey' => 'user_group_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('school_name')
            ->maxLength('school_name', 255)
            ->requirePresence('school_name', 'create')
            ->notEmptyString('school_name');

        $validator
            ->integer('created_by')
            ->requirePresence('created_by', 'create')
            ->notEmptyString('created_by');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 255)
            ->allowEmptyString('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 255)
            ->allowEmptyString('last_name');

        $validator
            ->scalar('username')
            ->maxLength('username', 255)
            ->allowEmptyString('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->allowEmptyString('password');

        $validator
            ->scalar('salt')
            ->maxLength('salt', 255)
            ->allowEmptyString('salt');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->requirePresence('image', 'create')
            ->notEmptyFile('image');

        $validator
            ->scalar('db_color')
            ->requirePresence('db_color', 'create')
            ->notEmptyString('db_color');

        $validator
            ->integer('number_of_student')
            ->requirePresence('number_of_student', 'create')
            ->notEmptyString('number_of_student');

        $validator
            ->integer('tracker')
            ->requirePresence('tracker', 'create')
            ->notEmptyString('tracker');

        $validator
            ->integer('email_verified')
            ->allowEmptyString('email_verified');

        $validator
            ->scalar('parent_api_key')
            ->maxLength('parent_api_key', 255)
            ->allowEmptyString('parent_api_key');

        $validator
            ->scalar('user_api_key')
            ->maxLength('user_api_key', 255)
            ->allowEmptyString('user_api_key');

        $validator
            ->integer('parent_ownerId')
            ->allowEmptyString('parent_ownerId');

        $validator
            ->integer('ownerId')
            ->allowEmptyString('ownerId');

        $validator
            ->integer('access')
            ->allowEmptyString('access');

        $validator
            ->scalar('association')
            ->maxLength('association', 10)
            ->allowEmptyString('association');

        $validator
            ->integer('property')
            ->allowEmptyString('property');

        $validator
            ->integer('rooms')
            ->allowEmptyString('rooms');

        $validator
            ->integer('activity')
            ->allowEmptyString('activity');

        $validator
            ->integer('links')
            ->allowEmptyString('links');

        $validator
            ->scalar('invoice')
            ->maxLength('invoice', 255)
            ->allowEmptyString('invoice');

        $validator
            ->notEmptyString('invoice_status');

        $validator
            ->notEmptyString('payment_status');

        $validator
            ->integer('user_plan')
            ->notEmptyString('user_plan');

        $validator
            ->integer('user_mode')
            ->notEmptyString('user_mode');

        $validator
            ->scalar('next_date')
            ->maxLength('next_date', 255)
            ->notEmptyString('next_date');

        $validator
            ->scalar('last_active')
            ->maxLength('last_active', 255)
            ->allowEmptyString('last_active');

        $validator
            ->scalar('notes')
            ->maxLength('notes', 255)
            ->allowEmptyString('notes');

        $validator
            ->scalar('message')
            ->maxLength('message', 4294967295)
            ->allowEmptyString('message');

        $validator
            ->integer('active')
            ->allowEmptyString('active');

        $validator
            ->integer('show_data')
            ->notEmptyString('show_data');

        $validator
            ->scalar('user_logo')
            ->allowEmptyString('user_logo');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['user_group_id'], 'UserGroups'));

        return $rules;
    }
}
