<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Entreemps/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>

</div>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo __('Consultation Entrée MP'); ?></h3>
            </div>
            <div class="panel-body">
         <?php echo $this->Form->create('Entreemp',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

                <div class="col-md-6">                         
                    <!--            		 <div class='form-group'>	
                                                   <label class='col-md-2 control-label'><?php echo __('Id'); ?></label>	
                                                          
                                                    
                                          <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($entreemp['Entreemp']['id']); ?>'>
                  
                                                    </div>
                                          
                                  
                                                   
                  </div>			-->
                    <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Fournisseur'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $entreemp['Fournisseur']['raison_social']; ?>'>
                        </div>



                    </div>			 <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Numero'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($entreemp['Entreemp']['numero']); ?>'>

                        </div>



                    </div>
                
                </div><div class="col-md-6">     
                    <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Date'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php $entreemp['Entreemp']['date']=date("d/m/Y",strtotime(str_replace('-','/',$entreemp['Entreemp']['date']))); ?><?php echo h($entreemp['Entreemp']['date']); ?> '>

                        </div>



                    </div>			 <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Depot'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $entreemp['Deposit']['nom']; ?>'>
                        </div>



                    </div>	</div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Matiéres premières</h3> 
                            </div>
                            <div class="panel-body"> 
                                <div class="tab-content tab-border"> 
                                    <div class="tab-pane fadein active" id="famille">

                                        <table class="table nolabel" id="table" style="width: 100%">
                                            <thead>
<tr class='typee'>
    <td style="border: 1px solid #ddd !important;" align="center" style="width: 30%">Référence</td> 
    <td style="border: 1px solid #ddd !important;" align="center" style="width: 30%">Désignation</td> 
    <td style="border: 1px solid #ddd !important;" align="center" style="width: 10%">Qte Colis</td>
    <td style="border: 1px solid #ddd !important;" align="center" style="width: 10%">Qte Piéce</td>
    <td style="border: 1px solid #ddd !important;" align="center" style="width: 10%">Numero Lot</td>
    <td style="border: 1px solid #ddd !important;" align="center" style="width: 10%">Prix</td>
    <td style="border: 1px solid #ddd !important;" align="center" style="width: 10%">Prix total</td> 
</tr>
                                            </thead>
                                            <tbody> 
  <?php  
  $somme=0;
    foreach ($lignes as $key=>$var_ligne){  
     $code=$var_ligne['Matierepremiere']['code'];
     $matierepremiere_id=$var_ligne['Matierepremiere']['designation'];
     $colis=$var_ligne['Lignempe']['colis'];
     $qte=$var_ligne['Lignempe']['qte'];
     $ttc=$var_ligne['Lignempe']['ttc'];
     $Num_lot=$var_ligne['Lignempe']['Num_lot'];
     $total=$qte*$ttc;
     $total2=number_format($total,3);
     $somme+=$total;
   ?>
<tr class="cc" >
    <td style="border: 1px solid #ddd !important;"><?php echo $code; ?> </td> 
    <td style="border: 1px solid #ddd !important;"><?php echo $matierepremiere_id; ?> </td> 
    <td style="border: 1px solid #ddd !important;"> <?php echo $colis; ?> </td>
    <td style="border: 1px solid #ddd !important;"> <?php echo $qte; ?> </td>
    <td style="border: 1px solid #ddd !important;"> <?php echo $Num_lot; ?> </td>
    <td style="border: 1px solid #ddd !important;"> <?php echo $ttc; ?></td>
    <td style="border: 1px solid #ddd !important;"> <?php echo $total2; ?> </td> 
</tr> 
                                                 <?php } ?>  
                                            </tbody>  
                                             <tfoot>
                                                <tr>
                                                    <td colspan="4" ></td>  
                                                    <td>Somme Total:</td>
                                                    <td ><?php 
                                                     $somme2=number_format($somme,3);
                                                    echo $somme2; ?></div></td> 
                                                </tr>
                                            </tfoot>
                                        </table>



                                    </div></div></div></div></div> </div>
<?php echo $this->Form->end();?>

            </div></div></div></div>




