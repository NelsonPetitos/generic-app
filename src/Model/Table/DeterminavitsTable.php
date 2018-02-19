<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Determinavits Model
 *
 * @property \App\Model\Table\CollectionsTable|\Cake\ORM\Association\BelongsTo $Collections
 * @property \App\Model\Table\SpeciesTable|\Cake\ORM\Association\BelongsTo $Species
 * @property \App\Model\Table\PeopleViewsTable|\Cake\ORM\Association\BelongsTo $PeopleViews
 *
 * @method \App\Model\Entity\Determinavit get($primaryKey, $options = [])
 * @method \App\Model\Entity\Determinavit newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Determinavit[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Determinavit|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Determinavit patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Determinavit[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Determinavit findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DeterminavitsTable extends Table
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

        $this->setTable('determinavits');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Collections', [
            'foreignKey' => 'collection_id'
        ]);
        $this->belongsTo('Species', [
            'foreignKey' => 'species_id'
        ]);
        $this->belongsTo('PeopleViews', [
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
            ->scalar('curdate')
            ->maxLength('curdate', 1)
            ->allowEmpty('curdate');

        $validator
            ->integer('detday')
            ->allowEmpty('detday');

        $validator
            ->integer('detmonth')
            ->allowEmpty('detmonth');

        $validator
            ->integer('detyear')
            ->allowEmpty('detyear');

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
        $rules->add($rules->existsIn(['collection_id'], 'Collections'));
        $rules->add($rules->existsIn(['species_id'], 'Species'));
        $rules->add($rules->existsIn(['people_view_id'], 'PeopleViews'));

        return $rules;
    }
}
