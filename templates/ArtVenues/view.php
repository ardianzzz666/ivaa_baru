<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArtVenue $artVenue
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Art Venue'), ['action' => 'edit', $artVenue->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Art Venue'), ['action' => 'delete', $artVenue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artVenue->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Art Venues'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Art Venue'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="artVenues view content">
            <h3><?= h($artVenue->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($artVenue->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sub Title') ?></th>
                    <td><?= h($artVenue->sub_title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Manager Name') ?></th>
                    <td><?= h($artVenue->manager_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Manager Phone') ?></th>
                    <td><?= h($artVenue->manager_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Manager Email') ?></th>
                    <td><?= h($artVenue->manager_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address 1') ?></th>
                    <td><?= h($artVenue->address_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address 2') ?></th>
                    <td><?= h($artVenue->address_2) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= $artVenue->has('city') ? $this->Html->link($artVenue->city->name, ['controller' => 'Cities', 'action' => 'view', $artVenue->city->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Province') ?></th>
                    <td><?= $artVenue->has('province') ? $this->Html->link($artVenue->province->name, ['controller' => 'Provinces', 'action' => 'view', $artVenue->province->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= $artVenue->has('country') ? $this->Html->link($artVenue->country->name, ['controller' => 'Countries', 'action' => 'view', $artVenue->country->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact Phone') ?></th>
                    <td><?= h($artVenue->contact_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact Fax') ?></th>
                    <td><?= h($artVenue->contact_fax) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact Email') ?></th>
                    <td><?= h($artVenue->contact_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Website') ?></th>
                    <td><?= h($artVenue->website) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($artVenue->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Year') ?></th>
                    <td><?= $this->Number->format($artVenue->start_year) ?></td>
                </tr>
                <tr>
                    <th><?= __('End Year') ?></th>
                    <td><?= $this->Number->format($artVenue->end_year) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Events Details') ?></h4>
                <?php if (!empty($artVenue->events_details)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Event Id') ?></th>
                            <th><?= __('Start Date') ?></th>
                            <th><?= __('End Date') ?></th>
                            <th><?= __('Art Venue Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($artVenue->events_details as $eventsDetails) : ?>
                        <tr>
                            <td><?= h($eventsDetails->id) ?></td>
                            <td><?= h($eventsDetails->event_id) ?></td>
                            <td><?= h($eventsDetails->start_date) ?></td>
                            <td><?= h($eventsDetails->end_date) ?></td>
                            <td><?= h($eventsDetails->art_venue_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'EventsDetails', 'action' => 'view', $eventsDetails->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'EventsDetails', 'action' => 'edit', $eventsDetails->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'EventsDetails', 'action' => 'delete', $eventsDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventsDetails->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
