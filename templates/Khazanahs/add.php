<!-- <?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Khazanah $khazanah
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Khazanahs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="khazanahs form content">
            <?= $this->Form->create($khazanah) ?>
            <fieldset>
                <legend><?= __('Add Khazanah') ?></legend>
                <?php
                echo $this->Form->control('artist_id', ['options' => $artists]);
                echo $this->Form->control('title');
                echo $this->Form->control('subtitle');
                echo $this->Form->control('khazanah_category_id', ['options' => $khazanahCategories]);
                echo $this->Form->control('published_date');
                echo $this->Form->control('published_month');
                echo $this->Form->control('published_year');
                echo $this->Form->control('published_to_year');
                echo $this->Form->control('excerpt_en');
                echo $this->Form->control('excerpt_ind');
                //echo $this->Form->control('published_date_unknown');
                echo $this->Form->control('published_date_unknown', array('type' => 'hidden', 'value' => '0'));
                echo $this->Form->control('status', ['options' => ['1' => 'Aktif', '0' => 'Tidak Aktif']]);
                //echo $this->Form->control('status');

                echo $this->Form->control('sorting', array('type' => 'hidden', 'value' => '0'));
                //echo $this->Form->control('sorting');
                //echo $this->Form->control('artworks._ids', ['options' => $artworks]);
                //echo $this->Form->control('events._ids', ['options' => $events]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
 -->



<div class="inner_1">
    <div class="inner_2">
        <div class="inner_3">
            <div class="inner_4 clearfix">
                <div class="row">
                    <div class="row20">
                        <?= $this->Form->create($khazanah) ?>
                        <div class="row20">
                            <h5 class="subheading">Penulis / Pembuat</h5>
                            <div class="row form clearfix">
                                <div class="label">Nama</div>
                                <div class="input"><?php echo $this->Form->select('artist_id', $artists); ?></div>
                            </div>
                        </div>

                        <div class="row20">
                            <h5 class="subheading">Info</h5>
                            <div class="row form clearfix">
                                <div class="label">Title</div>
                                <div class="input"><?php echo $this->Form->input('title'); ?></div>
                            </div>
                            <div class="row form clearfix">
                                <div class="label">Subtitle</div>
                                <div class="input"><?php echo $this->Form->input('subtitle'); ?></div>
                            </div>
                            <div class="row form clearfix">
                                <div class="label">Kategori Khazanah</div>
                                <div class="input"><?php echo $this->Form->select('khazanah_category_id', $khazanahCategories); ?></div>
                            </div>
                        </div>

                        <div class="row20">
                            <h5 class="subheading">Waktu Publikasi</h5>
                            <div class="row form clearfix">
                                <div class="label"><span class="required_mark">*</span>&nbsp;Tanggal</div>
                                <div class="input">
                                    <?php echo $this->Form->select('published_date', array(
                                        'options' => array(1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', 6 => '6', 7 => '7', 8 => '8', 9 => '9', 10 => '10', 11 => '11', 12 => '12', 13 => '13', 14 => '14', 15 => '15', 16 => '16', 17 => '17', 18 => '18', 19 => '19', 20 => '20', 21 => '21', 22 => '22', 23 => '23', 24 => '24', 25 => '25', 26 => '26', 27 => '27', 28 => '28', 29 => '29', 30 => '30', 31 => '31'),
                                        'empty' => '(choose one)'
                                    )); ?>
                                    Bulan
                                    <?php echo $this->Form->select('published_month', array(
                                        'options' => array(1 => 'Januari', 2 => 'February', 3 => 'Maret', 4 => 'April', 5 => 'Mei', 6 => 'Juni', 7 => 'July', 8 => 'Agustus', 9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'),
                                        'empty' => '(choose one)'
                                    )); ?>
                                </div>
                            </div>
                            <div class="row form clearfix">
                                <div class="label">Tahun</div>
                                <div class="input">
                                    <?php echo $this->Form->input('published_year'); ?> - <?php echo $this->Form->input('published_to_year'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row20">
                            <h5 class="subheading">Excerpt</h5>
                            <div class="row form clearfix">
                                <div class="label"><span class="required_mark">*</span>&nbsp;Indonesia</div>
                                <div class="input"><?php echo $this->Form->textarea('excerpt_ind') ?></div>
                            </div>

                            <div class="row form clearfix">
                                <div class="label">English</div>
                                <div class="input"><?php echo $this->Form->textarea('excerpt_en'); ?></div>
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