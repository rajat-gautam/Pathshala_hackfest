<?php include_once('admin_header.php'); ?>
<div class="container">
<?php echo form_open_multipart('admin/store_lecture',['class'=>'form-horizontal']); ?>
<?php echo form_hidden('user_id',$this->session->userdata('user_id')); ?>
  <fieldset>
    <div class="row">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Add Pdf / Documents</label>
      <div class="col-lg-6">
      <?php echo form_upload
        ([
        'name'=>'userfile',
        'class'=>'form-control'
        ]);
        ?>      
      </div>
      <div class="col-lg-4">
      <?php if(isset($upload_error)) echo $upload_error;  ?>
      </div>
    </div>
    </div>
  <div class="row">
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2"><?php echo form_reset([
        'name'=>'reset',
        'value'=>'Reset',
        'class'=>'btn btn-default'
        ]); ?>
        <?php echo form_submit([
        'name'=>'submit',
        'value'=>'Submit',
        'class'=>'btn btn-primary'
        ]); ?>
        
      </div>
    </div>
    </div>
  </fieldset>
</form>
</div>
<?php include_once('admin_footer.php'); ?>