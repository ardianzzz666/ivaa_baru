<<<<<<< HEAD
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Country $country
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $country->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $country->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Countries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="countries form content">
            <?= $this->Form->create($country) ?>
            <fieldset>
                <legend><?= __('Edit Country') ?></legend>
                <?php
                echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div> -->
<div class="inner_1"><div class="inner_2"><div class="inner_3"><div class="inner_4 clearfix">

    <div class="row">
        <div class="row20">
            <h5 class="subheading">Info Negara</h5>
            <?= $this->Form->create($country) ?>
            <div class="row form clearfix">
                <!-- <form action="/admin/countries/edit/4" id="CountryAdminEditForm" method="post" accept-charset="utf-8"> -->
                    <div style="display:none;">
                        <input type="hidden" name="_method" value="PUT">
                    </div>                                    
                    <div class="label"><span class="required_mark">*</span>&nbsp;Nama Negara</div>
                    <div class="input">
                        <input type="hidden" name="data[Country][id]" value="4" id="CountryId">
                        <div class="input text required">
                            <!-- <input name="data[Country][name]" type="text" maxlength="255" value="Australia" id="CountryName"> -->
                            <?php
                echo $this->Form->control('name');
                ?>
                        </div>
                    </div>
                <!-- </form> -->
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

</div>
</div>
</div>
</div> 
=======
<div class="inner_1">
    <div class="inner_2">
        <div class="inner_3">
            <div class="inner_4 clearfix">

                <div class="row">
                    <div class="row20">
                        <h5 class="subheading">Info Negara</h5>
                        <?= $this->Form->create($country) ?>
                        <div class="row form clearfix">
                            <!-- <form action="/admin/countries/edit/4" id="CountryAdminEditForm" method="post" accept-charset="utf-8"> -->
                            <div style="display:none;">
                                <input type="hidden" name="_method" value="PUT">
                            </div>
                            <div class="label"><span class="required_mark">*</span>&nbsp;Nama Negara</div>
                            <div class="input">
                                <input type="hidden" name="data[Country][id]" value="4" id="CountryId">
                                <div class="input text required">
                                    <!-- <input name="data[Country][name]" type="text" maxlength="255" value="Australia" id="CountryName"> -->
                                    <?php
                                    echo $this->Form->input('name');
                                    ?>
                                </div>
                            </div>
                            <!-- </form> -->
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

            </div>
        </div>
    </div>
</div>
>>>>>>> master
