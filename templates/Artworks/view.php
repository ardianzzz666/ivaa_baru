<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artwork $artwork
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Artwork'), ['action' => 'edit', $artwork->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Artwork'), ['action' => 'delete', $artwork->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artwork->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Artworks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Artwork'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="artworks view content">
            <h3><?= h($artwork->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($artwork->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dimmension Height') ?></th>
                    <td><?= h($artwork->dimmension_height) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dimmension Width') ?></th>
                    <td><?= h($artwork->dimmension_width) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dimmension Length') ?></th>
                    <td><?= h($artwork->dimmension_length) ?></td>
                </tr>
                <tr>
                    <th><?= __('Artworks Category') ?></th>
                    <td><?= $artwork->has('artworks_category') ? $this->Html->link($artwork->artworks_category->name, ['controller' => 'ArtworksCategories', 'action' => 'view', $artwork->artworks_category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($artwork->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Art Start Year') ?></th>
                    <td><?= $this->Number->format($artwork->art_start_year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Art End Year') ?></th>
                    <td><?= $this->Number->format($artwork->art_end_year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dimmension Unit') ?></th>
                    <td><?= $this->Number->format($artwork->dimmension_unit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($artwork->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sorting') ?></th>
                    <td><?= $this->Number->format($artwork->sorting) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description En') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($artwork->description_en)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Description Ind') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($artwork->description_ind)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Events') ?></h4>
                <?php if (!empty($artwork->events)) : ?>
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
                        <?php foreach ($artwork->events as $events) : ?>
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
                <h4><?= __('Related Khazanahs') ?></h4>
                <?php if (!empty($artwork->khazanahs)) : ?>
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
                        <?php foreach ($artwork->khazanahs as $khazanahs) : ?>
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
                <h4><?= __('Related Media') ?></h4>
                <?php if (!empty($artwork->media)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($artwork->media as $media) : ?>
                        <tr>
                            <td><?= h($media->id) ?></td>
                            <td><?= h($media->name) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Media', 'action' => 'view', $media->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Media', 'action' => 'edit', $media->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Media', 'action' => 'delete', $media->id], ['confirm' => __('Are you sure you want to delete # {0}?', $media->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Artworks Creators') ?></h4>
                <?php if (!empty($artwork->artworks_creators)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Artwork Id') ?></th>
                            <th><?= __('Creator Type') ?></th>
                            <th><?= __('Creator Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($artwork->artworks_creators as $artworksCreators) : ?>
                        <tr>
                            <td><?= h($artworksCreators->id) ?></td>
                            <td><?= h($artworksCreators->artwork_id) ?></td>
                            <td><?= h($artworksCreators->creator_type) ?></td>
                            <td><?= h($artworksCreators->creator_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ArtworksCreators', 'action' => 'view', $artworksCreators->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ArtworksCreators', 'action' => 'edit', $artworksCreators->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ArtworksCreators', 'action' => 'delete', $artworksCreators->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artworksCreators->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Artworks Files') ?></h4>
                <?php if (!empty($artwork->artworks_files)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Artwork Id') ?></th>
                            <th><?= __('Caption') ?></th>
                            <th><?= __('File Type') ?></th>
                            <th><?= __('Part Clip') ?></th>
                            <th><?= __('File Name') ?></th>
                            <th><?= __('Status') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($artwork->artworks_files as $artworksFiles) : ?>
                        <tr>
                            <td><?= h($artworksFiles->id) ?></td>
                            <td><?= h($artworksFiles->artwork_id) ?></td>
                            <td><?= h($artworksFiles->caption) ?></td>
                            <td><?= h($artworksFiles->file_type) ?></td>
                            <td><?= h($artworksFiles->part_clip) ?></td>
                            <td><?= h($artworksFiles->file_name) ?></td>
                            <td><?= h($artworksFiles->status) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ArtworksFiles', 'action' => 'view', $artworksFiles->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ArtworksFiles', 'action' => 'edit', $artworksFiles->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ArtworksFiles', 'action' => 'delete', $artworksFiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artworksFiles->id)]) ?>
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
