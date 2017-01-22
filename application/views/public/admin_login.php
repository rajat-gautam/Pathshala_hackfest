<?php
include('public_header.php');
?>
</br></br></br></br></br>
<div class="container">
<?php if($error = $this->session->flashdata('login_failed')): ?>
<?php endif; ?>

<?php echo form_open('login/admin_login',['class'=>'form-horizontal']); ?>
  <fieldset>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-6">
      <?php echo form_input
      (['name'=>'username',
      	'class'=>'form-control',
      	'placeholder'=>'Username',
      	'value'=>set_value('username')
      	]);
      	?>
        
      </div>
      <div class="col-lg-4">
      <?php echo form_error('username');?>
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-6">
     <?php echo form_password
     (['name'=>'password','class'=>'form-control',
     	'placeholder'=>'Password']);
    ?>  
      </div>
      <div class="col-lg-4">
      <?php echo form_error('password');?>
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2"><?php echo form_reset([
        'name'=>'reset',
        'value'=>'Reset',
        'class'=>'btn btn-default'
        ]);?>
        <?php echo form_submit([
        'name'=>'submit',
        'value'=>'Login',
        'class'=>'btn btn-primary'
        ]);?>
        
      </div>
    </div>
  </fieldset>
</form>
</div>
</br></br></br></br></br>
<?php
include('public_footer.php');
?>
