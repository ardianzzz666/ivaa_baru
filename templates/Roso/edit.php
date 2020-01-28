<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Roso $roso
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $roso->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $roso->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Roso'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="roso form content">
            <?= $this->Form->create($roso) ?>
            <fieldset>
                <legend><?= __('Edit Roso') ?></legend>
                <?php
                    echo $this->Form->control('nama');
                    echo $this->Form->control('alamat');
                    echo $this->Form->control('telp');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
