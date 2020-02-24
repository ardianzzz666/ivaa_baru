
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