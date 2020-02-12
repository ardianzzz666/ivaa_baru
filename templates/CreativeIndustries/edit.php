<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CreativeIndustry $creativeIndustry
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $creativeIndustry->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $creativeIndustry->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Creative Industries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="creativeIndustries form content">
            <?= $this->Form->create($creativeIndustry) ?>
            <fieldset>
                <legend><?= __('Edit Creative Industry') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('name_en');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
