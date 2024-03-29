<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Markets Model
 *
 * @property \App\Model\Table\AssetsTable&\Cake\ORM\Association\HasMany $Assets
 *
 * @method \App\Model\Entity\Market get($primaryKey, $options = [])
 * @method \App\Model\Entity\Market newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Market[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Market|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Market saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Market patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Market[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Market findOrCreate($search, callable $callback = null, $options = [])
 */
class MarketsTable extends Table
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

        $this->setTable('markets');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Assets', [
            'foreignKey' => 'market_id'
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
            ->scalar('type')
            ->maxLength('type', 255)
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        return $validator;
    }
}
