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