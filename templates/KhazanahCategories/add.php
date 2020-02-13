<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\KhazanahCategory $khazanahCategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Khazanah Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="khazanahCategories form content">
            <?= $this->Form->create($khazanahCategory) ?>
            <fieldset>
                <legend><?= __('Add Khazanah Category') ?></legend>
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
