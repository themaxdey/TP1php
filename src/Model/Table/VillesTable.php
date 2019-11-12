<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Villes Model
 *
 * @property \App\Model\Table\PaysTable&\Cake\ORM\Association\BelongsTo $Pays
 *
 * @method \App\Model\Entity\Ville get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ville newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ville[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ville|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ville saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ville patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ville[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ville findOrCreate($search, callable $callback = null, $options = [])
 */
class VillesTable extends Table
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

        $this->setTable('villes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Pays', [
            'foreignKey' => 'pays_id',
            
        ]);

        $this->hasMany('Assets', [
            'foreignKey' => 'villes_id'
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

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
        $rules->add($rules->existsIn(['pays_id'], 'Pays'));

        return $rules;
    }
}
