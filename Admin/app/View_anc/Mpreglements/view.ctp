<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Mpreglements/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>

</div>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo __('Consultation Mpreglement'); ?></h3>
            </div>
            <div class="panel-body">
         <?php echo $this->Form->create('Mpreglement',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

                <div class="col-md-6">                         
                    <!--             		 <div class='form-group'>	
                                                     <label class='col-md-2 control-label'><?php echo __('Id'); ?></label>	
                                                            
                                                      
                                            <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($mpreglement['Mpreglement']['id']); ?>'>
                    
                                                      </div>
                                            
                                    
                                                     
                    </div>	-->

                    <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Fournisseur'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $mpreglement['Fournisseur']['raison_social']; ?>'>
                        </div>



                    </div>	
                    <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Date'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php
                        
                        $mpreglement['Mpreglement']['Date'] = date("d/m/Y", strtotime(str_replace('-', '/', $mpreglement['Mpreglement']['Date'])));
                        echo $mpreglement['Mpreglement']['Date']; ?>'>

                        </div>



                    </div>	</div><div class="col-md-6">     
                    <!--              		 <div class='form-group'>	
                                                     <label class='col-md-2 control-label'><?php echo __('Montant'); ?></label>	
                                                            
                                                      
                                            <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($mpreglement['Mpreglement']['Montant']); ?>'>
                    
                                                      </div>
                                            
                                    
                                                     
                    </div>			-->
                    <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Numèro'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($mpreglement['Mpreglement']['num']); ?>'>

                        </div>



                    </div>			
                    <!--<div class='form-group'>	
                                                     <label class='col-md-2 control-label'><?php echo __('Remise'); ?></label>	
                                                            
                                                      
                                            <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($mpreglement['Mpreglement']['remise']); ?>'>
                    
                                                      </div>
                                            
                                    
                                                     
                    </div>	-->
                </div>
<?php echo $this->Form->end();?>

            </div></div></div>

    <div class="panel-body">
        <div class="ls-editable-table table-responsive ls-table">
            <table class="table table-bordered table-striped table-bottomless" id="table">
                <thead>
                    <tr>
                        <td> Numéro</td>
                        <td>Date</td>
                        <td>Total TTC</td>
                        <td>Montant réglé</td>
                        <td>Reste</td> 
                    </tr>
                </thead>
                <tbody>
                                            <?php
                                            $sumtt=0;
                                            $sumrest=0;
                                            foreach($mpreglement['Mplignereglement'] as $i=>$b){//debug($b);die;?>
                    <tr>
                                    <?php  $rest=$b['Facturefournisseur']['Total_TTC']-$b['Facturefournisseur']['Montant_Regler']; ?>
                        <td><?php echo $b['Facturefournisseur']['Numero']; ?></td>
                        <td><?php echo $b['Facturefournisseur']['Date']; ?></td>
                        <td><?php echo $b['Facturefournisseur']['Total_TTC']; ?></td>
                        <td><?php echo $b['Facturefournisseur']['Montant_Regler']; ?></td>
                        <td><?php echo $rest; ?></td> 
                    </tr> <?php 
                            $sumtt=$sumtt+$b['Facturefournisseur']['Total_TTC'];
                            $sumrest=$sumrest+$rest; 
                            }
                          ?>
                    <tr> 
                        <td colspan="3"> Total  facture</td>
                        <td colspan="2"> <input type="text" name="data[Mpreglement][ttpayer]" id="ttpayer" class="form-control"  value="<?php echo $sumtt; ?>"></td> 
                    </tr>
                    <tr> 
                        <td colspan="3"> Total  reste</td>
                        <td colspan="2"> <input type="text" name="data[Mpreglement][ttpayer]" id="ttpayer" class="form-control"  value="<?php echo $sumrest; ?>"></td> 
                    </tr>
                    <tr>
                        <td colspan="3"> Remise</td> 
                        <td colspan="2">
                            <input type="text"  class="form-control" value="<?php echo $mpreglement['Mpreglement']['remise']; ?>"> 
                        </td>
                    </tr> 
                    <tr>
                        <td colspan="3">Montant a payer</td>
                        <td colspan="2"><?php 
                                    $val=0;
                                    foreach($mpreglement['Mppiecereglement'] as $i=>$b){
                                        $val+=$b['montant']; 
                                    }?> 
                            <input type="text"  class="form-control"  value="<?php  echo $val;   ?>">
                        </td>
                    </tr> 

                </tbody>


            </table>
        </div></div>





</div>




