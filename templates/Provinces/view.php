<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Province $province
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Province'), ['action' => 'edit', $province->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Province'), ['action' => 'delete', $province->id], ['confirm' => __('Are you sure you want to delete # {0}?', $province->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Provinces'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Province'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="provinces view content">
            <h3><?= h($province->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($province->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name En') ?></th>
                    <td><?= h($province->name_en) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($province->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Art Venues') ?></h4>
                <?php if (!empty($province->art_venues)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Sub Title') ?></th>
                            <th><?= __('Manager Name') ?></th>
                            <th><?= __('Manager Phone') ?></th>
                            <th><?= __('Manager Email') ?></th>
                            <th><?= __('Address 1') ?></th>
                            <th><?= __('Address 2') ?></th>
                            <th><?= __('City Id') ?></th>
                            <th><?= __('Province Id') ?></th>
                            <th><?= __('Country Id') ?></th>
                            <th><?= __('Contact Phone') ?></th>
                            <th><?= __('Contact Fax') ?></th>
                            <th><?= __('Contact Email') ?></th>
                            <th><?= __('Website') ?></th>
                            <th><?= __('Start Year') ?></th>
                            <th><?= __('End Year') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($province->art_venues as $artVenues) : ?>
                        <tr>
                            <td><?= h($artVenues->id) ?></td>
                            <td><?= h($artVenues->title) ?></td>
                            <td><?= h($artVenues->sub_title) ?></td>
                            <td><?= h($artVenues->manager_name) ?></td>
                            <td><?= h($artVenues->manager_phone) ?></td>
                            <td><?= h($artVenues->manager_email) ?></td>
                            <td><?= h($artVenues->address_1) ?></td>
                            <td><?= h($artVenues->address_2) ?></td>
                            <td><?= h($artVenues->city_id) ?></td>
                            <td><?= h($artVenues->province_id) ?></td>
                            <td><?= h($artVenues->country_id) ?></td>
                            <td><?= h($artVenues->contact_phone) ?></td>
                            <td><?= h($artVenues->contact_fax) ?></td>
                            <td><?= h($artVenues->contact_email) ?></td>
                            <td><?= h($artVenues->website) ?></td>
                            <td><?= h($artVenues->start_year) ?></td>
                            <td><?= h($artVenues->end_year) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ArtVenues', 'action' => 'view', $artVenues->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ArtVenues', 'action' => 'edit', $artVenues->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ArtVenues', 'action' => 'delete', $artVenues->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artVenues->id)]) ?>
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
