<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Lignempsortis/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Consultation Lignempsorti'); ?></h3>
                                </div>
                                <div class="panel-body">
         <?php echo $this->Form->create('Lignempsorti',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>
                           
           <div class="col-md-6">                         
             		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Id'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($lignempsorti['Lignempsorti']['id']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Matierepremiere'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $lignempsorti['Matierepremiere']['name']; ?>'>
                                  </div>
			
		
                                 
                            </div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Colis'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($lignempsorti['Lignempsorti']['colis']); ?>'>

                                  </div>
			
		
                                 
</div>	</div><div class="col-md-6">     
              		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Qte'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($lignempsorti['Lignempsorti']['qte']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Sortiemp'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $lignempsorti['Sortiemp']['id']; ?>'>
                                  </div>
			
		
                                 
                            </div>	</div>
<?php echo $this->Form->end();?>
	
</div></div></div></div>


	

