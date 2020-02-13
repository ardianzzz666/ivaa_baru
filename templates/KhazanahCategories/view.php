<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\KhazanahCategory $khazanahCategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Khazanah Category'), ['action' => 'edit', $khazanahCategory->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Khazanah Category'), ['action' => 'delete', $khazanahCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $khazanahCategory->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Khazanah Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Khazanah Category'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="khazanahCategories view content">
            <h3><?= h($khazanahCategory->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($khazanahCategory->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name En') ?></th>
                    <td><?= h($khazanahCategory->name_en) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($khazanahCategory->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Khazanahs') ?></h4>
                <?php if (!empty($khazanahCategory->khazanahs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Artist Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Subtitle') ?></th>
                            <th><?= __('Published Date') ?></th>
                            <th><?= __('Published Month') ?></th>
                            <th><?= __('Published Year') ?></th>
                            <th><?= __('Published To Year') ?></th>
                            <th><?= __('Excerpt En') ?></th>
                            <th><?= __('Excerpt Ind') ?></th>
                            <th><?= __('Published Date Unknown') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Khazanah Category Id') ?></th>
                            <th><?= __('Sorting') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($khazanahCategory->khazanahs as $khazanahs) : ?>
                        <tr>
                            <td><?= h($khazanahs->id) ?></td>
                            <td><?= h($khazanahs->artist_id) ?></td>
                            <td><?= h($khazanahs->title) ?></td>
                            <td><?= h($khazanahs->subtitle) ?></td>
                            <td><?= h($khazanahs->published_date) ?></td>
                            <td><?= h($khazanahs->published_month) ?></td>
                            <td><?= h($khazanahs->published_year) ?></td>
                            <td><?= h($khazanahs->published_to_year) ?></td>
                            <td><?= h($khazanahs->excerpt_en) ?></td>
                            <td><?= h($khazanahs->excerpt_ind) ?></td>
                            <td><?= h($khazanahs->published_date_unknown) ?></td>
                            <td><?= h($khazanahs->status) ?></td>
                            <td><?= h($khazanahs->khazanah_category_id) ?></td>
                            <td><?= h($khazanahs->sorting) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Khazanahs', 'action' => 'view', $khazanahs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Khazanahs', 'action' => 'edit', $khazanahs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Khazanahs', 'action' => 'delete', $khazanahs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $khazanahs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
