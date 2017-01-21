<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Articles/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Consultation Article'); ?></h3>
                                </div>
                                <div class="panel-body">
         <?php echo $this->Form->create('Article',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>
                           
           <div class="col-md-6">  
               <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Code'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $article['Article']['code']; ?>'>
                                  </div>
			
		
                                 
                            </div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Référence'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $article['Article']['reference']; ?>'>
                                  </div>
			
		
                                 
                            </div>
	 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Prix'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($article['Article']['prix']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Quantité alerte'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($article['Article']['qtealert']); ?>'>

                                  </div>
			</div> 
 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Date création'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input'  value='<?php $article['Article']['date_Creation']=date("d/m/Y",strtotime(str_replace('-','/',$article['Article']['date_Creation']))); ?><?php echo h($article['Article']['date_Creation']); ?>'>

                                  </div>
			</div> 


<div class='form-group'>
		   <label class='col-md-2 control-label'><?php echo __('Image'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'>
                            <div class="ls-image-fluid-box">
                               
                                                 <div class="col-md-12">
                                                     <div class="ls-fluid-box-gallery">
                                            <a href="<?php echo $this->webroot;?>files/reference/<?php echo $article['Article']['image']; ?>" title="" data-fluidbox class="col-1">
                                                     <img src="<?php echo $this->webroot;?>files/reference/<?php echo $article['Article']['image']; ?>"/>
                                            
                                            </a></div></div>
                                                 </div>
<!--                            <div class ='imagediv' ><img src="<?php echo $this->webroot; ?>files/reference/<?php echo $article['Article']['image']?>" class="file-preview-image" title="Desert.jpg" alt="Desert.jpg">
                    </div>-->
                            <!--<input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($reference['Reference']['image']); ?>'>-->

                                  </div>
                                 
</div>	</div><div class="col-md-6">     
              		 			 <div class='form-group'>
                                                      <label class='col-md-2 control-label'><?php echo __('Famille'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $article['Famille']['name']; ?>'>
                                  </div>
                                                  </div>    <div class='form-group'>
		
                                 
                                 <label class='col-md-2 control-label'><?php echo __('Modele'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $article['Modele']['name']; ?>'>
                                  </div>
			
		
                                 
                            </div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Couleur'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $article['Couleur']['name']; ?>'>
                                  </div>
			
		
                                 
                            </div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Taille'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $article['Taille']['name']; ?>'>
                                  </div>
			
		
                                 
                            </div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Type'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $article['Type']['name']; ?>'>
                                  </div>
			
		
                                 
                            </div>	</div>
<?php echo $this->Form->end();?>
	
</div></div></div></div>


	

