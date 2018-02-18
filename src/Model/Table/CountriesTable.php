<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Countries Model
 *
 * @property \App\Model\Table\GasesTable|\Cake\ORM\Association\HasMany $Gases
 *
 * @method \App\Model\Entity\Country get($primaryKey, $options = [])
 * @method \App\Model\Entity\Country newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Country[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Country|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Country patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Country[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Country findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CountriesTable extends Table
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

        $this->setTable('countries');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Gases', [
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
            ->scalar('coname')
            ->maxLength('coname', 255)
            ->allowEmpty('coname');

        $validator
            ->scalar('iso2')
            ->maxLength('iso2', 10)
            ->allowEmpty('iso2');

        $validator
            ->scalar('continent')
            ->allowEmpty('continent');

        $validator
            ->scalar('region')
            ->allowEmpty('region');

        $validator
            ->scalar('capital')
            ->allowEmpty('capital');

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
            ->scalar('llunit')
            ->maxLength('llunit', 2)
            ->allowEmpty('llunit');

        $validator
            ->numeric('latmin')
            ->allowEmpty('latmin');

        $validator
            ->numeric('latmax')
            ->allowEmpty('latmax');

        $validator
            ->numeric('longmin')
            ->allowEmpty('longmin');

        $validator
            ->numeric('longmax')
            ->allowEmpty('longmax');

        $validator
            ->numeric('spectotal')
            ->allowEmpty('spectotal');

        return $validator;
    }
}
