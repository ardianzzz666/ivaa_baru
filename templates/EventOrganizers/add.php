<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EventOrganizer $eventOrganizer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Event Organizers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="eventOrganizers form content">
            <?= $this->Form->create($eventOrganizer) ?>
            <fieldset>
                <legend><?= __('Add Event Organizer') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
