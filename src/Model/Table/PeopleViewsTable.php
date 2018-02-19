<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PeopleViews Model
 *
 * @property \App\Model\Table\DeterminavitsTable|\Cake\ORM\Association\HasMany $Determinavits
 *
 * @method \App\Model\Entity\PeopleView get($primaryKey, $options = [])
 * @method \App\Model\Entity\PeopleView newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PeopleView[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PeopleView|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PeopleView patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PeopleView[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PeopleView findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PeopleViewsTable extends Table
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

        $this->setTable('people_views');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Determinavits', [
            'foreignKey' => 'people_view_id'
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
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->allowEmpty('name');

        return $validator;
    }
}
