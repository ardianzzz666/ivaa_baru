
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Domicile $domicile
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $domicile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $domicile->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Domiciles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="domiciles form content">
            <?= $this->Form->create($domicile) ?>
            <fieldset>
                <legend><?= __('Edit Domicile') ?></legend>
                <?php
                echo $this->Form->control('name');
                echo $this->Form->control('name_en');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div> -->


<div class="inner_1">
    <div class="inner_2">
        <div class="inner_3">
            <div class="inner_4 clearfix">

                <div class="row">
                    <div class="row20">
                        <h5 class="subheading">Info Domisili</h5>
                        <?= $this->Form->create($domicile) ?>
                        <div class="row form clearfix">                                 
                                <div class="label"><span class="required_mark">*</span>&nbsp;Nama domisili [id]</div>
                                <div class="input">
                                    <div class="input text required">
                                        <?php echo $this->Form->input('name');?>
                                    </div>
                                </div>
                        </div>
                            <div class="row form clearfix">
                                <div class="label"><span class="required_mark">*</span>&nbsp;Name of Domicile [en]</div>
                                <div class="input">
                                    <div class="input text required">
                                        <?php  echo $this->Form->input('name_en');?>
                                    </div>
                                </div>
                            </div>
                            <div class="row form clearfix">
                                <div class="label">&nbsp;</div>
                                <div class="input">
                                    <div class="submit">
                                         <?= $this->Form->button(__('Update')) ?>
                                    </div>
                                </div>
                            </div>
                             <?= $this->Form->end() ?>
                        </div>
                    </div>
                    <div class="row20">
                        <?= $this->Html->link(__('Kembali ke Daftar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>              
                    </div>
                </div>
            </div>
        </div>
    </div>  