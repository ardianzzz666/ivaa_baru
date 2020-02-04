<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArtworksCategory[]|\Cake\Collection\CollectionInterface $artworksCategories
 */
?>
<div class="artworksCategories index content">
    <?= $this->Html->link(__('New Artworks Category'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Artworks Categories') ?></h3>
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
                <?php foreach ($artworksCategories as $artworksCategory): ?>
                <tr>
                    <td><?= $this->Number->format($artworksCategory->id) ?></td>
                    <td><?= h($artworksCategory->name) ?></td>
                    <td><?= h($artworksCategory->name_en) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $artworksCategory->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $artworksCategory->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $artworksCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artworksCategory->id)]) ?>
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
