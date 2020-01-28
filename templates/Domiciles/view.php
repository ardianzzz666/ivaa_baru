<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Domicile $domicile
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Domicile'), ['action' => 'edit', $domicile->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Domicile'), ['action' => 'delete', $domicile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $domicile->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Domiciles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Domicile'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="domiciles view content">
            <h3><?= h($domicile->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($domicile->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name En') ?></th>
                    <td><?= h($domicile->name_en) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($domicile->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
