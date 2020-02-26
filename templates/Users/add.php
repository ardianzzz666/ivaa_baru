<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                echo $this->Form->control('username');
                echo $this->Form->control('email');
                echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div> -->
<div class="inner_1">
    <div class="inner_2"><div class="inner_3">
        <div class="inner_4 clearfix">
           <?= $this->Form->create($user) ?>
           <div style="display:none;">
            <input type="hidden" name="_method" value="POST" />
        </div>                
        <div class="row">
            <div class="row20">
                <h5 class="subheading">Info User</h5>
                <div class="row form clearfix">
                    <div class="label"><span class="required_mark">*</span>&nbsp;Username</div>
                    <div class="input">
                        <div class="input text required">
                          <!--   <input name="data[User][username]" type="text" maxlength="100" id="UserUsername" /></div> -->
                           <?php echo $this->Form->input('username');?>
                        </div>
                    </div>
                    <div class="row form clearfix">
                        <div class="label"><span class="required_mark">*</span>&nbsp;Email</div>
                        <div class="input">
                            <div class="input text required">
                                <!-- <input name="data[User][email]" type="text" maxlength="255" id="UserEmail" /> -->
                                <?php echo $this->Form->input('email');?>
                            </div>
                        </div>
                    </div>
                    <div class="row form clearfix">
                        <div class="label"><span class="required_mark">*</span>&nbsp;Password</div>
                        <div class="input">
                            <div class="input password required">
                                <!-- <input type="password" name="data[User][password]" id="UserPassword" /> -->
                                <?php echo $this->Form->input('password');?>
                            </div>
                        </div>
                    </div>
                    <div class="row form clearfix">
                        <div class="label"><span class="required_mark">*</span>&nbsp;Group</div>
                        <div class="input">
                            <div class="input select">
                                <select name="data[User][group_id]" id="UserGroupId">
                                    <option value="1">editor</option>
                                    <option value="2">viewer</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row form clearfix">
                        <div class="label"><span class="required_mark">*</span>&nbsp;Tipe</div>
                        <div class="input">
                            <div class="input select">
                                <select name="data[User][type]" id="UserType">
                                    <option value="Admin">Admin</option>
                                    <option value="Artist">Artist</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row form clearfix">
                        <div class="label"><span class="required_mark">*</span>&nbsp;Status</div>
                        <div class="input">
                            <div class="input select">
                                <select name="data[User][status]" id="UserStatus">
                                    <option value="0">Blocked</option>
                                    <option value="1">Active</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row form clearfix">
                        <div class="label">&nbsp;</div>
                        <div class="input">
                            <div class="submit">
                                <?= $this->Form->button(__('Submit')) ?></div> <?= $this->Form->end() ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>