<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\KhazanahsFile[]|\Cake\Collection\CollectionInterface $khazanahsFiles
 */
?>
<div class="khazanahsFiles index content">
    <?= $this->Html->link(__('New Khazanahs File'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Khazanahs Files') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('khazanah_id') ?></th>
                    <th><?= $this->Paginator->sort('caption') ?></th>
                    <th><?= $this->Paginator->sort('file_type') ?></th>
                    <th><?= $this->Paginator->sort('part_clip') ?></th>
                    <th><?= $this->Paginator->sort('file_name') ?></th>
                    <th><?= $this->Paginator->sort('url') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($khazanahsFiles as $khazanahsFile): ?>
                <tr>
                    <td><?= $this->Number->format($khazanahsFile->id) ?></td>
                    <td><?= $khazanahsFile->has('khazanah') ? $this->Html->link($khazanahsFile->khazanah->title, ['controller' => 'Khazanahs', 'action' => 'view', $khazanahsFile->khazanah->id]) : '' ?></td>
                    <td><?= h($khazanahsFile->caption) ?></td>
                    <td><?= h($khazanahsFile->file_type) ?></td>
                    <td><?= h($khazanahsFile->part_clip) ?></td>
                    <td><?= h($khazanahsFile->file_name) ?></td>
                    <td><?= h($khazanahsFile->url) ?></td>
                    <td><?= $this->Number->format($khazanahsFile->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $khazanahsFile->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $khazanahsFile->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $khazanahsFile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $khazanahsFile->id)]) ?>
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
