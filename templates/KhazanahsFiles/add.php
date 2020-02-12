<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\KhazanahsFile $khazanahsFile
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Khazanahs Files'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="khazanahsFiles form content">
            <?= $this->Form->create($khazanahsFile) ?>
            <fieldset>
                <legend><?= __('Add Khazanahs File') ?></legend>
                <?php
                    echo $this->Form->control('khazanah_id', ['options' => $khazanahs]);
                    echo $this->Form->control('caption');
                    echo $this->Form->control('file_type');
                    echo $this->Form->control('part_clip');
                    echo $this->Form->control('file_name');
                    echo $this->Form->control('url');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
