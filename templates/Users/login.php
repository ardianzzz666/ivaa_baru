<h1><span>@RSIP IVAA</span></h1>
<div class="lform">
    <?= $this->Form->create() ?>
    <?= $this->Form->control('email', ['required' => true]) ?>
    <?= $this->Form->control('password', ['required' => true]) ?>
    <?= $this->Form->submit(__('Login')); ?>
    <?= $this->Form->end() ?>
</div>