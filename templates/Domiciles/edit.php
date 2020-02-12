<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Domicile $domicile
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $domicile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $domicile->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Domiciles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="domiciles form content">
            <?= $this->Form->create($domicile) ?>
            <fieldset>
                <legend><?= __('Edit Domicile') ?></legend>
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
