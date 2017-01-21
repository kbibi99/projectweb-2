<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Pieces/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Consultation Piece'); ?></h3>
                                </div>
                                <div class="panel-body">
         <?php echo $this->Form->create('Piece',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); 
         
        // debug($piece);die;
         ?>
                           
           <div class="col-md-6">                         
               <div class='form-group'style="display: none">	
                                 <label class='col-md-2 control-label'><?php echo __('Id'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($piece['Piece']['id']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Client'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $piece['Client']['Raison_Social']; ?>'>
                                  </div>
			
		
                                 
                            </div>	<?php if($piece['Piecereglement'][0]['Paiement']['id']!=1){?>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Echance'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php 
                                                                                                                            $echance=$piece['Piece']['echance'];
                                                                                                                           $echance = date("d/m/Y",strtotime(str_replace('-','/',$echance)));
                                                                                                                        echo h($echance); ?>'>

                                  </div>
			
		
                                 
</div> <?php } ?>                             <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Date REG'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php 
                                                                                                            $dat=$piece['Piecereglement'][0]['Reglement']['Date']; 
                                                                                                            $dat = date("d/m/Y",strtotime(str_replace('-','/',$dat)));
                                                                                                             echo $dat;?>'>

                                  </div>
			
		
                                 
</div>

<div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Montant'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($piece['Piece']['montant']); ?>'>

                                  </div>
			
		
                                 
</div>
           </div><div class="col-md-6">     
              		 	<?php if($piece['Piecereglement'][0]['Paiement']['id']!=1){?>		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Num'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($piece['Piece']['num']); ?>'>

                                  </div>
			
		
                                 
</div>	<?php  } ?>		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Num Recu'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($piece['Piece']['num_recu']); ?>'>

                                  </div>
			
		
                                 
</div>                            <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Type'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($piece['Piecereglement'][0]['Paiement']['name']); ?>'>

                                  </div>
			
		
                                 
</div>
<div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Banque'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($piece['Piece']['banque']); ?>'>

                                  </div>
			
		
                                 
</div>
           </div>
<?php echo $this->Form->end();?>
	
</div></div></div></div>


	

