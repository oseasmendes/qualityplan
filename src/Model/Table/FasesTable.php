<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fases Model
 *
 * @property \App\Model\Table\TicketsTable|\Cake\ORM\Association\HasMany $Tickets
 *
 * @method \App\Model\Entity\Fase get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fase newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fase[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fase|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fase patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fase[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fase findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FasesTable extends Table
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

        $this->setTable('fases');
        $this->setDisplayField('fase');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Tickets', [
            'foreignKey' => 'fase_id'
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
            ->scalar('fase')
            ->maxLength('fase', 45)
            ->allowEmpty('fase');

        return $validator;
    }
}
