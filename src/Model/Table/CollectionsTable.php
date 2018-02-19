<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Collections Model
 *
 * @property \App\Model\Table\CollectorsTable|\Cake\ORM\Association\BelongsTo $Collectors
 * @property \App\Model\Table\DeterminavitsTable|\Cake\ORM\Association\HasMany $Determinavits
 * @property \App\Model\Table\LognoteHabitatsTable|\Cake\ORM\Association\HasMany $LognoteHabitats
 * @property \App\Model\Table\PlantDescriptionsTable|\Cake\ORM\Association\HasMany $PlantDescriptions
 *
 * @method \App\Model\Entity\Collection get($primaryKey, $options = [])
 * @method \App\Model\Entity\Collection newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Collection[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Collection|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Collection patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Collection[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Collection findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CollectionsTable extends Table
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

        $this->setTable('collections');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Collectors', [
            'foreignKey' => 'collector_id'
        ]);
        $this->hasMany('Determinavits', [
            'foreignKey' => 'collection_id'
        ]);
        $this->hasMany('LognoteHabitats', [
            'foreignKey' => 'collection_id'
        ]);
        $this->hasMany('PlantDescriptions', [
            'foreignKey' => 'collection_id'
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
            ->scalar('dbid')
            ->allowEmpty('dbid');

        $validator
            ->scalar('type')
            ->allowEmpty('type');

        $validator
            ->scalar('category')
            ->allowEmpty('category');

        $validator
            ->integer('images')
            ->allowEmpty('images');

        $validator
            ->integer('specimens')
            ->allowEmpty('specimens');

        $validator
            ->scalar('barcode')
            ->allowEmpty('barcode');

        $validator
            ->scalar('collector')
            ->allowEmpty('collector');

        $validator
            ->scalar('accession')
            ->allowEmpty('accession');

        $validator
            ->scalar('prefix')
            ->allowEmpty('prefix');

        $validator
            ->integer('num')
            ->allowEmpty('num');

        $validator
            ->scalar('suffixe')
            ->allowEmpty('suffixe');

        $validator
            ->scalar('addcol')
            ->allowEmpty('addcol');

        $validator
            ->scalar('dups')
            ->allowEmpty('dups');

        $validator
            ->integer('day_col')
            ->allowEmpty('day_col');

        $validator
            ->integer('month_col')
            ->allowEmpty('month_col');

        $validator
            ->integer('year_col')
            ->allowEmpty('year_col');

        $validator
            ->scalar('collected')
            ->allowEmpty('collected');

        $validator
            ->scalar('detby')
            ->allowEmpty('detby');

        $validator
            ->integer('detday')
            ->allowEmpty('detday');

        $validator
            ->integer('detmonth')
            ->allowEmpty('detmonth');

        $validator
            ->integer('detyear')
            ->allowEmpty('detyear');

        $validator
            ->scalar('detdate')
            ->allowEmpty('detdate');

        $validator
            ->boolean('flcode')
            ->allowEmpty('flcode');

        $validator
            ->boolean('frcode')
            ->allowEmpty('frcode');

        $validator
            ->numeric('dbh')
            ->allowEmpty('dbh');

        $validator
            ->integer('ht')
            ->allowEmpty('ht');

        $validator
            ->boolean('cultivated')
            ->allowEmpty('cultivated');

        $validator
            ->boolean('phenocult')
            ->allowEmpty('phenocult');

        $validator
            ->numeric('latitude')
            ->allowEmpty('latitude');

        $validator
            ->scalar('ns')
            ->maxLength('ns', 1)
            ->allowEmpty('ns');

        $validator
            ->numeric('longitude')
            ->allowEmpty('longitude');

        $validator
            ->scalar('ew')
            ->maxLength('ew', 1)
            ->allowEmpty('ew');

        $validator
            ->scalar('latlong')
            ->allowEmpty('latlong');

        $validator
            ->numeric('latdec')
            ->allowEmpty('latdec');

        $validator
            ->numeric('longdec')
            ->allowEmpty('longdec');

        $validator
            ->integer('alt')
            ->allowEmpty('alt');

        $validator
            ->integer('altmax')
            ->allowEmpty('altmax');

        $validator
            ->scalar('altunit')
            ->allowEmpty('altunit');

        $validator
            ->scalar('vernacular')
            ->allowEmpty('vernacular');

        $validator
            ->scalar('language')
            ->allowEmpty('language');

        $validator
            ->scalar('genus')
            ->allowEmpty('genus');

        $validator
            ->scalar('sp1')
            ->allowEmpty('sp1');

        $validator
            ->scalar('author1')
            ->allowEmpty('author1');

        $validator
            ->scalar('rank1')
            ->allowEmpty('rank1');

        $validator
            ->scalar('sp2')
            ->allowEmpty('sp2');

        $validator
            ->scalar('author2')
            ->allowEmpty('author2');

        $validator
            ->scalar('rank2')
            ->allowEmpty('rank2');

        $validator
            ->scalar('sp3')
            ->allowEmpty('sp3');

        $validator
            ->scalar('author3')
            ->allowEmpty('author3');

        $validator
            ->integer('pview')
            ->allowEmpty('pview');

        $validator
            ->integer('gazcode')
            ->allowEmpty('gazcode');

        $validator
            ->integer('facode')
            ->allowEmpty('facode');

        $validator
            ->integer('gecode')
            ->allowEmpty('gecode');

        $validator
            ->integer('spnumber')
            ->allowEmpty('spnumber');

        $validator
            ->integer('spsynid')
            ->allowEmpty('spsynid');

        $validator
            ->integer('spcodetype')
            ->allowEmpty('spcodetype');

        $validator
            ->integer('detbycode')
            ->allowEmpty('detbycode');

        $validator
            ->integer('conumber')
            ->allowEmpty('conumber');

        $validator
            ->scalar('homestat')
            ->allowEmpty('homestat');

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
        $rules->add($rules->existsIn(['collector_id'], 'Collectors'));

        return $rules;
    }
}
