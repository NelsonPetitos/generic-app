<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Species Model
 *
 * @property \App\Model\Table\GenusesTable|\Cake\ORM\Association\BelongsTo $Genuses
 * @property \App\Model\Table\SpeciesTable|\Cake\ORM\Association\BelongsTo $Species
 * @property \App\Model\Table\CommonsTable|\Cake\ORM\Association\HasMany $Commons
 * @property \App\Model\Table\DeterminavitsTable|\Cake\ORM\Association\HasMany $Determinavits
 * @property \App\Model\Table\InventoriesTable|\Cake\ORM\Association\HasMany $Inventories
 * @property \App\Model\Table\SpeciesTable|\Cake\ORM\Association\HasMany $Species
 *
 * @method \App\Model\Entity\Species get($primaryKey, $options = [])
 * @method \App\Model\Entity\Species newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Species[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Species|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Species patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Species[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Species findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SpeciesTable extends Table
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

        $this->setTable('species');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Genuses', [
            'foreignKey' => 'genus_id'
        ]);
        $this->belongsTo('Species', [
            'foreignKey' => 'species_id'
        ]);
        $this->hasMany('Commons', [
            'foreignKey' => 'species_id'
        ]);
        $this->hasMany('Determinavits', [
            'foreignKey' => 'species_id'
        ]);
        $this->hasMany('Inventories', [
            'foreignKey' => 'species_id'
        ]);
        $this->hasMany('Species', [
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
            ->scalar('taxstat')
            ->allowEmpty('taxstat');

        $validator
            ->scalar('syncat')
            ->allowEmpty('syncat');

        $validator
            ->scalar('sp1')
            ->allowEmpty('sp1');

        $validator
            ->scalar('rank1')
            ->allowEmpty('rank1');

        $validator
            ->scalar('sp2')
            ->allowEmpty('sp2');

        $validator
            ->scalar('rank2')
            ->allowEmpty('rank2');

        $validator
            ->scalar('sp3')
            ->allowEmpty('sp3');

        $validator
            ->scalar('citation')
            ->allowEmpty('citation');

        $validator
            ->integer('year_sp')
            ->allowEmpty('year_sp');

        $validator
            ->scalar('cites')
            ->allowEmpty('cites');

        $validator
            ->scalar('accname')
            ->allowEmpty('accname');

        $validator
            ->scalar('fullname')
            ->allowEmpty('fullname');

        $validator
            ->integer('spectotal')
            ->allowEmpty('spectotal');

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
        $rules->add($rules->existsIn(['genus_id'], 'Genuses'));
        $rules->add($rules->existsIn(['species_id'], 'Species'));

        return $rules;
    }
}
