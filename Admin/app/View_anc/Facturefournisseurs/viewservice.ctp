<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>facturefournisseurs/index"/> <i class="fa fa-reply"></i> Retour </a>
    <input type="hidden" class="ipage" value="bc"/>
    </div>

</div>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php
               // debug($facturefournisseur);
                echo __('Consultation Facture'); ?></h3>
            </div>
            <div class="panel-body">
         <?php echo $this->Form->create('Facturefournisseur',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>
<?php //debug($facturefournisseur['Facturefournisseur'][]);die; ?>
                <div class="col-md-6">                         
                    <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Fournisseur'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $facturefournisseur['Fournisseur']['raison_social']; ?>'>
                        </div>



                    </div>			 <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Date'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($facturefournisseur['Facturefournisseur']['Date']); ?>'>

                        </div>



                    </div>	</div><div class="col-md-6">     
                    <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Numero'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($facturefournisseur['Facturefournisseur']['Numero']); ?>'>

                        </div>



                    </div>
                        
                        <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Total TTC'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($facturefournisseur['Facturefournisseur']['Total_TTC']); ?>'>

                        </div>



                    </div>

                    </div>


<?php echo $this->Form->end();?>

            </div></div></div></div>




