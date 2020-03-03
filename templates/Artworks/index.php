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
                    <div class="search">
                        <form action="http://archive.ivaa-online.org/admin/artists/search" id="ArtistSearchForm" method="post" accept-charset="utf-8">
                            <div style="display:none;"><input type="hidden" name="_method" value="POST"></div>
                            <div class="sorter">
                                <label for="pelaku">Search by</label>
                                <select name="data[Artist][kondisi]" id="pelaku-sort">
                                    <option value="ps">Nama</option>
                                    <option value="ci">Kategori</option>
                                    <option value="dom">Domisili</option>
                                </select>
                            </div>

                            <input name="data[Artist][search]" type="text"> <input class="orange_bt" type="submit" value="Search">
                        </form>
                    </div>
                    <div class="option common">
                        <!-- <?= $this->Html->link(__('View'), ['action' => 'add', $artwork->id]) ?> -->
                         <?= $this->Html->link(__('Tambah Karya Seni'), ['action' => 'add'], ['class' => 'button float-right add']) ?>
                       </div>
                </div>

                <div class="table_row common">
                    <table class="common">
                        <thead class="common">
                            <tr class="common">
                                <th><?= $this->Paginator->sort('id') ?></th>
                                <th><?= $this->Paginator->sort('title') ?></th>
                                <th><?= $this->Paginator->sort('art_start_year') ?></th>
                                <th><?= $this->Paginator->sort('art_end_year') ?></th>
                                <th><?= $this->Paginator->sort('artwork_category_id') ?></th>
                                <th><?= $this->Paginator->sort('status') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <?php foreach ($artworks as $artwork) : ?>
                            <tbody class="common">
                                <tr class="altrow common">
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