<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Khazanah[]|\Cake\Collection\CollectionInterface $khazanahs
 */
?>
<div class="khazanahs index content">
    <?= $this->Html->link(__('New Khazanah'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Khazanahs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('artist_id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('subtitle') ?></th>
                    <th><?= $this->Paginator->sort('published_date') ?></th>
                    <th><?= $this->Paginator->sort('published_month') ?></th>
                    <th><?= $this->Paginator->sort('published_year') ?></th>
                    <th><?= $this->Paginator->sort('published_to_year') ?></th>
                    <th><?= $this->Paginator->sort('published_date_unknown') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('khazanah_category_id') ?></th>
                    <th><?= $this->Paginator->sort('sorting') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($khazanahs as $khazanah): ?>
                <tr>
                    <td><?= $this->Number->format($khazanah->id) ?></td>
                    <td><?= $khazanah->has('artist') ? $this->Html->link($khazanah->artist->id, ['controller' => 'Artists', 'action' => 'view', $khazanah->artist->id]) : '' ?></td>
                    <td><?= h($khazanah->title) ?></td>
                    <td><?= h($khazanah->subtitle) ?></td>
                    <td><?= $this->Number->format($khazanah->published_date) ?></td>
                    <td><?= h($khazanah->published_month) ?></td>
                    <td><?= $this->Number->format($khazanah->published_year) ?></td>
                    <td><?= $this->Number->format($khazanah->published_to_year) ?></td>
                    <td><?= h($khazanah->published_date_unknown) ?></td>
                    <td><?= $this->Number->format($khazanah->status) ?></td>
                    <td><?= $khazanah->has('khazanah_category') ? $this->Html->link($khazanah->khazanah_category->name, ['controller' => 'KhazanahCategories', 'action' => 'view', $khazanah->khazanah_category->id]) : '' ?></td>
                    <td><?= $this->Number->format($khazanah->sorting) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $khazanah->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $khazanah->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $khazanah->id], ['confirm' => __('Are you sure you want to delete # {0}?', $khazanah->id)]) ?>
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
