<?php
namespace App\Model\Table;

use App\Model\Entity\Carro;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Carros Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Clientes
 */
class CarrosTable extends Table
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

        $this->table('carros');
        $this->displayField('descripcion');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
        $this->hasMany('Ventatotales', [
            'foreignKey' => 'carro_id'
        ]);
        $this->belongsTo('Clientes', [
            'foreignKey' => 'cliente_id',
            'joinType' => 'INNER'
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
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

        $validator
            ->requirePresence('marca', 'create')
            ->notEmpty('marca');
        $validator
            ->requirePresence('year', 'create')
            ->notEmpty('year');

        $validator
            ->requirePresence('modelo', 'create')
            ->notEmpty('modelo');
        $validator
            ->requirePresence('tipo', 'create')
            ->notEmpty('tipo');
            
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
        $rules->add($rules->existsIn(['cliente_id'], 'Clientes'));
        return $rules;
    }
}
