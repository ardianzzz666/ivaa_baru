<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArtistsCollective[]|\Cake\Collection\CollectionInterface $artistsCollectives
 */
?>
<div class="artistsCollectives index content">
    <?= $this->Html->link(__('New Artists Collective'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Artists Collectives') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('artist_id') ?></th>
                    <th><?= $this->Paginator->sort('collective_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($artistsCollectives as $artistsCollective): ?>
                <tr>
                    <td><?= $this->Number->format($artistsCollective->id) ?></td>
                    <td><?= $artistsCollective->has('artist') ? $this->Html->link($artistsCollective->artist->id, ['controller' => 'Artists', 'action' => 'view', $artistsCollective->artist->id]) : '' ?></td>
                    <td><?= $artistsCollective->has('collective') ? $this->Html->link($artistsCollective->collective->name, ['controller' => 'Collectives', 'action' => 'view', $artistsCollective->collective->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $artistsCollective->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $artistsCollective->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $artistsCollective->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artistsCollective->id)]) ?>
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
