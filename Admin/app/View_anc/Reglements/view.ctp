<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Reglements/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>

<br>
    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Consultation règlement '); ?></h3>
                                </div>
                                <div class="panel-body">
         <?php echo $this->Form->create('Reglement',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>
                           
           <div class="col-md-6">                         
             			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Client'); ?></label>	
                                  
			<?php  //debug($reglement);die;?>
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $reglement['Client']['Raison_Social']; ?>'>
                                  </div>
			
		
                                 
                            </div>	
                <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Marque'); ?></label>	
                                  
			<?php  //debug($reglement);die;?>
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $reglement['Marque']['name']; ?>'>
                                  </div>
			
		
                                 
                            </div>
           </div><div class="col-md-6"> 
                                	 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Date'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo date("d/m/Y",strtotime(str_replace('-','/',($reglement['Reglement']['Date'])))); ?>'>

                                  </div>
			
		
                                 
                                         </div> </div>
                                </div></div></div></div>
                                   <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Facture  règler '); ?></h3>
                                </div>
                                <div class="panel-body">
                                 
                                    <div class="ls-editable-table table-responsive ls-table">
                                <table class="table table-bordered table-striped table-bottomless" id="table">
                                    <thead>
                                            <tr>
                                                <td> Numéro</td>
                                                <td>Date</td>
                                                <td>Total TTC</td>
                                                <td>Montant régler</td>
                                                 <td>Reste</td>
                                                  <td>Remise</td>
                                                
                                            </tr>
                                        </thead> 
                                        <tbody>
                                            <?php //debug($reglement['Lignereglement']);die;
                                            foreach ($reglement['Lignereglement'] as $l){ //debug($l);die; ?>
                                            <tr>
                                                <td> <?php echo $l['Bonlivraison']['Numero']; ?></td>
                                                <td><?php echo  date("d/m/Y",strtotime(str_replace('-','/',$l['Bonlivraison']['Date']))); ?></td>
                                                <td><?php echo $l['Bonlivraison']['Total_TTC']; ?></td>
                                                <td><?php echo $l['Montant']; ?> </td>
                                                <td><?php echo $l['Bonlivraison']['Total_TTC']-$l['remise']-$l['Montant']; ?></td>
                                                <td><?php echo $l['remise']; ?></td>
                                                
                                            </tr>
                                            <?php }?>
                                             <tr>
                                                <td colspan="5" >Total</td>
                                                <td><?php echo h($reglement['Reglement']['Montant']+$reglement['Reglement']['Remise']); ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="5">Remise</td>
                                                <td><?php echo h($reglement['Reglement']['Remise']); ?></td>
                                            </tr>
                                           
                                             <tr>
                                                <td colspan="5" >Net à payer </td>
                                                <td><?php echo h($reglement['Reglement']['Montant']); ?></td>
                                            </tr>
                                             
                                        </tbody></table>
                                    </div></div></div></div></div>
                                       
                                   <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Piéce réglement'); ?></h3>
                                </div>
                                <div class="panel-body">
                                 
                                    <div class="ls-editable-table table-responsive ls-table">
                                <table class="table table-bordered table-striped table-bottomless" id="table">
                                            
                                            <?php foreach($pieceregement as $i=>$lp ){ //debug($lp);die;?>
                                            <tr>
                                                <td colspan="5"> Mode règlement</td>
                                                <td> <?php echo $lp['Paiement']['name']; ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="5"> Montant</td>
                                                <td><?php echo $lp['Piece']['montant']; ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="5"> N°recu</td>
                                                <td><?php echo $lp['Piece']['num_recu']; ?></td>
                                            </tr>
                                            <?php if($lp['Paiement']['id']!=1){?>
                                             <tr>
                                                <td colspan="5"> Echéance</td>
                                                <td><?php echo date("d/m/Y",strtotime(str_replace('-','/',$lp['Piece']['echance']))); ?></td>
                                            </tr>
                                             <tr>
                                                <td colspan="5"> Numéro pièce</td>
                                                <td><?php echo $lp['Piece']['num']; ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="5"> Banque</td>
                                                <td><?php echo $lp['Piece']['banque']; ?></td>
                                            </tr>
                                            <?php }?>
                                            <?php } ?>
                                        </tbody>
                                </table>
              			</div>
                                 </div>
<?php echo $this->Form->end();?>
	
</div></div></div></div>


	

