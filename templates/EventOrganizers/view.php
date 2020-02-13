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
            <?= $this->Html->link(__('Edit Event Organizer'), ['action' => 'edit', $eventOrganizer->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Event Organizer'), ['action' => 'delete', $eventOrganizer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventOrganizer->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Event Organizers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Event Organizer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="eventOrganizers view content">
            <h3><?= h($eventOrganizer->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($eventOrganizer->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($eventOrganizer->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
