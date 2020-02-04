<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CreativeIndustry $creativeIndustry
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Creative Industry'), ['action' => 'edit', $creativeIndustry->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Creative Industry'), ['action' => 'delete', $creativeIndustry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $creativeIndustry->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Creative Industries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Creative Industry'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="creativeIndustries view content">
            <h3><?= h($creativeIndustry->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($creativeIndustry->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name En') ?></th>
                    <td><?= h($creativeIndustry->name_en) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($creativeIndustry->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Artists Industries') ?></h4>
                <?php if (!empty($creativeIndustry->artists_industries)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Artist Id') ?></th>
                            <th><?= __('Creative Industry Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($creativeIndustry->artists_industries as $artistsIndustries) : ?>
                        <tr>
                            <td><?= h($artistsIndustries->id) ?></td>
                            <td><?= h($artistsIndustries->artist_id) ?></td>
                            <td><?= h($artistsIndustries->creative_industry_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ArtistsIndustries', 'action' => 'view', $artistsIndustries->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ArtistsIndustries', 'action' => 'edit', $artistsIndustries->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ArtistsIndustries', 'action' => 'delete', $artistsIndustries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artistsIndustries->id)]) ?>
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
