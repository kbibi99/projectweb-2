<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Personnels/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Consultation Personnel'); ?></h3>
                                </div>
                                <div class="panel-body">
         <?php echo $this->Form->create('Personnel',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>
                           
           <div class="col-md-6">                         
               <div class='form-group' style="display: none">	
                                 <label class='col-md-2 control-label'><?php echo __('Id'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($personnel['Personnel']['id']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Nom'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($personnel['Personnel']['Nom']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Prenom'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($personnel['Personnel']['Prenom']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group' style="display: none">	
                                 <label class='col-md-2 control-label'><?php echo __('Name'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($personnel['Personnel']['name']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Matricule'); ?></label>	
                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($personnel['Personnel']['Cin']); ?>'>
                        </div>
			</div>	
                                <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Code'); ?></label>	
                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($personnel['Personnel']['Code']); ?>'>
                        </div>
			</div>



                            <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Sexe'); ?></label>	
                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($personnel['Personnel']['Sexe']); ?>'>
                        </div>
			</div>

                            <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Date Recrutement'); ?></label>	
                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($personnel['Personnel']['Date_Rec']); ?>'>
                        </div>
			</div>
                        
                        <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Date Sortie'); ?></label>	
                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($personnel['Personnel']['Date_Sor']); ?>'>
                        </div>
			</div>

                        <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Date de Naissance'); ?></label>	
                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($personnel['Personnel']['Date_Nais']); ?>'>
                        </div>
			</div>
           
           </div><div class="col-md-6">     
              		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Type'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($personnel['Personnel']['Type']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Prixjour'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($personnel['Personnel']['Prixjour']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Prixheur'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($personnel['Personnel']['Prixheur']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Tauxdimanche'); ?></label>	
                         <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($personnel['Personnel']['Tauxdimanche']); ?>'>
                        </div>
			</div>	

                         
                        <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('N° CNSS'); ?></label>	
                         <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($personnel['Personnel']['Cnss']); ?>'>
                        </div>
			</div>

                        <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Adresse'); ?></label>	
                         <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($personnel['Personnel']['Gsm']); ?>'>
                        </div>
			</div>

                        <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Etat Civil'); ?></label>	
                         <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($personnel['Personnel']['Adr']); ?>'>
                        </div>
			</div>	

                        <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('N° GSM'); ?></label>	
                         <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($personnel['Personnel']['Etat']); ?>'>
                        </div>
			</div>	


           </div>
<?php echo $this->Form->end();?>
	
</div></div></div></div>


	

