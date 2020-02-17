<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\City $city
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $city->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $city->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cities form content">
            <?= $this->Form->create($city) ?>
            <fieldset>
                <legend><?= __('Edit City') ?></legend>
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
                        <h5 class="subheading">Info Kota</h5>
                        <?= $this->Form->create($city) ?>
                        <div class="row form clearfix">
                            <!-- <form action="/admin/cities/edit/9" id="CityAdminEditForm" method="post" accept-charset="utf-8"> -->
                                <!-- <div style="display:none;"> -->
                                    <!-- <input type="hidden" name="_method" value="PUT"> -->
                                </div>                                    
                                <div class="label"><span class="required_mark">*</span>&nbsp;Nama Kota [id]</div>
                                <div class="input">
                                    <div class="input text required">
                                        <?php  echo $this->Form->control('name');?>
                                        <!-- <input name="data[City][name]" type="text" maxlength="255" value="Bandung" id="CityName"> -->
                                    </div>
                                </div>
                                <!-- </form> -->
                            </div>
                            <div class="row form clearfix">
                                <div class="label"><span class="required_mark">*</span>&nbsp;Name of City [en]</div>
                                <div class="input">
                                    <div class="input text required">
                                        <!-- <input name="data[City][name_en]" type="text" maxlength="155" value="Bandung" id="CityNameEn"> -->
                                        <?php echo $this->Form->control('name_en');?>
                                    </div>
                                </div>
                            </div>
                            <div class="row form clearfix">
                                <div class="label">&nbsp;</div>
                                <div class="input">
                                    <div class="submit">
                                        <!-- <input type="submit" value="Update"> -->
                                        <?= $this->Form->button(__('Submit')) ?>
                                    </div>
                                </div>
                            </div>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>

                    <div class="row20">
                        <!-- <a href="http://archive.ivaa-online.org/admin/cities">Kembali ke Daftar</a>              -->
                        <?= $this->Html->link(__('Kembali ke Daftar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                    </div>

                </div></div></div></div>  
