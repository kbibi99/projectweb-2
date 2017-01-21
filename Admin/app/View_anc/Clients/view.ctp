<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Clients/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Consultation Client'); ?></h3>
                                </div>
                                <div class="panel-body">
         <?php echo $this->Form->create('Client',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>
                           
           <div class="col-md-6">                         
             		
<!--               <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Id'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($client['Client']['id']); ?>'>

                                  </div>
			
		
                                 
</div>			 -->
               <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Code'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($client['Client']['Code']); ?>'>

                                  </div>
			
		
                                 
</div>			 
               
               <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Raison Social'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($client['Client']['Raison_Social']); ?>'>

                                  </div>
			
		
                                 
</div>			 
               <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Code Postal'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($client['Client']['Code_Postal']); ?>'>

                                  </div>
			
		
                                 
</div>			 
               <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Matricule Fiscal'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($client['Client']['Matricule_Fiscal']); ?>'>

                                  </div>
			
		
                                 
</div>			 
<!--               <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Solde'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($client['Client']['Solde']); ?>'>

                                  </div>
			
		
                                 
</div>			 -->
<!--               <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Autorisation'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($client['Client']['Autorisation']); ?>'>

                                  </div>
			
		
                                 
</div>	-->
           </div><div class="col-md-6">     
              		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Tel'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($client['Client']['Tel']); ?>'>

                                  </div>
			
		
                                 
</div>			 
               <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Fax'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($client['Client']['Fax']); ?>'>

                                  </div>
			
		
                                 
</div>			
               <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Mail'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($client['Client']['Mail']); ?>'>

                                  </div>
			
		
                                 
</div>			
<!--               <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Tva'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($client['Client']['Tva']); ?>'>

                                  </div>
			
		
                                 
</div>			 -->
               <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Resigtre Commerce'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($client['Client']['Resigtre_Commerce']); ?>'>

                                  </div>
			
		
                                 
</div>			
               <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('TVA'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $client['Timbre']['name']; ?>'>
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
                                 //    debug($client);die;
                       foreach ($client['Ligneclient'] as $key=>$Lclient){ 
                          // debug($Lclient); die;
                           
                        $id=$Lclient['id'];
                        $adresse=$Lclient['adresse'];
                        $name=$Lclient['name'];
                        $ville_id=$Lclient['ville_id'];
                        $pay_id=$Lclient['pay_id'];
                        $tel=$Lclient['tel'];
                        $fax=$Lclient['fax'];
                        $client_id=$Lclient['client_id'];
                            
                        
            ?>
                                        
                                        <tr><td  width="98%" style="padding-top: 15px;">
                                        

            <div class="col-md-6">                  
              	
                <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Nom'); ?></label>	 
                                 <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $client['Ligneclient'][$key]['name']; ?>'>
                                  </div>
		</div>
                <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Tel'); ?></label>	 
                                 <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $client['Ligneclient'][$key]['tel']; ?>'>
                                  </div>
		</div>
                <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Fax'); ?></label>	 
                                 <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $client['Ligneclient'][$key]['fax']; ?>'>
                                  </div>
		</div>
                              
            </div><div class="col-md-6"> 
                
                <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Adresse'); ?></label>	 
                                 <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $client['Ligneclient'][$key]['adresse']; ?>'>
                                  </div>
		</div>
                <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Pay'); ?></label>	 
                                 <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $client['Ligneclient'][$key]['Pay']['designation']; ?>'>
                                  </div>
		</div>
                <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Ville'); //debug($client['Ligneclient'][$key]['Ville']);die;?></label>	 
                                 <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $client['Ligneclient'][$key]['Ville']['name']; ?>'>
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


	

