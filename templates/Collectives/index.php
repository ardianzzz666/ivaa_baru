<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collective[]|\Cake\Collection\CollectionInterface $collectives
 */
?>
<div class="collectives index content">
    <?= $this->Html->link(__('New Collective'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Collectives') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('domicile_id') ?></th>
                    <th><?= $this->Paginator->sort('slug') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($collectives as $collective): ?>
                <tr>
                    <td><?= $this->Number->format($collective->id) ?></td>
                    <td><?= h($collective->name) ?></td>
                    <td><?= $collective->has('domicile') ? $this->Html->link($collective->domicile->name, ['controller' => 'Domiciles', 'action' => 'view', $collective->domicile->id]) : '' ?></td>
                    <td><?= h($collective->slug) ?></td>
                    <td><?= h($collective->created) ?></td>
                    <td><?= h($collective->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $collective->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $collective->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $collective->id], ['confirm' => __('Are you sure you want to delete # {0}?', $collective->id)]) ?>
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
