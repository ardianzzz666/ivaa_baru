<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collective $collective
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Collective'), ['action' => 'edit', $collective->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Collective'), ['action' => 'delete', $collective->id], ['confirm' => __('Are you sure you want to delete # {0}?', $collective->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Collectives'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Collective'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="collectives view content">
            <h3><?= h($collective->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($collective->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Domicile') ?></th>
                    <td><?= $collective->has('domicile') ? $this->Html->link($collective->domicile->name, ['controller' => 'Domiciles', 'action' => 'view', $collective->domicile->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Slug') ?></th>
                    <td><?= h($collective->slug) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($collective->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($collective->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($collective->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($collective->description)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Description En') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($collective->description_en)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Artists') ?></h4>
                <?php if (!empty($collective->artists)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Fullname') ?></th>
                            <th><?= __('Nickname') ?></th>
                            <th><?= __('Birth Country') ?></th>
                            <th><?= __('Birth City') ?></th>
                            <th><?= __('Birth Date') ?></th>
                            <th><?= __('Birth Month') ?></th>
                            <th><?= __('Birth Year') ?></th>
                            <th><?= __('Not Alive') ?></th>
                            <th><?= __('Living Address') ?></th>
                            <th><?= __('Living City') ?></th>
                            <th><?= __('Living Country') ?></th>
                            <th><?= __('Domicile') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Website') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Is Registered') ?></th>
                            <th><?= __('Slug') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Obit') ?></th>
                            <th><?= __('Description En') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($collective->artists as $artists) : ?>
                        <tr>
                            <td><?= h($artists->id) ?></td>
                            <td><?= h($artists->user_id) ?></td>
                            <td><?= h($artists->fullname) ?></td>
                            <td><?= h($artists->nickname) ?></td>
                            <td><?= h($artists->birth_country) ?></td>
                            <td><?= h($artists->birth_city) ?></td>
                            <td><?= h($artists->birth_date) ?></td>
                            <td><?= h($artists->birth_month) ?></td>
                            <td><?= h($artists->birth_year) ?></td>
                            <td><?= h($artists->not_alive) ?></td>
                            <td><?= h($artists->living_address) ?></td>
                            <td><?= h($artists->living_city) ?></td>
                            <td><?= h($artists->living_country) ?></td>
                            <td><?= h($artists->domicile) ?></td>
                            <td><?= h($artists->email) ?></td>
                            <td><?= h($artists->phone) ?></td>
                            <td><?= h($artists->website) ?></td>
                            <td><?= h($artists->created) ?></td>
                            <td><?= h($artists->modified) ?></td>
                            <td><?= h($artists->is_registered) ?></td>
                            <td><?= h($artists->slug) ?></td>
                            <td><?= h($artists->description) ?></td>
                            <td><?= h($artists->obit) ?></td>
                            <td><?= h($artists->description_en) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Artists', 'action' => 'view', $artists->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Artists', 'action' => 'edit', $artists->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Artists', 'action' => 'delete', $artists->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artists->id)]) ?>
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
