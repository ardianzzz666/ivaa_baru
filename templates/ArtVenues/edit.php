<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArtVenue $artVenue
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $artVenue->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $artVenue->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Art Venues'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="artVenues form content">
            <?= $this->Form->create($artVenue) ?>
            <fieldset>
                <legend><?= __('Edit Art Venue') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('sub_title');
                    echo $this->Form->control('manager_name');
                    echo $this->Form->control('manager_phone');
                    echo $this->Form->control('manager_email');
                    echo $this->Form->control('address_1');
                    echo $this->Form->control('address_2');
                    echo $this->Form->control('city_id', ['options' => $cities]);
                    echo $this->Form->control('province_id', ['options' => $provinces]);
                    echo $this->Form->control('country_id', ['options' => $countries]);
                    echo $this->Form->control('contact_phone');
                    echo $this->Form->control('contact_fax');
                    echo $this->Form->control('contact_email');
                    echo $this->Form->control('website');
                    echo $this->Form->control('start_year');
                    echo $this->Form->control('end_year');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
