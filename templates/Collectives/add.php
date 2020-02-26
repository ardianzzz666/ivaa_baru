<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collective $collective
 */
?>
<!-- // <?= $this->Html->script('/js/tiny_mce/tiny_mce.js', array('block' => 'scriptBottom')); ?> -->
<?php  echo $this->Html->script('/js/tiny_mce/tiny_mce.js', array('inline' => false));?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Collectives'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="collectives form content">
            <?= $this->Form->create($collective) ?>
            <fieldset>
                <legend><?= __('Add Collective') ?></legend>
                <?php
                echo $this->Form->control('name');
                echo $this->Form->control('domicile_id', ['options' => $domiciles]);
                echo $this->Form->control('slug');
                echo $this->Form->control('description');
                echo $this->Form->control('description_en');
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
                     <?= $this->Form->create($collective) ?>
                     <div style="display:none;">
                        <input type="hidden" name="_method" value="POST" />
                    </div>                            
                    <h5 class="subheading">Info Collective</h5>
                    <div class="row form clearfix">
                        <div class="label"><span class="required_mark">*</span>&nbsp;Nama Collective</div>
                        <div class="input">
                            <div class="input ">
                                <!-- <input name="data[Collective][name]" type="text" maxlength="255" id="CollectiveName" /> -->
                                <?=  $this->Form->input('name');?>
                            </div>
                        </div>
                    </div>
                    <div class="row form clearfix">
                        <div class="label"><span class="required_mark">*</span>&nbsp;Lokasi</div>
                        <div class="input">
                            <div class="input select">
                                <?= $this->Form->select('domicile_id', $domiciles); ?>
                                <!-- // <?php echo $this->Form->input('domicile_id',array("options"=>$domiciles));?> -->
                            </div>
                        </div>
                    </div><div class="row form clearfix">
                        <div class="label"><span class="required_mark">*</span>&nbsp;Lokasi</div>
                        <div class="input">
                            <div class="input text">
                                <?=    $this->Form->input('slug'); ?>
                                <!-- // <?php echo $this->Form->input('domicile_id',array("options"=>$domiciles));?> -->
                            </div>
                        </div>
                    </div>
                    <div class="row form clearfix">
                        <div class="label"><label for="post_ttl">Deskripsi</label></div>
                        <div class="input textarea">
                          <?= 
                          $this->Form->input('description', array('type' => 'textarea'));
                          ?>
                      </div>    
                  </div>
                  <div class="row form clearfix">
                    <div class="label"><label for="post_ttl">Deskripsi (en)</label></div>
                    <div class="input textarea">  
                        <?= 
                        $this->Form->input('description_en', array('type' => 'textarea','id' => 'CollectiveDescription'));
                        ?>        
                    </div>
                </div>
                <div class="row form clearfix">
                    <div class="label">&nbsp;</div>
                    <div class="input">
                        <div class="submit"> <?= $this->Form->button(__('Submit')) ?>        
                    </div>
                </div>
            </div>
        </div>
        <?= $this->Form->end() ?>                
    </div>

    <div class="row20">
        <?= $this->Html->link(__('Kembali ke daftar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
    </div>  
</div>
</div>
</div>
</div>
