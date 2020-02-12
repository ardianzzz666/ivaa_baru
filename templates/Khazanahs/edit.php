<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Khazanah $khazanah
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $khazanah->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $khazanah->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Khazanahs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="khazanahs form content">
            <?= $this->Form->create($khazanah) ?>
            <fieldset>
                <legend><?= __('Edit Khazanah') ?></legend>
                <?php
                    echo $this->Form->control('artist_id', ['options' => $artists]);
                    echo $this->Form->control('title');
                    echo $this->Form->control('subtitle');
                    echo $this->Form->control('khazanah_category_id', ['options' => $khazanahCategories]);
                    echo $this->Form->control('published_date');
                    echo $this->Form->control('published_month');
                    echo $this->Form->control('published_year');
                    echo $this->Form->control('published_to_year');
                    echo $this->Form->control('excerpt_en');
                    echo $this->Form->control('excerpt_ind');
                    //echo $this->Form->control('published_date_unknown');
                    echo $this->Form->control('published_date_unknown', array('type'=>'hidden','value' => '0'));
                    echo $this->Form->control('status', ['options'=>['1' => 'Aktif','0' => 'Tidak Aktif']]);
                    //echo $this->Form->control('status');
                    
                    echo $this->Form->control('sorting', array('type'=>'hidden','value' => '0'));
                    //echo $this->Form->control('sorting');
                    //echo $this->Form->control('artworks._ids', ['options' => $artworks]);
                    //echo $this->Form->control('events._ids', ['options' => $events]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
