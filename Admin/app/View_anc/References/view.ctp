<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>References/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Consultation Référence'); ?></h3>
                                </div>
                                <div class="panel-body">
         <?php echo $this->Form->create('Reference',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>
                           
           <div class="col-md-6">                         
             					 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Référence'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($reference['Reference']['reference']); ?>'>

                                  </div>
			
		
                                 
</div>	</div><div class="col-md-6">     
              		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Image'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'>
                            <div class ='imagediv' ><img src="<?php echo $this->webroot; ?>files/reference/<?php echo $reference['Reference']['image']?>" class="file-preview-image" title="Desert.jpg" alt="Desert.jpg">
                    </div>
                            <!--<input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($reference['Reference']['image']); ?>'>-->

                                  </div>
			
		
                                 
</div>	</div>
<?php echo $this->Form->end();?>
	
</div></div></div></div>


	

