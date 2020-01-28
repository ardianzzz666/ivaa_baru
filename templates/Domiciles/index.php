<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Domicile[]|\Cake\Collection\CollectionInterface $domiciles
 */
?>
<div class="domiciles index content">
    <?= $this->Html->link(__('New Domicile'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Domiciles') ?></h3>
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
                <?php foreach ($domiciles as $domicile): ?>
                <tr>
                    <td><?= $this->Number->format($domicile->id) ?></td>
                    <td><?= h($domicile->name) ?></td>
                    <td><?= h($domicile->name_en) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $domicile->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $domicile->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $domicile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $domicile->id)]) ?>
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
