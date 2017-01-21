<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Boncommandes/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Consultation Boncommande'); ?></h3>
                                </div>
                                <div class="panel-body">
         <?php echo $this->Form->create('Boncommande',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); 
        
         ?>
                           
           <div class="col-md-6">                         
<!--             		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Id'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($boncommande['Boncommande']['id']); ?>'>

                                  </div>
			
		
                                 
</div>			-->
               <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Numéro'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($boncommande['Boncommande']['Numero']); ?>' readonly='readonly'>

                                  </div>
			
		
                                 
</div>			
               <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Client'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control'  value='<?php echo $boncommande['Client']['Raison_Social']; //Raison_Social ?>' readonly='readonly'>
                                  </div>
			
		
                                 
                            </div>	
               			
               	
<!--               <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Total HT'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($boncommande['Boncommande']['Total_HT']); ?>'>

                                  </div>
			
		
                                 
</div>		-->
<!--               <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Remise'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($boncommande['Boncommande']['Remise']); ?>'>

                                  </div>
			
		
                                 
</div>	-->
           </div>
                                    <div class="col-md-6">     
<!--              		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Tva'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($boncommande['Boncommande']['Tva']); ?>'>

                                  </div>
			
		
                                 
</div>		-->
<!--                                        <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Total TTC'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($boncommande['Boncommande']['Total_TTC']); ?>'>

                                  </div>
			
		
                                 
</div>		-->
<!--                                        <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Timbre'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $boncommande['Timbre']['name']; ?>'>
                                  </div>
			
		
                                 
                            </div>	-->
<!--                                        <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Utilisateur'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $boncommande['Utilisateur']['id']; ?>'>
                                  </div>
			
		
                                 
                            </div>	-->

<div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Date'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php $boncommande['Boncommande']['Date']=date("d/m/Y",strtotime(str_replace('-','/',$boncommande['Boncommande']['Date']))); ?><?php echo h($boncommande['Boncommande']['Date']); ?>' readonly='readonly'>

                                  </div> 
</div> 


                                        <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Adresse'); ?></label>	 
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $boncommande['Ligneclient']['name']." : ".$boncommande['Ligneclient']['adresse']; ?>' readonly='readonly'>
                                  </div> 
                            </div>
<div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Date Livraison'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php $boncommande['Boncommande']['Date_Livraison']=date("d/m/Y",strtotime(str_replace('-','/',$boncommande['Boncommande']['Date_Livraison']))); ?><?php echo h($boncommande['Boncommande']['Date_Livraison']); ?>' readonly='readonly'>

                                  </div>
			
		
                                 
</div>	

                            </div>        
                                    <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Article commande</h3>
                                     
                                </div>
                                <div class="panel-body">
                                    <!--Table Wrapper Start-->
                                    <div class="table-responsive ls-table">
                                        <table id="table" class="table" >
                                            <thead>
                                            <tr >
                                                <td   align="center">Famille</td>
                                                <td   align="center">Qte</td>  
                                                <td   align="center">Observation</td> 
                                        </tr>
                                            </thead> 
                                            <tbody> 
                                         <?php
                                      //    debug($boncommande['Lignecommande']); die ;
                       foreach ($boncommande['Lignecommande'] as $key=>$Lcom){  
                            //debug($Lcom['Famille']['name']); die ;
                        $qte=$Lcom['Qte'];
                          $observation=$Lcom['observation'];
                        $famille_name=$Lcom['Famille']['name'];  
            ?>
                                            <tr >  
                                                <td > <?php echo $this->Form->input('famille_id',array('label' => '','id' => 'famille_id'.$key, 'name' => 'data[Lignecommande]['.$key.'][famille_id]','table'=>'Lignecommande','champ'=>'Qte','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$famille_name, 'type'=>'text'  ) ); ?></td>  
                                            <td > <?php echo $this->Form->input('Qte',array('label' => '','id' => 'Qte'.$key, 'name' => 'data[Lignecommande]['.$key.'][Qte]','table'=>'Lignecommande','champ'=>'Qte','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$qte ) ); ?></td> 
                                             <td > <?php echo $this->Form->input('Qte',array('label' => '','id' => 'Qte'.$key, 'name' => 'data[Lignecommande]['.$key.'][Qte]','table'=>'Lignecommande','champ'=>'Qte','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$observation,'type'=>'textarea','rows'=>2 ) ); ?></td>  
                                            </tr>
                       <?php } ?>        
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--Table Wrapper Finish-->
                                </div>
                            </div>
                        </div>
                                    
                                    
                                    
<?php echo $this->Form->end();?>
	
</div></div></div></div>


	

