<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EventsCategory[]|\Cake\Collection\CollectionInterface $eventsCategories
 */
?>
<div class="eventsCategories index content">
    <?= $this->Html->link(__('New Events Category'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Events Categories') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('name_en') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($eventsCategories as $eventsCategory): ?>
                <tr>
                    <td><?= $this->Number->format($eventsCategory->id) ?></td>
                    <td><?= h($eventsCategory->name) ?></td>
                    <td><?= h($eventsCategory->name_en) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $eventsCategory->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $eventsCategory->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $eventsCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventsCategory->id)]) ?>
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
