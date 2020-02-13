<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artist $artist
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Artist'), ['action' => 'edit', $artist->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Artist'), ['action' => 'delete', $artist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artist->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Artists'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Artist'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="artists view content">
            <h3><?= h($artist->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $artist->has('user') ? $this->Html->link($artist->user->id, ['controller' => 'Users', 'action' => 'view', $artist->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Fullname') ?></th>
                    <td><?= h($artist->fullname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nickname') ?></th>
                    <td><?= h($artist->nickname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birth Month') ?></th>
                    <td><?= h($artist->birth_month) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birth Year') ?></th>
                    <td><?= h($artist->birth_year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Living Address') ?></th>
                    <td><?= h($artist->living_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= $artist->has('city') ? $this->Html->link($artist->city->name, ['controller' => 'Cities', 'action' => 'view', $artist->city->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= $artist->has('country') ? $this->Html->link($artist->country->name, ['controller' => 'Countries', 'action' => 'view', $artist->country->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Domicile') ?></th>
                    <td><?= $artist->has('domicile') ? $this->Html->link($artist->domicile->name, ['controller' => 'Domiciles', 'action' => 'view', $artist->domicile->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($artist->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($artist->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Website') ?></th>
                    <td><?= h($artist->website) ?></td>
                </tr>
                <tr>
                    <th><?= __('Slug') ?></th>
                    <td><?= h($artist->slug) ?></td>
                </tr>
                <tr>
                    <th><?= __('Obit') ?></th>
                    <td><?= h($artist->obit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($artist->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birth Country') ?></th>
                    <td><?= $this->Number->format($artist->birth_country) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birth City') ?></th>
                    <td><?= $this->Number->format($artist->birth_city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Registered') ?></th>
                    <td><?= $this->Number->format($artist->is_registered) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birth Date') ?></th>
                    <td><?= h($artist->birth_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($artist->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($artist->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Not Alive') ?></th>
                    <td><?= $artist->not_alive ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($artist->description)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Description En') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($artist->description_en)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Creative Industries') ?></h4>
                <?php if (!empty($artist->creative_industries)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Name En') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($artist->creative_industries as $creativeIndustries) : ?>
                        <tr>
                            <td><?= h($creativeIndustries->id) ?></td>
                            <td><?= h($creativeIndustries->name) ?></td>
                            <td><?= h($creativeIndustries->name_en) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CreativeIndustries', 'action' => 'view', $creativeIndustries->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CreativeIndustries', 'action' => 'edit', $creativeIndustries->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CreativeIndustries', 'action' => 'delete', $creativeIndustries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $creativeIndustries->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Collectives') ?></h4>
                <?php if (!empty($artist->collectives)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Domicile Id') ?></th>
                            <th><?= __('Slug') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Description En') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($artist->collectives as $collectives) : ?>
                        <tr>
                            <td><?= h($collectives->id) ?></td>
                            <td><?= h($collectives->name) ?></td>
                            <td><?= h($collectives->domicile_id) ?></td>
                            <td><?= h($collectives->slug) ?></td>
                            <td><?= h($collectives->created) ?></td>
                            <td><?= h($collectives->modified) ?></td>
                            <td><?= h($collectives->description) ?></td>
                            <td><?= h($collectives->description_en) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Collectives', 'action' => 'view', $collectives->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Collectives', 'action' => 'edit', $collectives->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Collectives', 'action' => 'delete', $collectives->id], ['confirm' => __('Are you sure you want to delete # {0}?', $collectives->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Khazanahs') ?></h4>
                <?php if (!empty($artist->khazanahs)) : ?>
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
                        <?php foreach ($artist->khazanahs as $khazanahs) : ?>
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
        </div>
    </div>
</div>
