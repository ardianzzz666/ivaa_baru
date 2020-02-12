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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $artistsCollective->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $artistsCollective->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Artists Collectives'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="artistsCollectives form content">
            <?= $this->Form->create($artistsCollective) ?>
            <fieldset>
                <legend><?= __('Edit Artists Collective') ?></legend>
                <?php
                    echo $this->Form->control('artist_id', ['options' => $artists]);
                    echo $this->Form->control('collective_id', ['options' => $collectives]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
