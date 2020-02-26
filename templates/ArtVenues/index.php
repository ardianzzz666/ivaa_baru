<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artwork[]|\Cake\Collection\CollectionInterface $artworks
 */
?>
<div class="inner_1 common">
    <div class="inner_2 common">
        <div class="inner_3 common">
            <div class="inner_4 clearfix common">
                <div class="row clearfix common">
                    <div class="option common">
                        <?= $this->Html->link(__('Tambah Kategori'), ['action' => 'add'], ['class' => 'add']) ?>
                    </div>
                </div>

                <div class="table_row common">
                    <table class="common">
                        <thead class="common">
                            <tr class="common">
                                <th><?= $this->Paginator->sort('id') ?></th>
                                <th><?= $this->Paginator->sort('title') ?></th>
                                <th><?= $this->Paginator->sort('Location') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <?php foreach ($artVenues as $artVenue) : ?>
                            <tbody class="common">
                                <tr class="altrow common">
                                    <td><?= $this->Number->format($artVenue->id) ?></td>
                                    <td><?= h($artVenue->title) ?></td>
                                    <td>
                                        <?= $artVenue->has('province') ? $this->Html->link($artVenue->province->name, ['controller' => 'Provinces', 'action' => 'view', $artVenue->province->id]) : '' ?>
                                        ,<?= $artVenue->has('country') ? $this->Html->link($artVenue->country->name, ['controller' => 'Countries', 'action' => 'view', $artVenue->country->id]) : '' ?>
                                    </td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $artVenue->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $artVenue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artVenue->id)]) ?>
                                    </td>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
                <!--end .table_row-->

                <div class="paging common">

                    <div id="pagination-element" class="page_limit common">
                        <ul class="common">
                            <?= $this->Paginator->first('<< ' . __('first')) ?>
                            <?= $this->Paginator->prev('< ' . __('previous')) ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next(__('next') . ' >') ?>
                            <?= $this->Paginator->last(__('last') . ' >>') ?>
                        </ul>
                        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
                    </div>


                    <!--end .pagination-->
                </div>

                <!--end .pagination-->
            </div>
        </div>
    </div>
</div>