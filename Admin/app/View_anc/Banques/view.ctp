<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Banques/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Consultation Banque'); ?></h3>
                                </div>
                                <div class="panel-body">
         <?php echo $this->Form->create('Banque',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>
                           
           <div class="col-md-6">                         
             		 	 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Nom'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($banque['Banque']['Designation']); ?>'>

                                  </div></div>
               
                                 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Numéro Compte'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($banque['Banque']['Numero_compte']); ?>'>

                                  </div>
			
		
                                 
</div>	
			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('RIB'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($banque['Banque']['RIB']); ?>'>

                                  </div>
			
		
                                 
</div>	
                                  
<div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Tel'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($banque['Banque']['Tel']); ?>'>

                                  </div>
			
		
                                 
</div>				
                                 
</div>			 	 	<div class="col-md-6"> 
    <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Fax'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($banque['Banque']['Fax']); ?>'>

                                  </div>
			
		
                                 
</div>
              		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Mail'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($banque['Banque']['Mail']); ?>'>

                                  </div>
			
		
                                 
</div>		
<div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Adresse'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($banque['Banque']['Adresse']); ?>'>

                                  </div>
			
		
                                 
</div>		</div>
<?php echo $this->Form->end();?>
	
</div></div></div></div>


	

