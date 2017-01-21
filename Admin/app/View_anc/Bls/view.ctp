<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Bls/index"/> <i class="fa fa-reply"></i> Retour </a>
    <input type="hidden" class="ipage" value="bc"/>
    </div>

</div>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo __('Consultation Bl'); ?></h3>
            </div>
            <div class="panel-body">
         <?php echo $this->Form->create('Bl',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

                <div class="col-md-6">                         
                    			 <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Fournisseur'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $bl['Fournisseur']['id']; ?>'>
                        </div>



                    </div>			 <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Date'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($bl['Bl']['date']); ?>'>

                        </div>


                    </div></div><div class="col-md-6">     
            
                  			 <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Numero'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($bl['Bl']['numero']); ?>'>

                        </div>



                    </div>
                    	 <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Bill'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $bl['Bill']['id']; ?>'>
                        </div>



                    </div>	</div>


                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Ligne bon de livraison</h3>

                        </div>
                        <div class="panel-body">
                            <!--Table Wrapper Start-->
                            <div class="table-responsive ls-table">
                                <table id="table" class="table" >
                                    <thead>
                                        <tr >
                                            <td   align="center">Qte</td>
                                            <td   align="center">Prix unitaire</td>
                                            <td   align="center">Remise</td>
                                            <td   align="center">Prix HT</td>
                                            <td   align="center">TVA</td>
                                            <td   align="center">TTC</td>  
                                        </tr>
                                    </thead> 
                                    <tbody> 
                                         <?php
//                                          
                       foreach ($lbls as $key=>$data){  
//debug($data); die ;
            ?>
                                        <tr >  
                                            <td> <?php echo $this->Form->input('qte_piece',array('label' => '','id' => 'qte_piece'.$key, 'name' => 'data[Lbl]['.$key.'][qte_piece]','table'=>'Lbl','champ'=>'qte_piece','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$data['Lbl']['qte_piece'], 'type'=>'text'  ) ); ?></td>  
                                            <td> <?php echo $this->Form->input('prix_unit',array('label' => '','id' => 'prix_unit'.$key, 'name' => 'data[Lbl]['.$key.'][prix_unit]','table'=>'Lbl','champ'=>'prix_unit','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$data['Lbl']['prix_unit'], 'type'=>'text'  ) ); ?></td>  
                                            <td> <?php echo $this->Form->input('remise',array('label' => '','id' => 'remise'.$key, 'name' => 'data[Lbl]['.$key.'][remise]','table'=>'Lbl','champ'=>'remise','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$data['Lbl']['remise'], 'type'=>'text'  ) ); ?></td>  
                                            <td> <?php echo $this->Form->input('prix_ht',array('label' => '','id' => 'prix_ht'.$key, 'name' => 'data[Lbl]['.$key.'][prix_ht]','table'=>'Lbl','champ'=>'prix_ht','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$data['Lbl']['prix_ht'], 'type'=>'text'  ) ); ?></td>  
                                            <td> <?php echo $this->Form->input('tva',array('label' => '','id' => 'tva'.$key, 'name' => 'data[Lbl]['.$key.'][tva]','table'=>'Lbl','champ'=>'tva','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$data['Lbl']['tva'], 'type'=>'text'  ) ); ?></td>  
                                            
                                            <td> <?php echo $this->Form->input('ttc',array('label' => '','id' => 'ttc'.$key, 'name' => 'data[Lbl]['.$key.'][ttc]','table'=>'Lbl','champ'=>'ttc','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$data['Lbl']['ttc'], 'type'=>'text'  ) ); ?></td>  
                                        </tr>
                       <?php } ?>        
                                    </tbody>
                                </table>
                            </div>
                            <!--Table Wrapper Finish-->
                            
                            
                            <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Prix Ht'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($bl['Bl']['prix_ht']); ?>'>

                        </div>



                    </div>			 <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Prix Ttc'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($bl['Bl']['prix_ttc']); ?>'>

                        </div>



                    </div>	
                    		 <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Prix Tva'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($bl['Bl']['prix_tva']); ?>'>

                        </div>



                    </div>	
                            
                            
                            
                            
                        </div>
                    </div>
                </div>



<?php echo $this->Form->end();?>

            </div></div></div></div>






	