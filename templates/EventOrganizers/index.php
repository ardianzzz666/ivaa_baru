<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EventOrganizer[]|\Cake\Collection\CollectionInterface $eventOrganizers
 */
?>
<div class="eventOrganizers index content">
    <?= $this->Html->link(__('New Event Organizer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Event Organizers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($eventOrganizers as $eventOrganizer): ?>
                <tr>
                    <td><?= $this->Number->format($eventOrganizer->id) ?></td>
                    <td><?= h($eventOrganizer->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $eventOrganizer->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $eventOrganizer->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $eventOrganizer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventOrganizer->id)]) ?>
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
