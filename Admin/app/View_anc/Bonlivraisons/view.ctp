<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Bonlivraisons/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Consultation Bon de livraison'); ?></h3>
                                </div>
                                <div class="panel-body">
         <?php //debug();die;
         echo $this->Form->create('Bonlivraison',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>
                           
           <div class="col-md-6">                         
             				 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Numero'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($bonlivraison['Bonlivraison']['Numero']); ?>'>

                                  </div>
			
		
                                 
</div>						 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Date'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($bonlivraison['Bonlivraison']['Date']); ?>'>

                                  </div>
			
		
                                 
</div>				</div><div class="col-md-6">     
     <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Client'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $bonlivraison['Client']['Raison_Social']; ?>'>
                                  </div>
			
		
                                 
                            </div>
          							 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Ligneclient'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $bonlivraison['Ligneclient']['name']; ?>'>
                                  </div>
			
		
                                 
                            </div>	</div>
                                    <table id="table" class="table" >
                                            <thead>
                                            <tr >
                                                <td   align="center">Famille</td>
                                                <td   align="center">Qte</td>
                                                 <td   align="center">prix</td>
                                                <td   align="center">tva</td>
                                                 <td   align="center">remise</td>
                                                <td  align="center"> TTH</td> 
                                        </tr>
                                            </thead>
                                            <tbody> 
                                                <?php  foreach($lingebl as $i=>$li){
                                                   ?>
                                                <tr >
                                                <td   align="center"><?php echo $li['Famille']['name']; ?></td>
                                                <td   align="center"><?php echo $li['Lignebonlivraison']['Qte']; ?></td>
                                                 <td   align="center"><?php echo $li['Lignebonlivraison']['Prix']; ?></td>
                                                <td   align="center"><?php echo $li['Lignebonlivraison']['Tva']; ?></td>
                                                 <td   align="center"><?php echo $li['Lignebonlivraison']['Remise']; ?></td>
                                                <td  align="center"> <?php echo $li['Lignebonlivraison']['Total_HT']; ?></td> 
                                        </tr>
                                                <?php } ?>
                                            </tbody>
                                     <?php //debug($bonlivraison);die;?>
                                                
                                               <tfoot>
                                                  <tr >
                                                   <td   align="right" colspan="5">Remise</td>
                                                <td   align="center"><?php echo  $bonlivraison['Bonlivraison']['Remise']; ?></td>
                                                 </tr>
                                                  <tr >
                                                   <td   align="right" colspan="5">TVA</td>
                                                <td   align="center"><?php echo  $bonlivraison['Bonlivraison']['Tva']; ?></td>
                                                 </tr>
                                                  <tr >
                                                   <td   align="right" colspan="5">Total ht</td>
                                                <td   align="center"><?php echo  $bonlivraison['Bonlivraison']['Total_HT']; ?></td>
                                                 </tr>
                                                  <tr >
                                                   <td   align="right" colspan="5">Total TTC</td>
                                                <td   align="center"><?php echo  $bonlivraison['Bonlivraison']['Total_TTC']; ?></td>
                                                 </tr>
                                                 </tfoot>
                                            </table>
<?php echo $this->Form->end();?>
	
</div></div></div></div>


	

