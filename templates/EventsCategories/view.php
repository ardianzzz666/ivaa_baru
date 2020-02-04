<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EventsCategory $eventsCategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Events Category'), ['action' => 'edit', $eventsCategory->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Events Category'), ['action' => 'delete', $eventsCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventsCategory->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Events Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Events Category'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="eventsCategories view content">
            <h3><?= h($eventsCategory->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($eventsCategory->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name En') ?></th>
                    <td><?= h($eventsCategory->name_en) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($eventsCategory->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
