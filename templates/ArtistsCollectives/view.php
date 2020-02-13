<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArtistsCollective $artistsCollective
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Artists Collective'), ['action' => 'edit', $artistsCollective->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Artists Collective'), ['action' => 'delete', $artistsCollective->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artistsCollective->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Artists Collectives'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Artists Collective'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="artistsCollectives view content">
            <h3><?= h($artistsCollective->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Artist') ?></th>
                    <td><?= $artistsCollective->has('artist') ? $this->Html->link($artistsCollective->artist->id, ['controller' => 'Artists', 'action' => 'view', $artistsCollective->artist->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Collective') ?></th>
                    <td><?= $artistsCollective->has('collective') ? $this->Html->link($artistsCollective->collective->name, ['controller' => 'Collectives', 'action' => 'view', $artistsCollective->collective->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($artistsCollective->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
