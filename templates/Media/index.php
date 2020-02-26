

<div class="inner_1 common">
    <div class="inner_2 common">
        <div class="inner_3 common">
            <div class="inner_4 clearfix common">
                <div class="row clearfix common">
                    <div class="option common">
                        <?= $this->Html->link(__('Tambah Media'), ['action' => 'add'], ['class' => 'add']) ?>
                    </div>
                </div>

                <div class="table_row common">
                    <table class="common">
                        <thead class="common">
                            <tr class="common">
                                <th><?= $this->Paginator->sort('id') ?></th>
                                <th><?= $this->Paginator->sort('name') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <?php foreach ($media as $media) : ?>
                            <tbody class="common">
                                <tr class="altrow common">
                                    <td><?= $this->Number->format($media->id) ?></td>
                                    <td><?= h($media->name) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $media->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $media->id], ['confirm' => __('Are you sure you want to delete # {0}?', $media->id)]) ?>
                                    </td>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>

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
                </div>
            </div>
        </div>
    </div>
</div>