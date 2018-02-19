<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Inventories Model
 *
 * @property \App\Model\Table\SpeciesTable|\Cake\ORM\Association\BelongsTo $Species
 *
 * @method \App\Model\Entity\Inventory get($primaryKey, $options = [])
 * @method \App\Model\Entity\Inventory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Inventory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Inventory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Inventory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Inventory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Inventory findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class InventoriesTable extends Table
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

        $this->setTable('inventories');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Species', [
            'foreignKey' => 'species_id'
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
            ->scalar('zone')
            ->allowEmpty('zone');

        $validator
            ->scalar('date_inventaire')
            ->allowEmpty('date_inventaire');

        $validator
            ->scalar('nom_commun')
            ->allowEmpty('nom_commun');

        $validator
            ->numeric('long')
            ->allowEmpty('long');

        $validator
            ->numeric('lat')
            ->allowEmpty('lat');

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
        $rules->add($rules->existsIn(['species_id'], 'Species'));

        return $rules;
    }
}
