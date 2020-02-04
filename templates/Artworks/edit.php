<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artwork $artwork
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $artwork->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $artwork->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Artworks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="artworks form content">
            <?= $this->Form->create($artwork) ?>
            <fieldset>
                <legend><?= __('Edit Artwork') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('artwork_category_id', ['options' => $artworksCategories]);
                    echo $this->Form->control('media._ids',['multiple' => 'checkbox'], $media);
                    echo $this->Form->control('art_start_year');
                    echo $this->Form->control('art_end_year');
                    echo $this->Form->control('dimmension_height');
                    echo $this->Form->control('dimmension_width');
                    echo $this->Form->control('dimmension_length');
                    echo $this->Form->control('dimmension_unit', ['options'=>['1' => 'CM','2' => 'MM','0' => 'Pixel']]);
                    echo $this->Form->control('description_en');
                    echo $this->Form->control('description_ind');
                    echo $this->Form->control('status', ['options'=>['1' => 'Aktif','0' => 'Tidak Aktif']]);
                    echo $this->Form->control('sorting', array('type'=>'hidden','value' => '0'));
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
