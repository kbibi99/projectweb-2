<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Matierepremieres/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Consultation Matiére première'); ?></h3>
                                </div>
                                <div class="panel-body">
         <?php echo $this->Form->create('Matierepremiere',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>
                           
           <div class="col-md-6">   
               
                <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Type stock'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $matierepremiere['Typestock']['lib']; ?>'>
                                  </div>
			
		
                                 
                            </div>
             				 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Référence'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($matierepremiere['Matierepremiere']['code']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Désignation'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($matierepremiere['Matierepremiere']['designation']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Prix achat'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($matierepremiere['Matierepremiere']['prixachat']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Stock alert'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($matierepremiere['Matierepremiere']['stockalert']); ?>'>

                                  </div>
			
		
                                 
</div>			 

	</div>
                                    <div class="col-md-6">     
<!--              		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Type'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $matierepremiere['Type']['name']; ?>'>
                                  </div>
			
		
                                 
                            </div>-->		
<div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Unité'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $matierepremiere['Unite']['lib']; ?>'>
                                  </div>
			
		
                                 
                            </div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Famille'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $matierepremiere['Family']['lib']; ?>'>
                                  </div>
			
		
                                 
                            </div>			 	
                            <div class='form-group' <?php echo $disp1?>>	
                                 <label class='col-md-2 control-label'><?php echo __('Couleur'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $matierepremiere['Color']['lib']; ?>'>
                                  </div>
			
		
                                 
                            </div>

<div class='form-group'<?php echo $disp?> >	
                                 <label class='col-md-2 control-label' ><?php echo __('Machine'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='<?php echo $disp?>'  class='form-control' readonly='readonly' value='<?php echo $matierepremiere['Machine']['designation']; ?>'> 
                                  </div>
			
		
                                 
                            </div>			 <div class='form-group'<?php echo $disp?> >	
                                 <label class='col-md-2 control-label' ><?php echo __('Emplacement'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='<?php echo $disp?>'  class='form-control' readonly='readonly' value='<?php echo $matierepremiere['Emplacement']['designation']; ?>'>
                                  </div>
			
		
                                 
                            </div>
                            <div <?php echo $disp1?> class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Dimension'); ?></label>	
                                  	
                                  
                                 <div class='col-sm-10'><input type='<?php echo $disp1?>'  class='form-control' readonly='readonly' class='input' value='<?php echo h($matierepremiere['Matierepremiere']['dimension']); ?>'>

                                  </div>
		
		
                                 
</div>
</div>
                                    
                                    
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Fournisseurs</h3>


                        </div>
                        <div class="panel-body">
                            <!--Table Wrapper Start-->
                                <!-- Nav tabs -->

                                <div class="table-responsive ls-table">
                    <table id="table" class="table" >

                                            <thead>
                                                <tr >

                                                    <td >Fournisseurs</td>
                                                    <td >Référence</td>
                                                    <td >Prix achat</td>


                                                </tr>
                                            </thead>

                                            <tbody>
                                                           <?php 
                                            
                                        foreach ($mpfournisseurs as $key=>$Lclient){ //debug($f);
?>      
                                                <tr >

                                                    <td > 
                                                    <?php echo $Lclient['Fournisseur']['raison_social'] ?>
                                                    </td>
                                                    <td > 

                                                    <?php echo $Lclient['Mpfournisseur']['code']; ?>
                                                    </td>
                                                    <td > 

                                                    <?php echo $Lclient['Mpfournisseur']['prix_achat']; ?>
                                                    </td>




                                                </tr>
                                            <?php } ?>

                                            </tbody>
                                        </table>
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






