<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artwork[]|\Cake\Collection\CollectionInterface $artworks
 */
?>
<div class="artworks index content">
    <?= $this->Html->link(__('New Artwork'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Artworks') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('art_start_year') ?></th>
                    <th><?= $this->Paginator->sort('art_end_year') ?></th>
                    <th><?= $this->Paginator->sort('artwork_category_id') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($artworks as $artwork) : ?>
                    <tr>
                        <td><?= $this->Number->format($artwork->id) ?></td>
                        <td><?= h($artwork->title) ?></td>
                        <td><?= $this->Number->format($artwork->art_start_year) ?></td>
                        <td><?= $this->Number->format($artwork->art_end_year) ?></td>
                        <td><?= $artwork->has('artworks_category') ? $this->Html->link($artwork->artworks_category->name, ['controller' => 'ArtworksCategories', 'action' => 'view', $artwork->artworks_category->id]) : '' ?></td>
                        <?php $status = $this->Number->format($artwork->status); ?>
                        <td>
                            <?php
                            if ($status > 0) {
                                echo 'Aktif';
                            } else {
                                echo 'Tidak Aktif';
                            }; ?>
                        </td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $artwork->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $artwork->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $artwork->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artwork->id)]) ?>
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