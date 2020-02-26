<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Events'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="events form content">
            <?= $this->Form->create($event) ?>
            <fieldset>
                <legend><?= __('Add Event') ?></legend>
                <?php
                echo $this->Form->control('title');
                echo $this->Form->control('subtitle');
                echo $this->Form->control('events_categories._ids', ['multiple' => 'checkbox'], $eventsCategories);
                echo $this->Form->control('description_en');
                echo $this->Form->control('description_ind');
                echo $this->Form->control('event_orgnaizer_id', ['options' => $eventOrganizers]);
                //echo $this->Form->control('image_count');
                //echo $this->Form->control('artworks._ids', ['options' => $artworks]);
                //echo $this->Form->control('khazanahs._ids', ['options' => $khazanahs]);
                //echo $this->Form->control('events_categories._ids', ['options' => $eventsCategories]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div> -->


<div class="inner_1">
    <div class="inner_2">
        <div class="inner_3">
            <div class="inner_4 clearfix">
                <div class="row">
                    <div class="row20">
                        <?= $this->Form->create($event) ?>
                        <div class="row20">
                            <h5 class="subheading">Tipe Kegiatan Seni</h5>
                            <div class="row form clearfix">
                                <div class="label">Penyelenggara</div>
                                <div class="input"><?php echo $this->Form->select('event_orgnaizer_id', $eventOrganizers); ?></div>
                            </div>
                        </div>

                        <div class="row20">
                            <h5 class="subheading">Kategori Kegiatan Seni</h5>
                            <div class="row form clearfix">
                                <div class="label">&nbsp;</div>
                                <div class="input"><?php echo $this->Form->control('events_categories._ids', ['multiple' => 'checkbox'], $eventsCategories); ?></div>
                            </div>
                        </div>

                        <div class="row20">
                            <h5 class="subheading">Info Kegiatan Seni</h5>
                            <div class="row form clearfix">
                                <div class="label"><span class="required_mark">*</span>&nbsp;Judul</div>
                                <div class="input"><?php echo $this->Form->input('title'); ?></div>
                            </div>
                            <div class="row form clearfix">
                                <div class="label">Sub Judul</div>
                                <div class="input"><?php echo $this->Form->input('subtitle'); ?></div>
                            </div>


                            <h5 class="subheading">Deskripsi Kegiatan Seni</h5>
                            <div class="row form clearfix">
                                <div class="label"><span class="required_mark">*</span>&nbsp;Indonesia</div>
                                <div class="input"><?php echo $this->Form->textarea('description_ind') ?></div>
                            </div>

                            <div class="row form clearfix">
                                <div class="label">English</div>
                                <div class="input"><?php echo $this->Form->textarea('description_en'); ?></div>
                            </div>
                        </div>
                        <div class="row form clearfix">
                            <div class="label">&nbsp;</div>
                            <div class="input">
                                <div class="submit">
                                    <?= $this->Form->button(__('Submit')) ?>
                                </div>
                            </div>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>