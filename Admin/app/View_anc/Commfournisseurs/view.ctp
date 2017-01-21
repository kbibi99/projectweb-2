<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>commfournisseurs/index"/> <i class="fa fa-reply"></i> Retour </a>
        <input type="hidden" class="ipage" value="bc"/>
    </div>

</div>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php
               // debug($commfournisseur);
                echo __('Consultation Commande'); ?></h3>
            </div>
            <div class="panel-body">
         <?php echo $this->Form->create('Commfournisseur',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>
<?php //debug($commfournisseur['Commfournisseur'][]);die; ?>
                <div class="col-md-6">                         
                    <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Fournisseur'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $commfournisseur['Fournisseur']['raison_social']; ?>'>
                        </div>



                    </div>			 <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Date'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($commfournisseur['Commfournisseur']['Date']); ?>'>

                        </div>



                    </div>	
                <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Date Livraison'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($commfournisseur['Commfournisseur']['Date_liv']); ?>'>

                        </div>



                    </div>
                    <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Type'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($commfournisseur['Commfournisseur']['Type']); ?>'>

                        </div>



                    </div>
                </div><div class="col-md-6">     
                    <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Numero'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($commfournisseur['Commfournisseur']['Numero']); ?>'>

                        </div>



                    </div>
                    <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Adresse Livraison'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($commfournisseur['Commfournisseur']['Adr_liv']); ?>'>

                        </div>



                    </div>
                     <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Reference'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($commfournisseur['Commfournisseur']['Ref']); ?>'>

                        </div>



                    </div>
                    <!--                        <div class='form-group'>	
                                            <label class='col-md-2 control-label'><?php echo __('Bon de livraison'); ?></label>	
                    
                    
                                            <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $bc['Bl']['numero']; ?>'>
                                            </div>
                    
                    
                    
                                        </div>	-->
                </div>


                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Ligne de commande</h3>


                        </div>
                        <div class="panel-body">
                            <!--Table Wrapper Start-->
                            <div class="panel-body">
                                <!-- Nav tabs -->

                                <div class="tab-content tab-border">
                                    <div class="table-responsive ls-table">

            <table id="table" class="table" >


                <thead>
                    <tr >

                        <td align='center' width='40%'><strong>Matiére première</strong></td>
                        <td align='center' width='20%'><strong>Prix</strong></td>
                        <td align='center' width='20%'><strong>Qté</strong></td> 
                        <td align='center' width='20%'><strong>Total</strong></td>
                    </tr>
                </thead>

                <tbody>
                               <?php 
                foreach ($commfournisseur['Lignecommfournisseur'] as $key=>$Lclient){ 
                    //debug($Lclient['Mpfournisseur']['Matierepremiere']['nom2']);die;
                    ?>      
                    <tr>
                        <td align='left'><?php echo $Lclient['Mpfournisseur']['Matierepremiere']['nom2'] ?></td>
                        <td align='center'><?php echo $Lclient['Prix']; ?></td>
                        <td align='center'><?php echo $Lclient['Qte']; ?></td>
                        <td align='center'><?php echo $Lclient['Total_HT']; ?></td>
                         
                    </tr>
                <?php } ?>

                </tbody>
                
            </table>
                                    </div>
                                </div>
                            </div>
                            <!--Table Wrapper Finish-->
                        </div>
                    </div>

                    <div class="panel-body">

<?php echo $this->Form->end();?>
                    </div>
                </div>
<?php echo $this->Form->end();?>

            </div></div></div></div>




