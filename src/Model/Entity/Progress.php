<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $context
 * @property \Cake\I18n\FrozenTime $startTime
 * @property \Cake\I18n\FrozenTime $endTime
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Day[] $days
 * @property \App\Model\Entity\Progress[] $progresses
 */
class Progress extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'title' => true,
        'context' => true,
        'start_time' => true,
        'end_time' => true,
        'created' => true,
        'modified' => true,
        'days' => true,
        'progresses' => true,
    ];
}
