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
            <?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Events'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Event'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="events view content">
            <h3><?= h($event->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($event->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subtitle') ?></th>
                    <td><?= h($event->subtitle) ?></td>
                </tr>
                <tr>
                    <th><?= __('Event Time') ?></th>
                    <td><?= h($event->event_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Event Organizer') ?></th>
                    <td><?= $event->has('event_organizer') ? $this->Html->link($event->event_organizer->name, ['controller' => 'EventOrganizers', 'action' => 'view', $event->event_organizer->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($event->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image Count') ?></th>
                    <td><?= $this->Number->format($event->image_count) ?></td>
                </tr>
                <tr>
                    <th><?= __('Published On') ?></th>
                    <td><?= h($event->published_on) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description En') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($event->description_en)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Description Ind') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($event->description_ind)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Artworks') ?></h4>
                <?php if (!empty($event->artworks)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Art Start Year') ?></th>
                            <th><?= __('Art End Year') ?></th>
                            <th><?= __('Dimmension Height') ?></th>
                            <th><?= __('Dimmension Width') ?></th>
                            <th><?= __('Dimmension Length') ?></th>
                            <th><?= __('Dimmension Unit') ?></th>
                            <th><?= __('Description En') ?></th>
                            <th><?= __('Description Ind') ?></th>
                            <th><?= __('Artwork Category Id') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Sorting') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($event->artworks as $artworks) : ?>
                        <tr>
                            <td><?= h($artworks->id) ?></td>
                            <td><?= h($artworks->title) ?></td>
                            <td><?= h($artworks->art_start_year) ?></td>
                            <td><?= h($artworks->art_end_year) ?></td>
                            <td><?= h($artworks->dimmension_height) ?></td>
                            <td><?= h($artworks->dimmension_width) ?></td>
                            <td><?= h($artworks->dimmension_length) ?></td>
                            <td><?= h($artworks->dimmension_unit) ?></td>
                            <td><?= h($artworks->description_en) ?></td>
                            <td><?= h($artworks->description_ind) ?></td>
                            <td><?= h($artworks->artwork_category_id) ?></td>
                            <td><?= h($artworks->status) ?></td>
                            <td><?= h($artworks->sorting) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Artworks', 'action' => 'view', $artworks->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Artworks', 'action' => 'edit', $artworks->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Artworks', 'action' => 'delete', $artworks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artworks->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Khazanahs') ?></h4>
                <?php if (!empty($event->khazanahs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Artist Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Subtitle') ?></th>
                            <th><?= __('Published Date') ?></th>
                            <th><?= __('Published Month') ?></th>
                            <th><?= __('Published Year') ?></th>
                            <th><?= __('Published To Year') ?></th>
                            <th><?= __('Excerpt En') ?></th>
                            <th><?= __('Excerpt Ind') ?></th>
                            <th><?= __('Published Date Unknown') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Khazanah Category Id') ?></th>
                            <th><?= __('Sorting') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($event->khazanahs as $khazanahs) : ?>
                        <tr>
                            <td><?= h($khazanahs->id) ?></td>
                            <td><?= h($khazanahs->artist_id) ?></td>
                            <td><?= h($khazanahs->title) ?></td>
                            <td><?= h($khazanahs->subtitle) ?></td>
                            <td><?= h($khazanahs->published_date) ?></td>
                            <td><?= h($khazanahs->published_month) ?></td>
                            <td><?= h($khazanahs->published_year) ?></td>
                            <td><?= h($khazanahs->published_to_year) ?></td>
                            <td><?= h($khazanahs->excerpt_en) ?></td>
                            <td><?= h($khazanahs->excerpt_ind) ?></td>
                            <td><?= h($khazanahs->published_date_unknown) ?></td>
                            <td><?= h($khazanahs->status) ?></td>
                            <td><?= h($khazanahs->khazanah_category_id) ?></td>
                            <td><?= h($khazanahs->sorting) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Khazanahs', 'action' => 'view', $khazanahs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Khazanahs', 'action' => 'edit', $khazanahs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Khazanahs', 'action' => 'delete', $khazanahs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $khazanahs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Events Categories') ?></h4>
                <?php if (!empty($event->events_categories)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Name En') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($event->events_categories as $eventsCategories) : ?>
                        <tr>
                            <td><?= h($eventsCategories->id) ?></td>
                            <td><?= h($eventsCategories->name) ?></td>
                            <td><?= h($eventsCategories->name_en) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'EventsCategories', 'action' => 'view', $eventsCategories->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'EventsCategories', 'action' => 'edit', $eventsCategories->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'EventsCategories', 'action' => 'delete', $eventsCategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventsCategories->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Events Details') ?></h4>
                <?php if (!empty($event->events_details)) : ?>
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
                        <?php foreach ($event->events_details as $eventsDetails) : ?>
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
            <div class="related">
                <h4><?= __('Related Events Participants') ?></h4>
                <?php if (!empty($event->events_participants)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Event Id') ?></th>
                            <th><?= __('Participant Type') ?></th>
                            <th><?= __('Participant Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($event->events_participants as $eventsParticipants) : ?>
                        <tr>
                            <td><?= h($eventsParticipants->id) ?></td>
                            <td><?= h($eventsParticipants->event_id) ?></td>
                            <td><?= h($eventsParticipants->participant_type) ?></td>
                            <td><?= h($eventsParticipants->participant_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'EventsParticipants', 'action' => 'view', $eventsParticipants->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'EventsParticipants', 'action' => 'edit', $eventsParticipants->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'EventsParticipants', 'action' => 'delete', $eventsParticipants->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventsParticipants->id)]) ?>
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
