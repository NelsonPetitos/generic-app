<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PlantDescriptions Model
 *
 * @method \App\Model\Entity\PlantDescription get($primaryKey, $options = [])
 * @method \App\Model\Entity\PlantDescription newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PlantDescription[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PlantDescription|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PlantDescription patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PlantDescription[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PlantDescription findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PlantDescriptionsTable extends Table
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

        $this->setTable('plant_descriptions');
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
            ->scalar('plantdesc')
            ->allowEmpty('plantdesc');

        return $validator;
    }
}
