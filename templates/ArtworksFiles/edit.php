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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $artworksFile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $artworksFile->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Artworks Files'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="artworksFiles form content">
            <?= $this->Form->create($artworksFile) ?>
            <fieldset>
                <legend><?= __('Edit Artworks File') ?></legend>
                <?php
                    echo $this->Form->control('artwork_id', ['options' => $artworks]);
                    echo $this->Form->control('caption');
                    echo $this->Form->control('file_type');
                    echo $this->Form->control('part_clip');
                    echo $this->Form->control('file_name');
                    echo $this->Form->control('status', ['options'=>['1' => 'Aktif','0' => 'Tidak Aktif']]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
