<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Media $media
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Media'), ['action' => 'edit', $media->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Media'), ['action' => 'delete', $media->id], ['confirm' => __('Are you sure you want to delete # {0}?', $media->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Media'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Media'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="media view content">
            <h3><?= h($media->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($media->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($media->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Artworks') ?></h4>
                <?php if (!empty($media->artworks)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Art Start Year') ?></th>
                            <th><?= __('Art End Year') ?></th>
                            <th><?= __('Dimmension Height') ?></th>
                            <th><?= __('Dimmension Width') ?></th>
                            <th><?= __('Dimmension Length') ?></th>
                            <th><?= __('Dimmension Unit') ?></th>
                            <th><?= __('Description En') ?></th>
                            <th><?= __('Description Ind') ?></th>
                            <th><?= __('Artwork Category Id') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Sorting') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($media->artworks as $artworks) : ?>
                        <tr>
                            <td><?= h($artworks->id) ?></td>
                            <td><?= h($artworks->title) ?></td>
                            <td><?= h($artworks->art_start_year) ?></td>
                            <td><?= h($artworks->art_end_year) ?></td>
                            <td><?= h($artworks->dimmension_height) ?></td>
                            <td><?= h($artworks->dimmension_width) ?></td>
                            <td><?= h($artworks->dimmension_length) ?></td>
                            <td><?= h($artworks->dimmension_unit) ?></td>
                            <td><?= h($artworks->description_en) ?></td>
                            <td><?= h($artworks->description_ind) ?></td>
                            <td><?= h($artworks->artwork_category_id) ?></td>
                            <td><?= h($artworks->status) ?></td>
                            <td><?= h($artworks->sorting) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Artworks', 'action' => 'view', $artworks->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Artworks', 'action' => 'edit', $artworks->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Artworks', 'action' => 'delete', $artworks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artworks->id)]) ?>
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
