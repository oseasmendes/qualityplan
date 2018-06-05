<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ticket Entity
 *
 * @property int $id
 * @property int $typeticket_id
 * @property int $stat_id
 * @property string $formversion
 * @property string $numeroreferencia
 * @property \Cake\I18n\FrozenDate $data
 * @property int $departamento_id
 * @property int $vendor_id
 * @property float $registrototal
 * @property string $unidade
 * @property float $setup
 * @property float $retrabalho
 * @property float $estoque
 * @property string $partnumber
 * @property string $partnumbercliente
 * @property float $quantidade
 * @property int $tecnico_id
 * @property int $fase_id
 * @property string $historico
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $descricaoresumida
 * @property int $user_id
 * @property int $projeto_id
 *
 * @property \App\Model\Entity\Typeticket $typeticket
 * @property \App\Model\Entity\Stat $stat
 * @property \App\Model\Entity\Departamento $departamento
 * @property \App\Model\Entity\Vendor $vendor
 * @property \App\Model\Entity\Tecnico $tecnico
 * @property \App\Model\Entity\Fase $fase
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Projeto $projeto
 * @property \App\Model\Entity\Action[] $actions
 */
class Ticket extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'typeticket_id' => true,
        'stat_id' => true,
        'formversion' => true,
        'numeroreferencia' => true,
        'data' => true,
        'departamento_id' => true,
        'vendor_id' => true,
        'registrototal' => true,
        'unidade' => true,
        'setup' => true,
        'retrabalho' => true,
        'estoque' => true,
        'partnumber' => true,
        'partnumbercliente' => true,
        'quantidade' => true,
        'tecnico_id' => true,
        'fase_id' => true,
        'historico' => true,
        'created' => true,
        'modified' => true,
        'descricaoresumida' => true,
        'user_id' => true,
        'projeto_id' => true,
        'typeticket' => true,
        'stat' => true,
        'departamento' => true,
        'vendor' => true,
        'tecnico' => true,
        'fase' => true,
        'user' => true,
        'projeto' => true,
        'actions' => true
    ];


}
