<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Paies/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Consultation Paie'); ?></h3>
                                </div>
                                <div class="panel-body">
         <?php echo $this->Form->create('Paie',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>
                           
           <div class="col-md-6">                         
             		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Id'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($paie['Paie']['id']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Personnel'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $paie['Personnel']['name']; ?>'>
                                  </div>
			
		
                                 
                            </div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Moi'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $paie['Moi']['name']; ?>'>
                                  </div>
			
		
                                 
                            </div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Annee'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $paie['Annee']['name']; ?>'>
                                  </div>
			
		
                                 
                            </div>						 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Nbjour'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($paie['Paie']['Nbjour']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Prixjour'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($paie['Paie']['Prixjour']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Montantjour'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($paie['Paie']['Montantjour']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Nbjourdimanche'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($paie['Paie']['Nbjourdimanche']); ?>'>

                                  </div>
			
		
                                 
</div>
           <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Montantjdtaux'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($paie['Paie']['Montantjdtaux']); ?>'>

                                  </div>
			
		
                                 
</div>     
              		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Nbheur'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($paie['Paie']['Nbheur']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Prixheur'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($paie['Paie']['Prixheur']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Montantheur'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($paie['Paie']['Montantheur']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Nbheurdimanche'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($paie['Paie']['Nbheurdimanche']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Montanthdtaux'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($paie['Paie']['Montanthdtaux']); ?>'>

                                  </div>
			
		
                                 
</div>			


</div><div class="col-md-6">

<div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Salaire'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($paie['Paie']['Salaire']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Acompte'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo h($paie['Paie']['acompte']); ?>'>
                                  </div>
			
		
                                 
                            </div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Totalpaie'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($paie['Paie']['Totalpaie']); ?>'>

                                  </div>
			
		
                                 
</div>                      <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Donne'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($paie['Paie']['Donne']); ?>'>

                                  </div>
			
		
                                 
</div>	                      <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Reste'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($paie['Paie']['Reste']); ?>'>

                                  </div>
			
		
                                 
</div>	
                            
                            <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Date'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($paie['Paie']['Date']); ?>'>

                                  </div>
			
		
                                 
</div>	</div>
<?php echo $this->Form->end();?>
	
</div></div></div></div>


	

