<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Roso[]|\Cake\Collection\CollectionInterface $roso
 */
?>
<div class="roso index content">
    <?= $this->Html->link(__('New Roso'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Roso') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nama') ?></th>
                    <th><?= $this->Paginator->sort('alamat') ?></th>
                    <th><?= $this->Paginator->sort('telp') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($roso as $roso): ?>
                <tr>
                    <td><?= $this->Number->format($roso->id) ?></td>
                    <td><?= h($roso->nama) ?></td>
                    <td><?= h($roso->alamat) ?></td>
                    <td><?= h($roso->telp) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $roso->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $roso->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $roso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roso->id)]) ?>
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
