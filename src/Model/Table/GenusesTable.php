<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Genuses Model
 *
 * @property \App\Model\Table\FamiliesTable|\Cake\ORM\Association\BelongsTo $Families
 * @property \App\Model\Table\SpeciesTable|\Cake\ORM\Association\HasMany $Species
 *
 * @method \App\Model\Entity\Genus get($primaryKey, $options = [])
 * @method \App\Model\Entity\Genus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Genus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Genus|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Genus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Genus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Genus findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GenusesTable extends Table
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

        $this->setTable('genuses');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Families', [
            'foreignKey' => 'family_id'
        ]);
        $this->hasMany('Species', [
            'foreignKey' => 'genus_id'
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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['family_id'], 'Families'));

        return $rules;
    }
}
