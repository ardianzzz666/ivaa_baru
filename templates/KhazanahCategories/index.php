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
                                <th><?= $this->Paginator->sort('name') ?></th>
                                <th><?= $this->Paginator->sort('name_en') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <?php foreach ($khazanahCategories as $khazanahCategory) : ?>
                            <tbody class="common">
                                <tr class="altrow common">
                                    <td><?= $this->Number->format($khazanahCategory->id) ?></td>
                                    <td><?= h($khazanahCategory->name) ?></td>
                                    <td><?= h($khazanahCategory->name_en) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $khazanahCategory->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $khazanahCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $khazanahCategory->id)]) ?>
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