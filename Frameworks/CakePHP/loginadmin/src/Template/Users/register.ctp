<br>
<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
    <div class="panel">
        <h2 class="text-center">Register</h2>
        <?= $this->form->create() ; ?>
            <?= $this->form->input('name') ; ?>
            <?= $this->form->input('email') ; ?>
            <?= $this->form->input('password', array('type' => 'password')) ; ?>
            <?= $this->form->submit('Register', array ('class'=>'button')) ; ?>
        <?= $this->form->end() ; ?>
    </div>
</div>

