<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Khazanah $khazanah
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Khazanah'), ['action' => 'edit', $khazanah->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Khazanah'), ['action' => 'delete', $khazanah->id], ['confirm' => __('Are you sure you want to delete # {0}?', $khazanah->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Khazanahs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Khazanah'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="khazanahs view content">
            <h3><?= h($khazanah->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Artist') ?></th>
                    <td><?= $khazanah->has('artist') ? $this->Html->link($khazanah->artist->id, ['controller' => 'Artists', 'action' => 'view', $khazanah->artist->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($khazanah->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subtitle') ?></th>
                    <td><?= h($khazanah->subtitle) ?></td>
                </tr>
                <tr>
                    <th><?= __('Published Month') ?></th>
                    <td><?= h($khazanah->published_month) ?></td>
                </tr>
                <tr>
                    <th><?= __('Khazanah Category') ?></th>
                    <td><?= $khazanah->has('khazanah_category') ? $this->Html->link($khazanah->khazanah_category->name, ['controller' => 'KhazanahCategories', 'action' => 'view', $khazanah->khazanah_category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($khazanah->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Published Date') ?></th>
                    <td><?= $this->Number->format($khazanah->published_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Published Year') ?></th>
                    <td><?= $this->Number->format($khazanah->published_year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Published To Year') ?></th>
                    <td><?= $this->Number->format($khazanah->published_to_year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($khazanah->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sorting') ?></th>
                    <td><?= $this->Number->format($khazanah->sorting) ?></td>
                </tr>
                <tr>
                    <th><?= __('Published Date Unknown') ?></th>
                    <td><?= $khazanah->published_date_unknown ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Excerpt En') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($khazanah->excerpt_en)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Excerpt Ind') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($khazanah->excerpt_ind)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Artworks') ?></h4>
                <?php if (!empty($khazanah->artworks)) : ?>
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
                        <?php foreach ($khazanah->artworks as $artworks) : ?>
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
                <h4><?= __('Related Events') ?></h4>
                <?php if (!empty($khazanah->events)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Subtitle') ?></th>
                            <th><?= __('Event Time') ?></th>
                            <th><?= __('Description En') ?></th>
                            <th><?= __('Description Ind') ?></th>
                            <th><?= __('Published On') ?></th>
                            <th><?= __('Event Orgnaizer Id') ?></th>
                            <th><?= __('Image Count') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($khazanah->events as $events) : ?>
                        <tr>
                            <td><?= h($events->id) ?></td>
                            <td><?= h($events->title) ?></td>
                            <td><?= h($events->subtitle) ?></td>
                            <td><?= h($events->event_time) ?></td>
                            <td><?= h($events->description_en) ?></td>
                            <td><?= h($events->description_ind) ?></td>
                            <td><?= h($events->published_on) ?></td>
                            <td><?= h($events->event_orgnaizer_id) ?></td>
                            <td><?= h($events->image_count) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Events', 'action' => 'view', $events->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Events', 'action' => 'edit', $events->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Events', 'action' => 'delete', $events->id], ['confirm' => __('Are you sure you want to delete # {0}?', $events->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Khazanahs Files') ?></h4>
                <?php if (!empty($khazanah->khazanahs_files)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Khazanah Id') ?></th>
                            <th><?= __('Caption') ?></th>
                            <th><?= __('File Type') ?></th>
                            <th><?= __('Part Clip') ?></th>
                            <th><?= __('File Name') ?></th>
                            <th><?= __('Url') ?></th>
                            <th><?= __('Status') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($khazanah->khazanahs_files as $khazanahsFiles) : ?>
                        <tr>
                            <td><?= h($khazanahsFiles->id) ?></td>
                            <td><?= h($khazanahsFiles->khazanah_id) ?></td>
                            <td><?= h($khazanahsFiles->caption) ?></td>
                            <td><?= h($khazanahsFiles->file_type) ?></td>
                            <td><?= h($khazanahsFiles->part_clip) ?></td>
                            <td><?= h($khazanahsFiles->file_name) ?></td>
                            <td><?= h($khazanahsFiles->url) ?></td>
                            <td><?= h($khazanahsFiles->status) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'KhazanahsFiles', 'action' => 'view', $khazanahsFiles->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'KhazanahsFiles', 'action' => 'edit', $khazanahsFiles->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'KhazanahsFiles', 'action' => 'delete', $khazanahsFiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $khazanahsFiles->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Khazanahs Participants') ?></h4>
                <?php if (!empty($khazanah->khazanahs_participants)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Khazanah Id') ?></th>
                            <th><?= __('Participant Type') ?></th>
                            <th><?= __('Participant Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($khazanah->khazanahs_participants as $khazanahsParticipants) : ?>
                        <tr>
                            <td><?= h($khazanahsParticipants->id) ?></td>
                            <td><?= h($khazanahsParticipants->khazanah_id) ?></td>
                            <td><?= h($khazanahsParticipants->participant_type) ?></td>
                            <td><?= h($khazanahsParticipants->participant_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'KhazanahsParticipants', 'action' => 'view', $khazanahsParticipants->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'KhazanahsParticipants', 'action' => 'edit', $khazanahsParticipants->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'KhazanahsParticipants', 'action' => 'delete', $khazanahsParticipants->id], ['confirm' => __('Are you sure you want to delete # {0}?', $khazanahsParticipants->id)]) ?>
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
