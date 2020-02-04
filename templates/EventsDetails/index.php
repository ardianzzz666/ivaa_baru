<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EventsDetail[]|\Cake\Collection\CollectionInterface $eventsDetails
 */
?>
<div class="eventsDetails index content">
    <?= $this->Html->link(__('New Events Detail'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Events Details') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('event_id') ?></th>
                    <th><?= $this->Paginator->sort('start_date') ?></th>
                    <th><?= $this->Paginator->sort('end_date') ?></th>
                    <th><?= $this->Paginator->sort('art_venue_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($eventsDetails as $eventsDetail): ?>
                <tr>
                    <td><?= $this->Number->format($eventsDetail->id) ?></td>
                    <td><?= $eventsDetail->has('event') ? $this->Html->link($eventsDetail->event->title, ['controller' => 'Events', 'action' => 'view', $eventsDetail->event->id]) : '' ?></td>
                    <td><?= h($eventsDetail->start_date) ?></td>
                    <td><?= h($eventsDetail->end_date) ?></td>
                    <td><?= $eventsDetail->has('art_venue') ? $this->Html->link($eventsDetail->art_venue->title, ['controller' => 'ArtVenues', 'action' => 'view', $eventsDetail->art_venue->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $eventsDetail->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $eventsDetail->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $eventsDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventsDetail->id)]) ?>
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
