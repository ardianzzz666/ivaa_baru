<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artwork $artwork
 */
?>
<script type="text/javascript" src="../js/ivaa/artworks/artworks.js"></script>
<script type="text/javascript" src="../js/tiny_mce/tiny_mce.js"></script>
<link rel="admin_styles" type="text/css" href="../css/jquery-ui-1.8.16.custom.css" />
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Artworks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="artworks form content">
            <?= $this->Form->create($artwork) ?>
            <fieldset>
                <legend><?= __('Add Artwork') ?></legend>
                <?php
                echo $this->Form->control('title');
                echo $this->Form->control('artwork_category_id', ['options' => $artworksCategories]);
                echo $this->Form->control('media._ids',['multiple' => 'checkbox'], $media);
                echo $this->Form->control('art_start_year');
                echo $this->Form->control('art_end_year');
                echo $this->Form->control('dimmension_height');
                echo $this->Form->control('dimmension_width');
                echo $this->Form->control('dimmension_length');
                echo $this->Form->control('dimmension_unit', ['options'=>['1' => 'CM','2' => 'MM','0' => 'Pixel']]);
                echo $this->Form->control('description_en');
                echo $this->Form->control('description_ind');

                echo $this->Form->control('status', ['options'=>['1' => 'Aktif','0' => 'Tidak Aktif']]);
                echo $this->Form->control('sorting', array('type'=>'hidden','value' => '0'));


                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div> -->

