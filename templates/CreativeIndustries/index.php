<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CreativeIndustry[]|\Cake\Collection\CollectionInterface $creativeIndustries
 */
?>
<div class="creativeIndustries index content">
    <?= $this->Html->link(__('New Creative Industry'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Creative Industries') ?></h3>
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
                <?php foreach ($creativeIndustries as $creativeIndustry): ?>
                <tr>
                    <td><?= $this->Number->format($creativeIndustry->id) ?></td>
                    <td><?= h($creativeIndustry->name) ?></td>
                    <td><?= h($creativeIndustry->name_en) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $creativeIndustry->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $creativeIndustry->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $creativeIndustry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $creativeIndustry->id)]) ?>
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
