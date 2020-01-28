<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artist[]|\Cake\Collection\CollectionInterface $artists
 */
?>
<div class="artists index content">
    <?= $this->Html->link(__('New Artist'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Artists') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('fullname') ?></th>
                    <th><?= $this->Paginator->sort('nickname') ?></th>
                    <th><?= $this->Paginator->sort('birth_country') ?></th>
                    <th><?= $this->Paginator->sort('birth_city') ?></th>
                    <th><?= $this->Paginator->sort('birth_date') ?></th>
                    <th><?= $this->Paginator->sort('birth_month') ?></th>
                    <th><?= $this->Paginator->sort('birth_year') ?></th>
                    <th><?= $this->Paginator->sort('not_alive') ?></th>
                    <th><?= $this->Paginator->sort('living_address') ?></th>
                    <th><?= $this->Paginator->sort('living_city') ?></th>
                    <th><?= $this->Paginator->sort('living_country') ?></th>
                    <th><?= $this->Paginator->sort('domicile') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('website') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th><?= $this->Paginator->sort('is_registered') ?></th>
                    <th><?= $this->Paginator->sort('slug') ?></th>
                    <th><?= $this->Paginator->sort('obit') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($artists as $artist): ?>
                <tr>
                    <td><?= $this->Number->format($artist->id) ?></td>
                    <td><?= $artist->has('user') ? $this->Html->link($artist->user->id, ['controller' => 'Users', 'action' => 'view', $artist->user->id]) : '' ?></td>
                    <td><?= h($artist->fullname) ?></td>
                    <td><?= h($artist->nickname) ?></td>
                    <td><?= $this->Number->format($artist->birth_country) ?></td>
                    <td><?= $this->Number->format($artist->birth_city) ?></td>
                    <td><?= h($artist->birth_date) ?></td>
                    <td><?= h($artist->birth_month) ?></td>
                    <td><?= h($artist->birth_year) ?></td>
                    <td><?= h($artist->not_alive) ?></td>
                    <td><?= h($artist->living_address) ?></td>
                    <td><?= $this->Number->format($artist->living_city) ?></td>
                    <td><?= $this->Number->format($artist->living_country) ?></td>
                    <td><?= $this->Number->format($artist->domicile) ?></td>
                    <td><?= h($artist->email) ?></td>
                    <td><?= h($artist->phone) ?></td>
                    <td><?= h($artist->website) ?></td>
                    <td><?= h($artist->created) ?></td>
                    <td><?= h($artist->updated) ?></td>
                    <td><?= $this->Number->format($artist->is_registered) ?></td>
                    <td><?= h($artist->slug) ?></td>
                    <td><?= h($artist->obit) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $artist->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $artist->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $artist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artist->id)]) ?>
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
