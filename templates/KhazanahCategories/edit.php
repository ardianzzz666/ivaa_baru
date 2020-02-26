<div class="inner_1">
    <div class="inner_2">
        <div class="inner_3">
            <div class="inner_4 clearfix">
                <div class="row">
                    <div class="row20">
                        <h5 class="subheading">Info Kategori</h5>
                        <div class="row form clearfix">
                            <?= $this->Form->create($khazanahCategory) ?>
                            <div style="display:none;">
                                <input type="hidden" name="_method" value="POST">
                            </div>
                            <div class="label"><span class="required_mark">*</span>&nbsp;Nama Kategori [id]</div>
                            <div class="input">
                                <div class="input text required">
                                    <?php echo $this->Form->input('name'); ?>
                                </div>
                            </div>

                        </div>
                        <div class="row form clearfix">
                            <div class="label"><span class="required_mark">*</span>&nbsp;Name of Category [en]</div>
                            <div class="input">
                                <div class="input text required">
                                    <?php echo $this->Form->input('name_en'); ?>
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
</div>