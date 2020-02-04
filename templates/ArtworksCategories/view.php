<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArtworksCategory $artworksCategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Artworks Category'), ['action' => 'edit', $artworksCategory->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Artworks Category'), ['action' => 'delete', $artworksCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artworksCategory->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Artworks Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Artworks Category'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="artworksCategories view content">
            <h3><?= h($artworksCategory->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($artworksCategory->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name En') ?></th>
                    <td><?= h($artworksCategory->name_en) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($artworksCategory->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
