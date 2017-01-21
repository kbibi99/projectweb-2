<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Fournisseurs/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Consultation Fournisseur'); ?></h3>
                                </div>
                                <div class="panel-body">
         <?php echo $this->Form->create('Fournisseur',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>
                           
           <div class="col-md-6">                         
             			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Code'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($fournisseur['Fournisseur']['code']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Raison Social'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($fournisseur['Fournisseur']['raison_social']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Code Postal'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($fournisseur['Fournisseur']['code_postal']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Matricule Fiscal'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($fournisseur['Fournisseur']['matricule_fiscal']); ?>'>

                                  </div>
			
		
                                 
</div>                  <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Famille Fournisseur'); ?></label>	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($fournisseur['Famillefournisseur']['name']); ?>'>

                                  </div>
			
		
                                 
</div>
           
           </div><div class="col-md-6">     
              		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Tel'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($fournisseur['Fournisseur']['tel']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Fax'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($fournisseur['Fournisseur']['fax']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Mail'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($fournisseur['Fournisseur']['mail']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Tva'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($fournisseur['Fournisseur']['tva']); ?>'>

                                  </div>
			
		
                                 
</div>	
</div>
                                    
    <br>
                                     <div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading"> 
                                    <h3 class="panel-title"><?php echo __('Contact(s)'); ?></h3>  
                                     
                            </div> 
                               
                                <div class="panel-body">
                                    <table border="1" style="border-color: #ddd !important;"  id="tabcontact" width="100%">
                                          
                                        
                                         <?php
                                 //    debug($fournisseur);die;
                       foreach ($fournisseur['Contact'] as $key=>$Lclient){ 
                          // debug($Lclient); die;
                           
                        $id=$Lclient['id'];
                        $adresse=$Lclient['adresse'];
                        $name=$Lclient['nom'];
                        $ville_id=$Lclient['ville_id'];
                        $pay_id=$Lclient['pay_id'];
                        $tel=$Lclient['tel'];
                        $fax=$Lclient['fax'];
                        $fournisseur_id=$Lclient['fournisseur_id'];
                            
                        
            ?>
                                        
                                        <tr><td  width="98%" style="padding-top: 15px;">
                                        

            <div class="col-md-6">                  
              	
                <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Nom'); ?></label>	 
                                 <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $fournisseur['Contact'][$key]['nom']; ?>'>
                                  </div>
		</div>
                <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Tel'); ?></label>	 
                                 <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $fournisseur['Contact'][$key]['tel']; ?>'>
                                  </div>
		</div>
                <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Fax'); ?></label>	 
                                 <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $fournisseur['Contact'][$key]['fax']; ?>'>
                                  </div>
		</div>
                              
            </div><div class="col-md-6"> 
                
                <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Adresse'); ?></label>	 
                                 <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $fournisseur['Contact'][$key]['adresse']; ?>'>
                                  </div>
		</div>
                <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Ville'); //debug($fournisseur['contact'][$key]['Ville']);die;?></label>	 
                                 <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $fournisseur['Contact'][$key]['Ville']['name']; ?>'>
                                  </div>
		</div>
                <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Pay'); ?></label>	 
                                 <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $fournisseur['Contact'][$key]['Pay']['designation']; ?>'>
                                  </div>
		</div>
                

  </div>  
                                                </td>
                                        </tr>
                                          <?php } ?>
                                    </table>  
</div>
                            </div>
                        </div>
</div>
<?php echo $this->Form->end();?>
	
</div></div>
    
   
    
    
    
    </div></div>


	



	

