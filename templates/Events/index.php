<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $events
 */
?>
<div class="events index content">
    <?= $this->Html->link(__('New Event'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Events') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('subtitle') ?></th>
                    <th><?= $this->Paginator->sort('event_time') ?></th>
                    <th><?= $this->Paginator->sort('published_on') ?></th>
                    <th><?= $this->Paginator->sort('event_orgnaizer_id') ?></th>
                    <th><?= $this->Paginator->sort('image_count') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($events as $event): ?>
                <tr>
                    <td><?= $this->Number->format($event->id) ?></td>
                    <td><?= h($event->title) ?></td>
                    <td><?= h($event->subtitle) ?></td>
                    <td><?= h($event->event_time) ?></td>
                    <td><?= h($event->published_on) ?></td>
                    <td><?= $event->has('event_organizer') ? $this->Html->link($event->event_organizer->name, ['controller' => 'EventOrganizers', 'action' => 'view', $event->event_organizer->id]) : '' ?></td>
                    <td><?= $this->Number->format($event->image_count) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $event->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
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
