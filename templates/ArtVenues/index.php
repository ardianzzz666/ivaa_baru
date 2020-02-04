<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArtVenue[]|\Cake\Collection\CollectionInterface $artVenues
 */
?>
<div class="artVenues index content">
    <?= $this->Html->link(__('New Art Venue'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Art Venues') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('sub_title') ?></th>
                    <th><?= $this->Paginator->sort('manager_name') ?></th>
                    <th><?= $this->Paginator->sort('manager_phone') ?></th>
                    <th><?= $this->Paginator->sort('manager_email') ?></th>
                    <th><?= $this->Paginator->sort('address_1') ?></th>
                    <th><?= $this->Paginator->sort('address_2') ?></th>
                    <th><?= $this->Paginator->sort('city_id') ?></th>
                    <th><?= $this->Paginator->sort('province_id') ?></th>
                    <th><?= $this->Paginator->sort('country_id') ?></th>
                    <th><?= $this->Paginator->sort('contact_phone') ?></th>
                    <th><?= $this->Paginator->sort('contact_fax') ?></th>
                    <th><?= $this->Paginator->sort('contact_email') ?></th>
                    <th><?= $this->Paginator->sort('website') ?></th>
                    <th><?= $this->Paginator->sort('start_year') ?></th>
                    <th><?= $this->Paginator->sort('end_year') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($artVenues as $artVenue): ?>
                <tr>
                    <td><?= $this->Number->format($artVenue->id) ?></td>
                    <td><?= h($artVenue->title) ?></td>
                    <td><?= h($artVenue->sub_title) ?></td>
                    <td><?= h($artVenue->manager_name) ?></td>
                    <td><?= h($artVenue->manager_phone) ?></td>
                    <td><?= h($artVenue->manager_email) ?></td>
                    <td><?= h($artVenue->address_1) ?></td>
                    <td><?= h($artVenue->address_2) ?></td>
                    <td><?= $artVenue->has('city') ? $this->Html->link($artVenue->city->name, ['controller' => 'Cities', 'action' => 'view', $artVenue->city->id]) : '' ?></td>
                    <td><?= $artVenue->has('province') ? $this->Html->link($artVenue->province->name, ['controller' => 'Provinces', 'action' => 'view', $artVenue->province->id]) : '' ?></td>
                    <td><?= $artVenue->has('country') ? $this->Html->link($artVenue->country->name, ['controller' => 'Countries', 'action' => 'view', $artVenue->country->id]) : '' ?></td>
                    <td><?= h($artVenue->contact_phone) ?></td>
                    <td><?= h($artVenue->contact_fax) ?></td>
                    <td><?= h($artVenue->contact_email) ?></td>
                    <td><?= h($artVenue->website) ?></td>
                    <td><?= $this->Number->format($artVenue->start_year) ?></td>
                    <td><?= $this->Number->format($artVenue->end_year) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $artVenue->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $artVenue->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $artVenue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artVenue->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
