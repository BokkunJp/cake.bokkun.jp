<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity
 *
 * @property int $id
 * @property ?int $projectId
 * @property string $elapsed_days
 * @property \Cake\I18n\FrozenTime $elapsed_days
 * @property \Cake\I18n\FrozenTime $end_time
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Day[] $days
 * @property \App\Model\Entity\Progress[] $progresses
 */
class Day extends Entity
{
}
