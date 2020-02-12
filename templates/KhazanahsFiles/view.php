<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\KhazanahsFile $khazanahsFile
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Khazanahs File'), ['action' => 'edit', $khazanahsFile->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Khazanahs File'), ['action' => 'delete', $khazanahsFile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $khazanahsFile->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Khazanahs Files'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Khazanahs File'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="khazanahsFiles view content">
            <h3><?= h($khazanahsFile->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Khazanah') ?></th>
                    <td><?= $khazanahsFile->has('khazanah') ? $this->Html->link($khazanahsFile->khazanah->title, ['controller' => 'Khazanahs', 'action' => 'view', $khazanahsFile->khazanah->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Caption') ?></th>
                    <td><?= h($khazanahsFile->caption) ?></td>
                </tr>
                <tr>
                    <th><?= __('File Type') ?></th>
                    <td><?= h($khazanahsFile->file_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Part Clip') ?></th>
                    <td><?= h($khazanahsFile->part_clip) ?></td>
                </tr>
                <tr>
                    <th><?= __('File Name') ?></th>
                    <td><?= h($khazanahsFile->file_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Url') ?></th>
                    <td><?= h($khazanahsFile->url) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($khazanahsFile->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($khazanahsFile->status) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
