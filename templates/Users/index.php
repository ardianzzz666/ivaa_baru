<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<!-- <div class="users index content"> -->
    <div class="inner_1">
        <div class="inner_2">
            <div class="inner_3">
                <div class="inner_4 clearfix">
                 <div class="search">
                    <input type="text" name="search" /><button class="orange_bt" type="submit">Search</button>
                </div>
                <div class="option">
                    <?= $this->Html->link(__('Tambah'), ['action' => 'add'], ['class' => 'button float-right add']) ?>
                </div>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th><?= $this->Paginator->sort('id') ?></th>
                                <th><?= $this->Paginator->sort('username') ?></th>
                                <th><?= $this->Paginator->sort('email') ?></th>
                                <th><?= $this->Paginator->sort('password') ?></th>
                                <th><?= $this->Paginator->sort('created') ?></th>
                                <th><?= $this->Paginator->sort('modified') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?= $this->Number->format($user->id) ?></td>
                                    <td><?= h($user->username) ?></td>
                                    <td><?= h($user->email) ?></td>
                                    <td><?= h($user->password) ?></td>
                                    <td><?= h($user->created) ?></td>
                                    <td><?= h($user->modified) ?></td>
                                    <td class="actions">
                                        <li class="view"> 
                                            <?= $this->Html->link(__(''), ['action' => 'view', $user->id]) ?>
                                        </li>
                                         <li class="edit"> 
                                        <?= $this->Html->link(__(''), ['action' => 'edit', $user->id]) ?>
                                        </li>
                                         <li class="delete"> 
                                        <?= $this->Form->postLink(__(''), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                                        </li>
                                        
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="paging common">
                    <div id="pagination-element" class="page_limit common">
                        <ul  class=" common">
                            <?= $this->Paginator->first('<< ' . __('first')) ?>
                            <?= $this->Paginator->prev('< ' . __('previous')) ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next(__('next') . ' >') ?>
                            <?= $this->Paginator->last(__('last') . ' >>') ?>
                        </ul>
                        <p>
                            <?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
