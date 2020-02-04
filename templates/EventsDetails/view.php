<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EventsDetail $eventsDetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Events Detail'), ['action' => 'edit', $eventsDetail->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Events Detail'), ['action' => 'delete', $eventsDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventsDetail->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Events Details'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Events Detail'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="eventsDetails view content">
            <h3><?= h($eventsDetail->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Event') ?></th>
                    <td><?= $eventsDetail->has('event') ? $this->Html->link($eventsDetail->event->title, ['controller' => 'Events', 'action' => 'view', $eventsDetail->event->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Art Venue') ?></th>
                    <td><?= $eventsDetail->has('art_venue') ? $this->Html->link($eventsDetail->art_venue->title, ['controller' => 'ArtVenues', 'action' => 'view', $eventsDetail->art_venue->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($eventsDetail->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Date') ?></th>
                    <td><?= h($eventsDetail->start_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('End Date') ?></th>
                    <td><?= h($eventsDetail->end_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
