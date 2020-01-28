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
                    <th><?= __('Living City') ?></th>
                    <td><?= $this->Number->format($artist->living_city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Living Country') ?></th>
                    <td><?= $this->Number->format($artist->living_country) ?></td>
                </tr>
                <tr>
                    <th><?= __('Domicile') ?></th>
                    <td><?= $this->Number->format($artist->domicile) ?></td>
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
                    <th><?= __('Updated') ?></th>
                    <td><?= h($artist->updated) ?></td>
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
        </div>
    </div>
</div>
