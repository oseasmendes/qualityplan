<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Action Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $data
 * @property \Cake\I18n\FrozenDate $dataprevista
 * @property int $ticket_id
 * @property string $descricaoresumida
 * @property string $descricaocompleta
 * @property string $responsavel
 * @property int $actiontype_id
 *
 * @property \App\Model\Entity\Ticket $ticket
 * @property \App\Model\Entity\Actiontype $actiontype
 * @property \App\Model\Entity\Doc[] $docs
 */
class Action extends Entity
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
        'data' => true,
        'dataprevista' => true,
        'ticket_id' => true,
        'descricaoresumida' => true,
        'descricaocompleta' => true,
        'responsavel' => true,
        'actiontype_id' => true,
        'ticket' => true,
        'actiontype' => true,
        'docs' => true
    ];
}
