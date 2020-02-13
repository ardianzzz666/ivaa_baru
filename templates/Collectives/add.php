<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collective $collective
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Collectives'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="collectives form content">
            <?= $this->Form->create($collective) ?>
            <fieldset>
                <legend><?= __('Add Collective') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('domicile_id', ['options' => $domiciles]);
                    echo $this->Form->control('slug');
                    echo $this->Form->control('description');
                    echo $this->Form->control('description_en');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
