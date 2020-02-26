<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collective $collective
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $collective->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $collective->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Collectives'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="collectives form content">
            <?= $this->Form->create($collective) ?>
            <fieldset>
                <legend><?= __('Edit Collective') ?></legend>
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
                   <!-- <form action="/admin/collectives/edit/1" id="CollectiveAdminEditForm" method="post" accept-charset="utf-8"> -->
                     <?= $this->Form->create($collective) ?>

                     <div style="display:none;"><input type="hidden" name="_method" value="PUT" /></div>
                     <div class="row20">
                        <h5 class="subheading">Info Kota</h5>
                        <div class="row form clearfix">
                            <div class="label"><span class="required_mark">*</span>&nbsp;Nama Collective</div>
                            <div class="input">
                                <input type="hidden" name="data[Collective][id]" value="1" id="CollectiveId" />
                                <div class="input text required">
                                    <!-- <input name="data[Collective][name]" type="text" maxlength="255" value="Apotik Komik" id="CollectiveName" /> -->
                                    <?=  $this->Form->input('name');?>
                                </div>
                            </div>
                        </div>
                        <div class="row form clearfix">
                            <div class="label"><span class="required_mark">*</span>&nbsp;Lokasi</div>
                            <div class="input"><div class="input select">
                             <?= $this->Form->select('domicile_id', $domiciles); ?>
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
                <div class="label"><label for="post_ttl">Slug</label></div>
                <div class="input text">
                    <?=    $this->Form->input('slug'); ?>
                </div>                       
            </div>
            <div class="row form clearfix">
                <div class="label"><label for="post_ttl">Deskripsi (en)</label></div>
                <div class="input textarea">
                 <?= 
                 $this->Form->input('description_en', array('type' => 'textarea'));
                 ?>
             </div>
         </div>
         <div class="row form clearfix">
            <div class="label">&nbsp;</div>
            <div class="input">
                <div class="submit">
                    <!-- <input type="submit" value="Update" /> -->
                    <?= $this->Form->button(__('Update')) ?>
                </div>
            </div>
        </div>
    </div>
    <?= $this->Form->end() ?>                        
    <form action="/admin/artists_collectives/add" id="ArtistsCollectiveForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST" /></div>      

     <script type="text/javascript" src="/js/ivaa/lists/collective_artist.js"></script>
     <script type="text/javascript" src="/js/ivaa/images/images.js"></script><div id="artist_list">
        <div class="row20">
            <h5 class="subheading">Pelaku Seni Individu</h5>
            <div class="row form clearfix">
                <div class="label"><span class="required_mark">*</span>&nbsp;</div>
                <div class="input">

                    <div class="row20 form clearfix">
                     <input type="hidden" name="data[Collective][id]" type="text" value="1" id="CollectiveId" /><div class="input text"><label for="artist">Search</label><input name="data[Artist][name]" type="text" id="artist" /></div><input type="hidden" name="data[ArtistsCollective][controller_name]" id="controller_3_name" value="artists_collectives" /> 
                     <div class="inline-btn">
                        <button type="button" id="add-artist-ajax">Add artist</button>  
                    </div>
                </div>

                <input type="hidden" name="data[Artist][artists]" id="artist_id" />                </div>

            </div>
            <div class="row form clearfix">

                <div class="label">&nbsp;</div>
                <div class="input">
                    <div class="table_row">
                        <table>
                            <thead>
                                <tr>
                                    <th class="col_20">Nama</th>
                                    <th class="col_40">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr class="">
                                    <td>
                                    Bambang Witjaksono (Bambang Toko Witjaksono)                                                                </td>   
                                    <td>
                                     <ul>
                                        <li class="delete"><a href="/admin/artists_collectives/delete/14" onclick="return confirm(&#039;Apakah Anda yakin akan menghapus file ini?&#039;);"></a></li> 
                                    </ul>                                                                    
                                </td>
                            </tr>   
                            <tr class="">
                                <td>
                                Samuel Indratma (Samuel Indratma)                                                                </td>  
                                <td>
                                 <ul>
                                    <li class="delete"><a href="/admin/artists_collectives/delete/15" onclick="return confirm(&#039;Apakah Anda yakin akan menghapus file ini?&#039;);"></a></li> 
                                </ul>                                                                    
                            </td>
                        </tr>   
                        <tr class="">
                            <td>
                            Ari Diyanto (Arie Dyanto)                                                                </td>  
                            <td>
                             <ul>
                                <li class="delete"><a href="/admin/artists_collectives/delete/16" onclick="return confirm(&#039;Apakah Anda yakin akan menghapus file ini?&#039;);"></a></li> 
                            </ul>                                                                    
                        </td>
                    </tr>   
                    <tr class="">
                        <td>
                        Tri Wahyudi (Popok Tri Wahyudi)                                                                </td>    
                        <td>
                         <ul>
                            <li class="delete"><a href="/admin/artists_collectives/delete/17" onclick="return confirm(&#039;Apakah Anda yakin akan menghapus file ini?&#039;);"></a></li> 
                        </ul>                                                                    
                    </td>
                </tr>   
                <tr class="">
                    <td>
                    Syahrizal Pahlevi (Syahrizal Pahlevi)                                                                </td>  
                    <td>
                     <ul>
                        <li class="delete"><a href="/admin/artists_collectives/delete/90" onclick="return confirm(&#039;Apakah Anda yakin akan menghapus file ini?&#039;);"></a></li> 
                    </ul>                                                                    
                </td>
            </tr>   
            <tr class="">
                <td>
                Sekar Jatiningrum (Sekar Jatiningrum)                                                                </td>  
                <td>
                 <ul>
                    <li class="delete"><a href="/admin/artists_collectives/delete/91" onclick="return confirm(&#039;Apakah Anda yakin akan menghapus file ini?&#039;);"></a></li> 
                </ul>                                                                    
            </td>
        </tr>   
        <tr class="">
            <td>
            Iwan Wijono (Iwan Wijono)                                                                </td>  
            <td>
             <ul>
                <li class="delete"><a href="/admin/artists_collectives/delete/92" onclick="return confirm(&#039;Apakah Anda yakin akan menghapus file ini?&#039;);"></a></li> 
            </ul>                                                                    
        </td>
    </tr>   
    <tr class="">
        <td>
        M. Sofwan Zarkasi (Kipli)                                                                </td>  
        <td>
         <ul>
            <li class="delete"><a href="/admin/artists_collectives/delete/93" onclick="return confirm(&#039;Apakah Anda yakin akan menghapus file ini?&#039;);"></a></li> 
        </ul>                                                                    
    </td>
</tr>   
<tr class="">
    <td>
    Arya Pandjalu (Arya Pandjalu)                                                                </td>  
    <td>
     <ul>
        <li class="delete"><a href="/admin/artists_collectives/delete/413" onclick="return confirm(&#039;Apakah Anda yakin akan menghapus file ini?&#039;);"></a></li> 
    </ul>                                                                    
</td>
</tr>   


</tbody>
</table>
</div> 
</div>

</div>  

</div>
</div>

</form>                </div>

<div class="row20">
    <?= $this->Html->link(__('Kembali ke daftar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
</div>

</div></div></div></div>