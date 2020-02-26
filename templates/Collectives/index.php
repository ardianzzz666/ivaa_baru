<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collective[]|\Cake\Collection\CollectionInterface $collectives
 */
?>
<div class="inner_1">
    <div class="inner_2">
        <div class="inner_3">
            <div class="inner_4 clearfix">

                <div class="row clearfix">
                      <?= $this->Form->create($collectives) ?>
                      <div style="display:none;"><input type="hidden" name="_method" value="POST" /></div>                            <div class="sorter">
                        <label for="pelaku">Search by</label>
                        <select name="data[Collective][kondisi]" id="pelaku-sort">
                            <option value="ps">Nama</option>
                            <option value="dom">Domisili</option>
                        </select>
                    </div>
                   
                    <div class="search">
                        <input name="data[Collective][search]" type="text" />                            <input class="orange_bt" type="submit" value="Search" />                            </form></div>
                        <div class="option">
                         <?= $this->Html->link(__('New Collective'), ['action' => 'add'], ['class' => 'button float-right add']) ?>

                     </div>
                      </div>
                     <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th><?= $this->Paginator->sort('id') ?></th>
                                    <th><?= $this->Paginator->sort('name') ?></th>
                                    <th><?= $this->Paginator->sort('domicile_id') ?></th>
                                    <th><?= $this->Paginator->sort('slug') ?></th>
                                    <th><?= $this->Paginator->sort('created') ?></th>
                                    <th><?= $this->Paginator->sort('modified') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($collectives as $collective): ?>
                                    <tr>
                                        <td><?= $this->Number->format($collective->id) ?></td>
                                        <td><?= h($collective->name) ?></td>
                                        <td><?= $collective->has('domicile') ? $this->Html->link($collective->domicile->name, ['controller' => 'Domiciles', 'action' => 'view', $collective->domicile->id]) : '' ?></td>
                                        <td><?= h($collective->slug) ?></td>
                                        <td><?= h($collective->created) ?></td>
                                        <td><?= h($collective->modified) ?></td>
                                        <td class="actions">
                                            <li class="edit">
                                                <?= $this->Html->link(__(''), ['action' => 'edit', $collective->id]) ?>
                                            </li>
                                            <li class="delete">  
                                                <?= $this->Form->postLink(__(''), ['action' => 'delete', $collective->id], ['confirm' => __('Are you sure you want to delete # {0}?', $collective->id)]) ?>
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
