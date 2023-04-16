<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Project'), ['action' => 'edit', $project->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Project'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Projects'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Project'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="projects view content">
            <h3><?= h($project->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($project->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Time') ?></th>
                    <td><?= h($project->start_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('End Time') ?></th>
                    <td><?= h($project->end_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($project->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($project->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Title') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($project->title)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Context') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($project->context)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Days') ?></h4>
                <?php if (!empty($project->days)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Project Id') ?></th>
                            <th><?= __('Elapsed Days') ?></th>
                            <th><?= __('Elapse Progress') ?></th>
                            <th><?= __('Elapse Progress Total') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($project->days as $days) : ?>
                        <tr>
                            <td><?= h($days->id) ?></td>
                            <td><?= h($days->project_id) ?></td>
                            <td><?= h($days->elapsed_days) ?></td>
                            <td><?= h($days->elapse_progress) ?></td>
                            <td><?= h($days->elapse_progress_total) ?></td>
                            <td><?= h($days->created) ?></td>
                            <td><?= h($days->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Days', 'action' => 'view', $days->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Days', 'action' => 'edit', $days->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Days', 'action' => 'delete', $days->id], ['confirm' => __('Are you sure you want to delete # {0}?', $days->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Progresses') ?></h4>
                <?php if (!empty($project->progresses)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Project Id') ?></th>
                            <th><?= __('Start Time') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($project->progresses as $progresses) : ?>
                        <tr>
                            <td><?= h($progresses->id) ?></td>
                            <td><?= h($progresses->project_id) ?></td>
                            <td><?= h($progresses->start_time) ?></td>
                            <td><?= h($progresses->created) ?></td>
                            <td><?= h($progresses->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Progresses', 'action' => 'view', $progresses->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Progresses', 'action' => 'edit', $progresses->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Progresses', 'action' => 'delete', $progresses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $progresses->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
