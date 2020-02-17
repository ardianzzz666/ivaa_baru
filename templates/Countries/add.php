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
                <?= $this->Html->link(__('List Countries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            </div>
        </aside>
        <div class="column-responsive column-80">
            <div class="countries form content">
                <?= $this->Form->create($country) ?>
                <fieldset>
                    <legend><?= __('Add Country') ?></legend>
                    <?php
                        echo $this->Form->control('name');
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
                            <h5 class="subheading">Info Negara</h5>
                            <?= $this->Form->create($country) ?>
                            <div class="row form clearfix">
                                <div class="label"><span class="required_mark">*</span>&nbsp;Nama Negara</div>
                                <div class="input"><div class="input text required">
                                    <?php
                                echo $this->Form->inputs('name');
                                ?></div></div>
                                
                            </div>
                            <div class="row form clearfix">
                                <div class="label">&nbsp;</div>
                                
                                <div class="input">
                                    <div class="submit">
                                        <?= $this->Form->button(__('Submit')) ?>
                                        <!-- <input type="submit" value="Submit"> -->
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