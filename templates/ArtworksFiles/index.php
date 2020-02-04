<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArtworksFile[]|\Cake\Collection\CollectionInterface $artworksFiles
 */
?>
<div class="artworksFiles index content">
    <?= $this->Html->link(__('New Artworks File'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Artworks Files') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('artwork_id') ?></th>
                    <th><?= $this->Paginator->sort('caption') ?></th>
                    <th><?= $this->Paginator->sort('file_type') ?></th>
                    <th><?= $this->Paginator->sort('part_clip') ?></th>
                    <th><?= $this->Paginator->sort('file_name') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($artworksFiles as $artworksFile) : ?>
                    <tr>
                        <td><?= $this->Number->format($artworksFile->id) ?></td>
                        <td><?= $artworksFile->has('artwork') ? $this->Html->link($artworksFile->artwork->title, ['controller' => 'Artworks', 'action' => 'view', $artworksFile->artwork->id]) : '' ?></td>
                        <td><?= h($artworksFile->caption) ?></td>
                        <td><?= h($artworksFile->file_type) ?></td>
                        <td><?= h($artworksFile->part_clip) ?></td>
                        <td><?= h($artworksFile->file_name) ?></td>
                        <?php $status = $this->Number->format($artworksFile->status); ?>
                        <td>
                            <?php
                            if ($status > 0) {
                                echo 'Aktif';
                            } else {
                                echo 'Tidak Aktif';
                            }; ?>
                        </td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $artworksFile->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $artworksFile->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $artworksFile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artworksFile->id)]) ?>
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