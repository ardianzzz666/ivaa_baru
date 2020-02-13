<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Roso $roso
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Roso'), ['action' => 'edit', $roso->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Roso'), ['action' => 'delete', $roso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roso->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Roso'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Roso'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="roso view content">
            <h3><?= h($roso->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nama') ?></th>
                    <td><?= h($roso->nama) ?></td>
                </tr>
                <tr>
                    <th><?= __('Alamat') ?></th>
                    <td><?= h($roso->alamat) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telp') ?></th>
                    <td><?= h($roso->telp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($roso->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
