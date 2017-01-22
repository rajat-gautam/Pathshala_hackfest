<?php include_once('admin_header.php'); ?>
<div class="container">
     
               
<?php echo form_open_multipart('admin/store_article',['class'=>'form-horizontal']); ?>
<?php echo form_hidden('user_id',$this->session->userdata('user_id')); ?>
  <fieldset>
    <?php if($this->session->userdata('user_id')==1):?>
    
  <?php endif;?>
    <div class="row">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">School Name</label>
      <div class="col-lg-6">
      <?php echo form_input
        ([
        'name'=>'sn',
        'class'=>'form-control',
        'placeholder'=>'School Name',
        'value'=>set_value('sn')
        ]);
        ?>
        
      </div>
      <div class="col-lg-4">
      <?php echo form_error('title'); ?>
      </div>
    </div>
    </div>
    
    <div class="row">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Board</label>
      <div class="col-lg-6">
      <?php echo form_input
        ([
        'name'=>'bo',
        'class'=>'form-control',
        'placeholder'=>'School Name',
        'value'=>set_value('bo')
        ]);
        ?>
        
      </div>
      <div class="col-lg-4">
      <?php echo form_error('title'); ?>
      </div>
    </div>
    </div>
    
    <div class="row">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">School City</label>
      <div class="col-lg-6">
      <?php echo form_input
        ([
        'name'=>'sc',
        'class'=>'form-control',
        'placeholder'=>'School Name',
        'value'=>set_value('sc')
        ]);
        ?>
        
      </div>
      <div class="col-lg-4">
      <?php echo form_error('title'); ?>
      </div>
    </div>
    </div>
    
    <div class="row">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">About your school</label>
      <div class="col-lg-6">
      <?php echo form_input
        ([
        'name'=>'ab',
        'class'=>'form-control',
        'placeholder'=>'Write about your school.',
        'value'=>set_value('ab')
        ]);
        ?>
        
      </div>
      <div class="col-lg-4">
      <?php echo form_error('title'); ?>
      </div>
    </div>
    </div>
    <div class="row">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Add Admission form</label>
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
      <label for="inputEmail" class="col-lg-2 control-label">Class 1 : School Fee (Year)</label>
      <div class="col-lg-6">
      <?php echo form_input
        ([
        'name'=>'sf1',
        'class'=>'form-control',
        'placeholder'=>'School Fees',
        'value'=>set_value('sf1')
        ]);
        ?>
        
      </div>
      <div class="col-lg-4">
      <?php echo form_error('title'); ?>
      </div>
    </div>
    </div>
    <div class="row">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Class 2 : School Fee (Year)</label>
      <div class="col-lg-6">
      <?php echo form_input
        ([
        'name'=>'sf2',
        'class'=>'form-control',
        'placeholder'=>'School Fees',
        'value'=>set_value('sf2')
        ]);
        ?>
        
      </div>
      <div class="col-lg-4">
      <?php echo form_error('title'); ?>
      </div>
    </div>
    </div>
    <div class="row">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Class 3 : School Fee (Year)</label>
      <div class="col-lg-6">
      <?php echo form_input
        ([
        'name'=>'sf3',
        'class'=>'form-control',
        'placeholder'=>'School Fees',
        'value'=>set_value('sf3')
        ]);
        ?>
        
      </div>
      <div class="col-lg-4">
      <?php echo form_error('title'); ?>
      </div>
    </div>
    </div>
    <div class="row">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Class 4 : School Fee (Year)</label>
      <div class="col-lg-6">
      <?php echo form_input
        ([
        'name'=>'sf4',
        'class'=>'form-control',
        'placeholder'=>'School Fees',
        'value'=>set_value('sf4')
        ]);
        ?>
        
      </div>
      <div class="col-lg-4">
      <?php echo form_error('title'); ?>
      </div>
    </div>
    </div>
  

     <div class="row">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Class 5 : School Fee (Year)</label>
      <div class="col-lg-6">
      <?php echo form_input
        ([
        'name'=>'sf5',
        'class'=>'form-control',
        'placeholder'=>'School Fees',
        'value'=>set_value('sf5')
        ]);
        ?>
        
      </div>
      <div class="col-lg-4">
      <?php echo form_error('title'); ?>
      </div>
    </div>
    </div>
    <div class="row">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Class 6 : School Fee (Year)</label>
      <div class="col-lg-6">
      <?php echo form_input
        ([
        'name'=>'sf6',
        'class'=>'form-control',
        'placeholder'=>'School Fees',
        'value'=>set_value('sf6')
        ]);
        ?>
        
      </div>
      <div class="col-lg-4">
      <?php echo form_error('title'); ?>
      </div>
    </div>
    </div>
    <div class="row">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Class 7 : School Fee (Year)</label>
      <div class="col-lg-6">
      <?php echo form_input
        ([
        'name'=>'sf7',
        'class'=>'form-control',
        'placeholder'=>'School Fees',
        'value'=>set_value('sf7')
        ]);
        ?>
        
      </div>
      <div class="col-lg-4">
      <?php echo form_error('title'); ?>
      </div>
    </div>
    </div>
    <div class="row">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Class 8 : School Fee (Year)</label>
      <div class="col-lg-6">
      <?php echo form_input
        ([
        'name'=>'sf8',
        'class'=>'form-control',
        'placeholder'=>'School Fees',
        'value'=>set_value('sf8')
        ]);
        ?>
        
      </div>
      <div class="col-lg-4">
      <?php echo form_error('title'); ?>
      </div>
    </div>
    </div>
  
    <div class="row">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Class 9 : School Fee (Year)</label>
      <div class="col-lg-6">
      <?php echo form_input
        ([
        'name'=>'sf9',
        'class'=>'form-control',
        'placeholder'=>'School Fees',
        'value'=>set_value('sf9')
        ]);
        ?>
        
      </div>
      <div class="col-lg-4">
      <?php echo form_error('title'); ?>
      </div>
    </div>
    </div>
    <div class="row">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Class 10 : School Fee (Year)</label>
      <div class="col-lg-6">
      <?php echo form_input
        ([
        'name'=>'sf10',
        'class'=>'form-control',
        'placeholder'=>'School Fees',
        'value'=>set_value('sf10')
        ]);
        ?>
        
      </div>
      <div class="col-lg-4">
      <?php echo form_error('title'); ?>
      </div>
    </div>
    </div>
    <div class="row">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Class 11 : School Fee (Year)</label>
      <div class="col-lg-6">
      <?php echo form_input
        ([
        'name'=>'sf11',
        'class'=>'form-control',
        'placeholder'=>'School Fees',
        'value'=>set_value('sf11')
        ]);
        ?>
        
      </div>
      <div class="col-lg-4">
      <?php echo form_error('title'); ?>
      </div>
    </div>
    </div>
    <div class="row">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Class 12 : School Fee (Year)</label>
      <div class="col-lg-6">
      <?php echo form_input
        ([
        'name'=>'sf12',
        'class'=>'form-control',
        'placeholder'=>'School Fees',
        'value'=>set_value('sf12')
        ]);
        ?>
        
      </div>
      <div class="col-lg-4">
      <?php echo form_error('title'); ?>
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