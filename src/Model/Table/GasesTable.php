<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Gases Model
 *
 * @property \App\Model\Table\CountriesTable|\Cake\ORM\Association\BelongsTo $Countries
 *
 * @method \App\Model\Entity\Gase get($primaryKey, $options = [])
 * @method \App\Model\Entity\Gase newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Gase[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Gase|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gase patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Gase[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Gase findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GasesTable extends Table
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

        $this->setTable('gases');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id'
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
            ->scalar('major')
            ->allowEmpty('major');

        $validator
            ->scalar('minor')
            ->allowEmpty('minor');

        $validator
            ->scalar('locality')
            ->allowEmpty('locality');

        $validator
            ->numeric('lat')
            ->allowEmpty('lat');

        $validator
            ->scalar('ns')
            ->maxLength('ns', 1)
            ->allowEmpty('ns');

        $validator
            ->numeric('long')
            ->allowEmpty('long');

        $validator
            ->scalar('ew')
            ->maxLength('ew', 1)
            ->allowEmpty('ew');

        $validator
            ->integer('spectotal')
            ->allowEmpty('spectotal');

        $validator
            ->integer('gentotal')
            ->allowEmpty('gentotal');

        $validator
            ->integer('sptotal')
            ->allowEmpty('sptotal');

        $validator
            ->numeric('clatmax')
            ->allowEmpty('clatmax');

        $validator
            ->numeric('clongmin')
            ->allowEmpty('clongmin');

        $validator
            ->numeric('clongmax')
            ->allowEmpty('clongmax');

        $validator
            ->scalar('fullgaz')
            ->allowEmpty('fullgaz');

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
        $rules->add($rules->existsIn(['country_id'], 'Countries'));

        return $rules;
    }
}
