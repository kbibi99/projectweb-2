<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Bills/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Consultation Bill'); ?></h3>
                                </div>
                                <div class="panel-body">
         <?php echo $this->Form->create('Bill',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>
                           
           <div class="col-md-6">                         
             		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Fournisseur'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $bill['Fournisseur']['id']; ?>'>
                                  </div>
			
		
                                 
                            </div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Date'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($bill['Bill']['date']); ?>'>

                                  </div>
			
		
                                 
</div>	
           
           
           
           		
           </div><div class="col-md-6">    
               
               
               <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Numero'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($bill['Bill']['numero']); ?>'>

                                  </div>
			
		
                                 
</div>
              		 	 		 	</div>
                                    
                                    
                                    
                                    
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Ligne bon de livraison</h3>

                        </div>
                        <div class="panel-body">
                            <!--Table Wrapper Start-->
                            <div class="table-responsive ls-table">
                                <table id="table" class="table" >
                                    <thead>
                                        <tr >
                                            <td   align="center">Matiere première</td>
                                            <td   align="center">Qte</td>
                                            <td   align="center">Prix unitaire</td>
                                            <td   align="center">Remise</td>
                                            <td   align="center">Prix HT</td>
                                            <td   align="center">TVA</td>
                                        </tr>
                                    </thead> 
                                    <tbody> 
                                         <?php                                       
                       foreach ($lbills as $key=>$data){  

            ?>
                                        <tr >  
                                            <td> <?php echo $this->Form->input('matierepremiere_id',array('label' => '','id' => 'matierepremiere_id'.$key, 'name' => 'data[Lbill]['.$key.'][matierepremiere_id]','table'=>'Lbill','champ'=>'matierepremiere_id','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control readonly','selected'=>$data['Lbill']['matierepremiere_id']) ); ?></td>  
                                            <td> <?php echo $this->Form->input('qte_piece',array('label' => '','id' => 'qte_piece'.$key, 'name' => 'data[Lbill]['.$key.'][qte_piece]','table'=>'Lbill','champ'=>'qte_piece','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control readonly','value'=>$data['Lbill']['qte_piece'], 'type'=>'text'  ) ); ?></td>  
                                            <td> <?php echo $this->Form->input('prix_unit',array('label' => '','id' => 'prix_unit'.$key, 'name' => 'data[Lbill]['.$key.'][prix_unit]','table'=>'Lbill','champ'=>'prix_unit','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control readonly','value'=>$data['Lbill']['prix_unit'], 'type'=>'text'  ) ); ?></td>  
                                            <td> <?php echo $this->Form->input('remise',array('label' => '','id' => 'remise'.$key, 'name' => 'data[Lbill]['.$key.'][remise]','table'=>'Lbill','champ'=>'remise','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control readonly','value'=>$data['Lbill']['remise'], 'type'=>'text'  ) ); ?></td>  
                                            <td> <?php echo $this->Form->input('prix_ht',array('label' => '','id' => 'prix_ht'.$key, 'name' => 'data[Lbill]['.$key.'][prix_ht]','table'=>'Lbill','champ'=>'prix_ht','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control readonly','value'=>$data['Lbill']['prix_ht'], 'type'=>'text'  ) ); ?></td>  
                                            <td> <?php echo $this->Form->input('tva',array('label' => '','id' => 'tva'.$key, 'name' => 'data[Lbill]['.$key.'][tva]','table'=>'Lbill','champ'=>'tva','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control readonly','value'=>$data['Lbill']['tva'], 'type'=>'text'  ) ); ?></td>  
                                            
                                        </tr>
                       <?php } ?>        
                                    </tbody>
                                </table>
                            </div>
                            <!--Table Wrapper Finish-->
                            
                            
                            <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Prix Ht'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($bill['Bill']['prix_ht']); ?>'>

                        </div>



                    </div>			 <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Prix Ttc'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($bill['Bill']['prix_ttc']); ?>'>

                        </div>



                    </div>	
                    		 <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Prix Tva'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($bill['Bill']['prix_tva']); ?>'>

                        </div>



                    </div>	
                            
                            
                            
                            
                        </div>
                    </div>
                </div>



<?php echo $this->Form->end();?>

            </div></div></div></div>






	