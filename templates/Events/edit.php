<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $event->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $event->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Events'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="events form content">
            <?= $this->Form->create($event) ?>
            <fieldset>
                <legend><?= __('Edit Event') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('subtitle');
                    echo $this->Form->control('event_time');
                    echo $this->Form->control('description_en');
                    echo $this->Form->control('description_ind');
                    echo $this->Form->control('published_on');
                    echo $this->Form->control('event_orgnaizer_id', ['options' => $eventOrganizers]);
                    echo $this->Form->control('image_count');
                    echo $this->Form->control('artworks._ids', ['options' => $artworks]);
                    echo $this->Form->control('khazanahs._ids', ['options' => $khazanahs]);
                    echo $this->Form->control('events_categories._ids', ['options' => $eventsCategories]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
