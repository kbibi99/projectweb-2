<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Sortiemps/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Consultation Sortie MP'); ?></h3>
                                </div>
                                <div class="panel-body">
         <?php echo $this->Form->create('Sortiemp',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>
                           
           <div class="col-md-6">                         
<!--             		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Id'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($sortiemp['Sortiemp']['id']); ?>'>

                                  </div>
			
		
                                 
</div>		-->
               <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Num'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($sortiemp['Sortiemp']['numero']); ?>'>

                                  </div>
			
		
                                 
</div>	</div><div class="col-md-6">     
              		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Deposit'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $sortiemp['Deposit']['nom']; ?>'>
                                  </div>
			
		
                                 
                            </div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Date'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php $sortiemp['Sortiemp']['date']=date("d/m/Y",strtotime(str_replace('-','/',$sortiemp['Sortiemp']['date']))); ?><?php echo h($sortiemp['Sortiemp']['date']); ?>'>

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
    <td style="border: 1px solid #ddd !important;" align="center" style="width: 35%">Référence</td> 
    <td style="border: 1px solid #ddd !important;" align="center" style="width: 35%">Désignation</td> 
    <td style="border: 1px solid #ddd !important;" align="center" style="width: 10%">Qte Colis</td>
    <td style="border: 1px solid #ddd !important;" align="center" style="width: 10%">Qte Piéce</td> 
</tr>
                                            </thead>
                                            <tbody> 
  <?php  
  $somme=0;
    foreach ($lignes as $key=>$var_ligne){  
     $code=$var_ligne['Matierepremiere']['code'];
     $matierepremiere_id=$var_ligne['Matierepremiere']['designation'];
     $colis=$var_ligne['Lignempsorti']['colis'];
     $qte=$var_ligne['Lignempsorti']['qte']; 
   ?>
<tr class="cc" >
    <td style="border: 1px solid #ddd !important;"><?php echo $code; ?> </td> 
    <td style="border: 1px solid #ddd !important;"><?php echo $matierepremiere_id; ?> </td> 
    <td style="border: 1px solid #ddd !important;"> <?php echo $colis; ?> </td>
    <td style="border: 1px solid #ddd !important;"> <?php echo $qte; ?> </td> 
</tr> 
                                                 <?php } ?>  
                                            </tbody>  
                                             
                                        </table>



                                    </div></div></div></div></div> </div>
<?php echo $this->Form->end();?>
	
</div></div></div></div>


	

