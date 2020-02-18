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
                            <!-- <form action="/admin/domiciles/edit/4" id="DomicileAdminEditForm" method="post" accept-charset="utf-8"> -->
                               <!--  <div style="display:none;">
                                    <input type="hidden" name="_method" value="PUT">
                                </div>    -->                                 
                                <div class="label"><span class="required_mark">*</span>&nbsp;Nama domisili [id]</div>
                                <div class="input">
                                    <!-- <input type="hidden" name="data[Domicile][id]" value="4" id="DomicileId"> -->
                                    <div class="input text required">
                                        <!-- <input name="data[Domicile][name]" type="text" maxlength="50" value="Lain-lain" id="DomicileName"> -->
                                        <?php echo $this->Form->control('name');?>
                                    </div>
                                </div>
                            <!-- </form> -->
                        </div>
                            <div class="row form clearfix">
                                <div class="label"><span class="required_mark">*</span>&nbsp;Name of Domicile [en]</div>
                                <div class="input">
                                    <div class="input text required">
                                        <!-- <input name="data[Domicile][name_en]" type="text" maxlength="155" value="Other" id="DomicileNameEn"> -->
                                        <?php  echo $this->Form->control('name_en');?>
                                    </div>
                                </div>
                            </div>
                            <div class="row form clearfix">
                                <div class="label">&nbsp;</div>
                                <div class="input">
                                    <div class="submit">
                                        <!-- <input type="submit" value="Update"> -->
                                         <?= $this->Form->button(__('Update')) ?>
                                    </div>
                                </div>
                            </div>
                             <?= $this->Form->end() ?>
                        </div>
                    </div>
                    <div class="row20">
                        <!-- <a href="http://archive.ivaa-online.org/admin/domiciles">Kembali ke Daftar</a> -->
                        <?= $this->Html->link(__('Kembali ke Daftar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>              
                    </div>
                </div>
            </div>
        </div>
    </div>  