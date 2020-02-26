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
                        <?= $this->Html->link(__('Tambah Events'), ['action' => 'add'], ['class' => 'add']) ?>
                    </div>
                </div>

                <div class="table_row common">
                    <table class="common">
                        <thead class="common">
                            <tr class="common">
                                <th><?= $this->Paginator->sort('id') ?></th>
                                <th><?= $this->Paginator->sort('title') ?></th>
                                <th><?= $this->Paginator->sort('subtitle') ?></th>
                                <th><?= $this->Paginator->sort('event_orgnaizer_id') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <?php foreach ($events as $event) : ?>
                            <tbody class="common">
                                <tr class="altrow common">
                                    <td><?= $this->Number->format($event->id) ?></td>
                                    <td><?= h($event->title) ?></td>
                                    <td><?= h($event->subtitle) ?></td>
                                    <td><?= $event->has('event_organizer') ? $this->Html->link($event->event_organizer->name, ['controller' => 'EventOrganizers', 'action' => 'view', $event->event_organizer->id]) : '' ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $event->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
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