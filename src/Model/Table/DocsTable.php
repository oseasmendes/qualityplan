<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Docs Model
 *
 * @property \App\Model\Table\ActionsTable|\Cake\ORM\Association\BelongsTo $Actions
 *
 * @method \App\Model\Entity\Doc get($primaryKey, $options = [])
 * @method \App\Model\Entity\Doc newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Doc[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Doc|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Doc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Doc[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Doc findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DocsTable extends Table
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

        $this->setTable('docs');
        $this->setDisplayField('descricaoresumida');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Actions', [
            'foreignKey' => 'action_id'
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
            ->scalar('documentotipo')
            ->maxLength('documentotipo', 45)
            ->allowEmpty('documentotipo');

        $validator
            ->scalar('numerodoc')
            ->maxLength('numerodoc', 45)
            ->allowEmpty('numerodoc');

        $validator
            ->dateTime('dataemissao')
            ->allowEmpty('dataemissao');

        $validator
            ->scalar('proposito')
            ->maxLength('proposito', 45)
            ->allowEmpty('proposito');

        $validator
            ->scalar('responsavel')
            ->maxLength('responsavel', 200)
            ->allowEmpty('responsavel');

        $validator
            ->scalar('descricaoresumida')
            ->maxLength('descricaoresumida', 255)
            ->allowEmpty('descricaoresumida');

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
        $rules->add($rules->existsIn(['action_id'], 'Actions'));

        return $rules;
    }
}
