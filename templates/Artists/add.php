<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artist $artist
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Artists'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="artists form content">
            <?= $this->Form->create($artist) ?>
            <fieldset>
                <legend><?= __('Add Artist') ?></legend>
                <?php
                    //echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('creative_industries._ids', ['options' => $creativeIndustries]);
                    echo $this->Form->control('fullname');
                    echo $this->Form->control('nickname');
                    echo $this->Form->control('description');
                    echo $this->Form->control('description_en');
                    echo $this->Form->control('birth_country', ['options' => $countries]);
                    echo $this->Form->control('birth_city', ['options' => $cities]);
                    echo $this->Form->control('birth_date');
                    echo $this->Form->control('birth_month');
                    echo $this->Form->control('birth_year');
                    echo $this->Form->control('not_alive');
                    echo $this->Form->control('living_address');
                    echo $this->Form->control('living_city', ['options' => $cities]);
                    echo $this->Form->control('living_country', ['options' => $countries]);
                    echo $this->Form->control('domicile', ['options' => $domiciles]);
                    echo $this->Form->control('email');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('website');
                    //echo $this->Form->control('is_registered');
                    echo $this->Form->control('is_registered', ['options'=>['1' => 'Terdaftar','0' => 'Tidak Terdaftar']]);
                    //echo $this->Form->control('slug');
                    
                    //echo $this->Form->control('obit');
                    
                    
                    //echo $this->Form->control('collectives._ids', ['options' => $collectives]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
