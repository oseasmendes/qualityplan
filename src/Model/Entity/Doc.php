<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Doc Entity
 *
 * @property int $id
 * @property string $documentotipo
 * @property string $numerodoc
 * @property \Cake\I18n\FrozenTime $dataemissao
 * @property string $proposito
 * @property string $responsavel
 * @property string $descricaoresumida
 * @property int $action_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Action $action
 */
class Doc extends Entity
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
        'documentotipo' => true,
        'numerodoc' => true,
        'dataemissao' => true,
        'proposito' => true,
        'responsavel' => true,
        'descricaoresumida' => true,
        'action_id' => true,
        'created' => true,
        'modified' => true,
        'action' => true
    ];
}
