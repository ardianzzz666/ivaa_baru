<div class="inner_1">
    <div class="inner_2">
        <div class="inner_3">
            <div class="inner_4 clearfix">
                <div class="row">
                    <div class="row20">
                        <h5 class="subheading">Info Propinsi</h5>
                        <div class="row form clearfix">
                            <?= $this->Form->create($province) ?>
                            <div style="display:none;">
                                <input type="hidden" name="_method" value="POST">
                            </div>
                            <div class="label"><span class="required_mark">
                                    *</span>&nbsp;Nama Propinsi [id]
                            </div>
                            <div class="input">
                                <div class="input text required">
                                    <!-- <input name="data[Province][name]" type="text" maxlength="50" id="ProvinceName"> -->
                                    <?php echo $this->Form->input('name'); ?>
                                </div>
                            </div>
                            <!-- </form> -->

                        </div>
                        <div class="row form clearfix">
                            <div class="label">
                                <span class="required_mark">*</span>&nbsp;Name of Province [en]
                            </div>
                            <div class="input">
                                <div class="input text required">
                                    <!-- <input name="data[Province][name_en]" type="text" maxlength="155" id="ProvinceNameEn"> -->
                                    <?php echo $this->Form->input('name_en'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row form clearfix">
                            <div class="label">&nbsp;</div>
                            <div class="input">
                                <div class="submit">
                                    <!-- <input type="submit" value="Submit"> -->
                                    <?= $this->Form->button(__('Submit')) ?>
                                </div>
                            </div>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
                <div class="row20">
                    <?= $this->Html->link(__('Kembali ke Daftar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                    <!-- <a href="http://archive.ivaa-online.org/admin/provinces">Kembali ke Daftar</a>               -->
                </div>

            </div>
        </div>
    </div>
</div>