<div class="inner_1"><div class="inner_2"><div class="inner_3"><div class="inner_4 clearfix">

    <!-- <form action="/admin/artworks/add" id="ArtworkAdminAddForm" method="post" accept-charset="utf-8"> -->
        <?= $this->Form->create($artwork) ?>
        <div style="display:none;">
            <input type="hidden" name="_method" value="POST" />
        </div>   

        <fieldset>

            <div class="row20">
                <h5 class="subheading">Tentang Karya</h5>
                <div class="row form clearfix">
                    <div class="label"><span class="required_mark">*</span><label for="post_ttl">Judul</label></div>

                    <div class="input full">
                        <!-- <input name="data[Artwork][title]" type="text" maxlength="255" id="inp_title" /> -->
                        <?=  $this->Form->input('sorting', array('type'=>'hidden','value' => '0'));?>
                        <?= $this->Form->input('title', array('id' => 'inp_title', 'maxlength'=> '255' ));?>
                    </div>
                </div> 
                <div class="row form clearfix">
                    <div class="label"><!--<span class="required_mark">*</span>--><label for="post_ttl">Medium</label></div>

                    <div class="input disabled">
                        <script>
                            $(function(){
                                // $('#medium-list').hide();
                            });
                        </script>

                        <a id="medium-box" class="pointer-link">Pilih Medium</a>
                        <div class="medium-container">
                            <fieldset id="medium-list" title="Choose Medium" >
                                <!-- <fieldset id="medium-list" title="Choose Medium" style="display: none"> -->
                                    <div class="row choose-medium clearfix">

                                        <div class="input select"><input type="hidden" name="data[Media][Media]" value="" id="MediaMedia" />
                                            <?= $this->Form->control('media._ids',['multiple' => 'checkbox'], $media);?>
                                        <!-- <table>
                                            <tr>        
                                                <td width="160px">
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="data[Media][Media][]" value="207" id="MediaMedia207"  />

                                                        <label for="MediaMedia207" >3D Lenticular Print</label>
                                                    </div>
                                                </td>
                                                <td width="160px">
                                                    <div class="checkbox"><input type="checkbox" name="data[Media][Media][]" value="179" id="MediaMedia179"  /><label for="MediaMedia179" >Acrylic</label></div>
                                                </td>
                                                <td width="160px">
                                                    <div class="checkbox"><input type="checkbox" name="data[Media][Media][]" value="219" id="MediaMedia219"  /><label for="MediaMedia219" >Acrylic Foam</label></div>
                                                </td>
                                            </tr>
                                        </table> -->

                                    </div>                                         
                                </div>
                                <div>
                                    <a id="close-medium" class="close">Close</a>
                                </div>
                            </fieldset>
                        </div>
                        

                    </div>

                </div> 
                <div class="row form clearfix">
                    <div class="label"><span class="required_mark">*</span><label for="post_ttl">Tahun Pembuatan</label></div>
                    <div class="input">
                        <!-- <input name="data[Artwork][art_start_year]" type="text" maxlength="255" id="inp_title" size="4" /> -->
                        <?= $this->Form->input('art_start_year',['maxlength'=>'255','id'=>'inp_title','size'=>4]);?> 
                        - 
                        <!-- <input name="data[Artwork][art_end_year]" type="text" maxlength="255" id="inp_title" size="4" /> -->
                        <?= $this->Form->input('art_end_year',['maxlength'=>'255','id'=>'inp_title','size'=>4]);?> 

                    </div>
                </div> 
                <div class="row form clearfix">
                    <div class="label"><label for="post_ttl">Dimensi</label></div>
                    <div class="input dimension">
                        <label for="dimension_height">Height :</label>
                        <!-- <input name="data[Artwork][dimension_height]" type="text" maxlength="5" id="ArtworkDimensionHeight" /> -->
                        <?= $this->Form->input('dimmension_height',['maxlength'=>'5','id'=>'ArtworkDimensionHeight']);?>        
                        <label for="dimension_width">Width : </label>
                        <!-- <input name="data[Artwork][dimension_width]" type="text" maxlength="5" id="ArtworkDimensionWidth" />                             -->
                        <?= $this->Form->input('dimmension_width', array('maxlength'=>'5','id'=>'ArtworkDimensionWidth'));?> 
                        <label for="dimension_length">Length : </label>
                        <!-- <input name="data[Artwork][dimension_length]" type="text" maxlength="5" id="ArtworkDimensionLength" /> -->
                        <?= $this->Form->input('dimmension_length', array('maxlength'=>'5','id'=>'ArtworkDimensionLength'));?>
                        <label for="dimension_unit">Unit : </label>
                       <!--  <select name="data[Artwork][dimension_unit]" id="ArtworkDimensionUnit">
                            <option value="0">mm</option>
                            <option value="1">cm</option>
                            <option value="2">pixel</option>
                        </select>                             -->
                        <?= $this->Form->select('dimmension_unit', ['options'=>['1' => 'CM','2' => 'MM','0' => 'Pixel']]);?>

                    </div>
                </div> 
            </div>

            <div class="row20">
                <h5 class="subheading">Deskripsi</h5>
                <div class="row form clearfix">
                    <div class="label"><span class="required_mark">*</span><label for="post_ttl">Indonesia</label></div>
                    <div class="input textarea required">
                        <!-- <textarea name="data[Artwork][description_ind]" cols="30" rows="6" id="ArtworkDescriptionInd" ></textarea> -->
                        <?= 
                        $this->Form->input('description_ind', array('type' => 'textarea','id'=>'ArtworkDescriptionInd','cols'=>'30','row20' => '6'));
                        ?>
                    </div>
                </div>
                <div class="row form clearfix">
                    <div class="label"><label for="post_ttl">English</label></div>
                    <div class="input textarea">
                        <!-- <textarea name="data[Artwork][description_en]" cols="30" rows="6" id="ArtworkDescriptionEn" ></textarea> -->
                        <?= 
                        $this->Form->input('description_en', array('type' => 'textarea','id'=>'ArtworkDescriptionEn','cols'=>'30','rows' => '6'));
                        ?>
                    </div>
                </div>

            </div>


            <div class="row20">
                <h5 class="subheading"> </h5>
                <div class="row form clearfix">
                    <div class="label"><span class="required_mark">*</span><label for="post_ttl">Kategori Karya Seni</label></div>
                    <!-- <select name="data[Artwork][artwork_category_id]" id="ArtworkArtworkCategoryId"> -->
                        <?= $this->Form->select('artwork_category_id', $artworksCategories); ?>
                        <!-- </select>                 -->
                    </div>
                    <!-- <input type="hidden" name="data[Artwork][status]" value="0" id="ArtworkStatus" />   -->
                    <?= $this->Form->input('status', array('value' => '0', 'type'=> 'hidden' ));?>          
                </div>

            </fieldset>

            <div class="row form clearfix">
                <div class="label">&nbsp;</div>

                <!-- <button type="submit" class="orange_bt">Save and Continue</button>     -->
                <?= $this->Form->button(__('Save and Continue'),array('class' => 'orange_bt', )) ?>   
                <?= $this->Form->end() ?>    
            </div>


        </div>
    </div>
</div>
</div>
