<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Entreeprs/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Consultation Entreé PR'); ?></h3>
                                </div>
                                <div class="panel-body">
         <?php echo $this->Form->create('Entreepr',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>
                           
           <div class="col-md-6">                         
<!--             		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Id'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($entreepr['Entreepr']['id']); ?>'>

                                  </div>
			
		
                                 
</div>		-->
               <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Fournisseur'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $entreepr['Fournisseur']['raison_social']; ?>'>
                                  </div>
			
		
                                 
                            </div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Numero'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($entreepr['Entreepr']['numero']); ?>'>

                                  </div>
			
		
                                 
</div>
           
           </div><div class="col-md-6">     
              		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Date'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php $entreepr['Entreepr']['date']=date("d/m/Y",strtotime(str_replace('-','/',$entreepr['Entreepr']['date']))); ?><?php echo h($entreepr['Entreepr']['date']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Depot'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $entreepr['Deposit']['nom']; ?>'>
                                  </div>
			
		
                                 
                            </div>	</div>
                                    <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Pièces de rechange</h3> 
                            </div>
                            <div class="panel-body"> 
                                <div class="tab-content tab-border"> 
                                    <div class="tab-pane fadein active" id="famille">

                                        <table class="table nolabel" id="table" style="width: 100%">
                                            <thead>
<tr class='typee'>
    <td style="border: 1px solid #ddd !important;" align="center" style="width: 30%">Référence</td> 
    <td style="border: 1px solid #ddd !important;" align="center" style="width: 30%">Désignation</td>  
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
     $qte=$var_ligne['Lignepre']['qte'];
     $ttc=$var_ligne['Lignepre']['ttc']; 
     $lot=$var_ligne['Lignepre']['Num_lot']; 
     $total=$qte*$ttc;
     $total2=number_format($total,3);
     $somme+=$total;
   ?>
<tr class="cc" >
    <td style="border: 1px solid #ddd !important;"><?php echo $code; ?> </td> 
    <td style="border: 1px solid #ddd !important;"> <?php echo $matierepremiere_id; ?> </td>  
    <td style="border: 1px solid #ddd !important;"> <?php echo $qte; ?> </td>
    <td style="border: 1px solid #ddd !important;"> <?php echo $lot; ?> </td>
    <td style="border: 1px solid #ddd !important;"> <?php echo $ttc; ?></td>
    <td style="border: 1px solid #ddd !important;"> <?php echo $total2; ?> </td> 
</tr> 
                                                 <?php } ?>  
                                            </tbody>  
                                             <tfoot>
                                                <tr>
                                                    <td colspan="3" ></td>  
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


	

