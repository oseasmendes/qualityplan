<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tickets Model
 *
 * @property \App\Model\Table\TypeticketsTable|\Cake\ORM\Association\BelongsTo $Typetickets
 * @property \App\Model\Table\StatsTable|\Cake\ORM\Association\BelongsTo $Stats
 * @property \App\Model\Table\DepartamentosTable|\Cake\ORM\Association\BelongsTo $Departamentos
 * @property \App\Model\Table\VendorsTable|\Cake\ORM\Association\BelongsTo $Vendors
 * @property \App\Model\Table\TecnicosTable|\Cake\ORM\Association\BelongsTo $Tecnicos
 * @property \App\Model\Table\FasesTable|\Cake\ORM\Association\BelongsTo $Fases
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ProjetosTable|\Cake\ORM\Association\BelongsTo $Projetos
 * @property \App\Model\Table\ActionsTable|\Cake\ORM\Association\HasMany $Actions
 *
 * @method \App\Model\Entity\Ticket get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ticket newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ticket[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ticket|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ticket patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ticket[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ticket findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TicketsTable extends Table
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

        $this->setTable('tickets');
        $this->setDisplayField('descricaoresumida');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Typetickets', [
            'foreignKey' => 'typeticket_id'
        ]);
        $this->belongsTo('Stats', [
            'foreignKey' => 'stat_id'
        ]);
        $this->belongsTo('Departamentos', [
            'foreignKey' => 'departamento_id'
        ]);
        $this->belongsTo('Vendors', [
            'foreignKey' => 'vendor_id'
        ]);
        $this->belongsTo('Tecnicos', [
            'foreignKey' => 'tecnico_id'
        ]);
        $this->belongsTo('Fases', [
            'foreignKey' => 'fase_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('Projetos', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->hasMany('Actions', [
            'foreignKey' => 'ticket_id'
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
            ->scalar('formversion')
            ->maxLength('formversion', 45)
            ->allowEmpty('formversion');

        $validator
            ->scalar('numeroreferencia')
            ->maxLength('numeroreferencia', 45)
            ->allowEmpty('numeroreferencia');

        $validator
            ->date('data')
            ->allowEmpty('data');

        $validator
            ->decimal('registrototal')
            ->allowEmpty('registrototal');

        $validator
            ->scalar('unidade')
            ->maxLength('unidade', 50)
            ->allowEmpty('unidade');

        $validator
            ->decimal('setup')
            ->allowEmpty('setup');

        $validator
            ->decimal('retrabalho')
            ->allowEmpty('retrabalho');

        $validator
            ->decimal('estoque')
            ->allowEmpty('estoque');

        $validator
            ->scalar('partnumber')
            ->maxLength('partnumber', 20)
            ->allowEmpty('partnumber');

        $validator
            ->scalar('partnumbercliente')
            ->maxLength('partnumbercliente', 20)
            ->allowEmpty('partnumbercliente');

        $validator
            ->decimal('quantidade')
            ->allowEmpty('quantidade');

        $validator
            ->scalar('historico')
            ->maxLength('historico', 4294967295)
            ->allowEmpty('historico');

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
        $rules->add($rules->existsIn(['typeticket_id'], 'Typetickets'));
        $rules->add($rules->existsIn(['stat_id'], 'Stats'));
        $rules->add($rules->existsIn(['departamento_id'], 'Departamentos'));
        $rules->add($rules->existsIn(['vendor_id'], 'Vendors'));
        $rules->add($rules->existsIn(['tecnico_id'], 'Tecnicos'));
        $rules->add($rules->existsIn(['fase_id'], 'Fases'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['projeto_id'], 'Projetos'));

        return $rules;
    }
}
