<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArtVenue $artVenue
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $artVenue->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $artVenue->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Art Venues'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="artVenues form content">
            <?= $this->Form->create($artVenue) ?>
            <fieldset>
                <legend><?= __('Edit Art Venue') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('sub_title');
                    echo $this->Form->control('manager_name');
                    echo $this->Form->control('manager_phone');
                    echo $this->Form->control('manager_email');
                    echo $this->Form->control('address_1');
                    echo $this->Form->control('address_2');
                    echo $this->Form->control('city_id', ['options' => $cities]);
                    echo $this->Form->control('province_id', ['options' => $provinces]);
                    echo $this->Form->control('country_id', ['options' => $countries]);
                    echo $this->Form->control('contact_phone');
                    echo $this->Form->control('contact_fax');
                    echo $this->Form->control('contact_email');
                    echo $this->Form->control('website');
                    echo $this->Form->control('start_year');
                    echo $this->Form->control('end_year');
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
                        <h5 class="subheading">Info Ruang Seni</h5>
                    </div>
                    <?= $this->Form->create($artVenue) ?>
                    <div class="row form clearfix">
                        <div class="label"><span class="required_mark">*</span>&nbsp;Title</div>
                        <div class="input">
                            <div class="input text required">
                                <?php echo $this->Form->input('title'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row form clearfix">
                        <div class="label"><span class="required_mark"></span>&nbsp;Nama Manager</div>
                        <div class="input">
                            <div class="input text required">
                                <?php echo $this->Form->input('manager_name'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row form clearfix">
                        <div class="label"><span class="required_mark"></span>&nbsp;Telepon Manager</div>
                        <div class="input">
                            <div class="input text required">
                                <?php echo $this->Form->input('manager_phone'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row form clearfix">
                        <div class="label"><span class="required_mark"></span>&nbsp;Email Manager</div>
                        <div class="input">
                            <div class="input text required">
                                <?php echo $this->Form->input('manager_email'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row form clearfix">
                        <div class="label"><span class="required_mark"></span>&nbsp;Alamat 1</div>
                        <div class="input">
                            <div class="input text required">
                                <?php echo $this->Form->input('address_1'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row form clearfix">
                        <div class="label"><span class="required_mark"></span>&nbsp;Alamat 2</div>
                        <div class="input">
                            <div class="input text required">
                                <?php echo $this->Form->input('address_2'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row form clearfix">
                        <div class="label"><span class="required_mark">*</span>&nbsp;Kota</div>
                        <div class="input">
                            <?php echo $this->Form->control('city_id', ['options' => $cities]); ?>
                        </div>
                    </div>

                    <div class="row form clearfix">
                        <div class="label"><span class="required_mark">*</span>&nbsp;Provinsi</div>
                        <div class="input">
                            <div class="input">
                                <?php echo $this->Form->control('province_id', ['options' => $provinces]); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row form clearfix">
                        <div class="label"><span class="required_mark">*</span>&nbsp;Negara</div>
                        <div class="input">
                            <div class="input">
                                <?php echo $this->Form->control('country_id', ['options' => $countries]); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row form clearfix">
                        <div class="label"><span class="required_mark"></span>&nbsp;Telepon Kontak</div>
                        <div class="input">
                            <div class="input text required">
                                <?php echo $this->Form->input('contact_phone'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row form clearfix">
                        <div class="label"><span class="required_mark"></span>&nbsp;Fax Kontak</div>
                        <div class="input">
                            <div class="input text required">
                                <?php echo $this->Form->input('contact_fax'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row form clearfix">
                        <div class="label"><span class="required_mark"></span>&nbsp;Email Kontak</div>
                        <div class="input">
                            <div class="input text required">
                                <?php echo $this->Form->input('contact_email') ?>
                            </div>
                        </div>
                    </div>

                    <div class="row form clearfix">
                        <div class="label"><span class="required_mark"></span>&nbsp;Website</div>
                        <div class="input">
                            <div class="input text required">
                                <?php echo $this->Form->input('website'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row form clearfix">
                        <div class="label"><span class="required_mark"></span>&nbsp;Start Year</div>
                        <div class="input">
                            <div class="input text required">
                                <?php echo $this->Form->input('start_year'); ?>
                            </div>
                        </div>
                    </div>


                    <div class="row form clearfix">
                        <div class="label"><span class="required_mark"></span>&nbsp;End Year</div>
                        <div class="input">
                            <div class="input text required">
                                <?php echo $this->Form->input('end_year'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row form clearfix">
                        <div class="label">&nbsp;</div>
                        <div class="input">
                            <div class="submit">
                                <?= $this->Form->button(__('Submit')) ?>
                            </div>
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>