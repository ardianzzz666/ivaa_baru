<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArtworksFile $artworksFile
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Artworks File'), ['action' => 'edit', $artworksFile->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Artworks File'), ['action' => 'delete', $artworksFile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artworksFile->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Artworks Files'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Artworks File'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="artworksFiles view content">
            <h3><?= h($artworksFile->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Artwork') ?></th>
                    <td><?= $artworksFile->has('artwork') ? $this->Html->link($artworksFile->artwork->title, ['controller' => 'Artworks', 'action' => 'view', $artworksFile->artwork->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Caption') ?></th>
                    <td><?= h($artworksFile->caption) ?></td>
                </tr>
                <tr>
                    <th><?= __('File Type') ?></th>
                    <td><?= h($artworksFile->file_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Part Clip') ?></th>
                    <td><?= h($artworksFile->part_clip) ?></td>
                </tr>
                <tr>
                    <th><?= __('File Name') ?></th>
                    <td><?= h($artworksFile->file_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($artworksFile->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($artworksFile->status) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
