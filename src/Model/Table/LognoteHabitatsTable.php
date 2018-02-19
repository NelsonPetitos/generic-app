<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LognoteHabitats Model
 *
 * @method \App\Model\Entity\LognoteHabitat get($primaryKey, $options = [])
 * @method \App\Model\Entity\LognoteHabitat newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LognoteHabitat[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LognoteHabitat|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LognoteHabitat patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LognoteHabitat[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LognoteHabitat findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LognoteHabitatsTable extends Table
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

        $this->setTable('lognote_habitats');
        $this->setDisplayField('collection_id');
        $this->setPrimaryKey('collection_id');

        $this->addBehavior('Timestamp');
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
            ->integer('collection_id')
            ->allowEmpty('collection_id', 'create');

        $validator
            ->scalar('locnotes')
            ->allowEmpty('locnotes');

        $validator
            ->scalar('habitattxt')
            ->allowEmpty('habitattxt');

        return $validator;
    }
}
