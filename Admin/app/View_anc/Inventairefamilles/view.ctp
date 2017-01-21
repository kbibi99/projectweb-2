<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Inventairefamilles/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Consultation Inventaire familles'); ?></h3>
                                </div>
                                <div class="panel-body">
         <?php echo $this->Form->create('Inventairefamille',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>
                           
           <div class="col-md-6">                         
             		 		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Date'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($inventairefamille['Inventairefamille']['date']); ?>'>

                                  </div>
			
		
                                 
</div>	</div><div class="col-md-6">     
              		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Numéro'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($inventairefamille['Inventairefamille']['numero']); ?>'>

                                  </div>
			
		
                                 
</div>	</div>
                    <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> Lignes Inventaires</h3>
                                    <a class="btn btn-danger ajouterligne2" table='table' index='index' tr='type'  style="
                                    float: right; 
                                    position: relative;
                                    top: -25px;
                                "> <i class="fa fa-plus-circle"  ></i>Ajouter ligne</a>
                                    
                                </div>
                                <div class="panel-body">
                                    <!--Table Wrapper Start-->
                                    <div class="table-responsive ls-table">
                                        <table id="table" class="table" >
                                            <thead>
                                            <tr >
                                             <td align="center" width="60%">Famille</td>
                                             <td align="center" width="40%">Qte</td>

                                        </tr>
                                            </thead>
                                                  
                                            <tbody>
                                               
                                            <?php //debug($this->request->data['Ligneinventairefamille']);die;
                                            foreach($inventairefamille['Ligneinventairefamille'] as $k=>$ligne){
                                                ?>
                                            <tr>
                                                <td align="center"><?php echo h($ligne['Famille']['name']);?></td>
                                                <td align="center"><?php echo h($ligne['qte']);?></td>
                                            </tr>
                                            <?php } ?>
                                           
                                           
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--Table Wrapper Finish-->
                                </div>
                            </div>
                        </div>                 
<?php echo $this->Form->end();?>
	
</div></div></div></div>


	

