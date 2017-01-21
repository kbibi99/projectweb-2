<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Inventories/index/<?php echo $typ;?>"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Modification Inventaire'); ?></h3>
                                </div>
                                <div class="panel-body">
       
      
        <?php echo $this->Form->create('Inventory',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control',) );
		echo $this->Form->input('date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text') );
		echo $this->Form->input('numero',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control') );
	?></div><div class="col-md-6"><?php
	echo $this->Form->input('deposit_id',array('empty'=>'veuillez choisir','id'=>'' ,'champ'=>'deposit_id','table'=>'Deposit','depot_id','div'=>'form-group','label'=>'Dépôt','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','empty'=>'veuillez choisir'));
	?>
  </div>                            
   <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> <?php
                                        if($typ==1){
                                           echo 'Pièces de rechange'; 
                                        }
                                        if($typ==2){
                                           echo 'Matiéres premières'; 
                                        } 
                                        ?></h3>
                                </div>
                                <div class="panel-body">
                                    
                                        

                                        <div class="tab-content tab-border">
 
                                            <div class="tab-pane fade in active" id="famille">
                                                   <table class="table" id="table" style="width: 100%">
                                           <thead>
                                                <tr>
                                                    <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 35%">Nom</td>
                                                    <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 15%">Référence</td>
                                                    <td style="border: 1px solid #ddd !important; <?php  if($typ==1){echo 'display: none;';}?>" align="center" style="widtd: 25%">Colis</td>
                                                    <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 25%">Qte</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                                  <?php 
                                       //debug($matierepremieres);
                                       foreach ($matierepremieres as $key =>$value ) { ?>
<tr>
    <td style="border: 1px solid #ddd !important;"><?php echo $matierepremieres[$key]['Matierepremiere']['designation']?>
        <input type="hidden" name="data[Lineinventory][<?php echo $key; ?>][matierepremiere_id]" value="<?php echo $matierepremieres[$key]['Matierepremiere']['id']?>"  > 
    </td>
    <td style="border: 1px solid #ddd !important;"><?php echo $matierepremieres[$key]['Matierepremiere']['code']?></td>
    <td style="border: 1px solid #ddd !important; <?php if($typ==1){  echo 'display: none;';    }  ?>">
        <input type="text" class="form-control rmv" name="data[Lineinventory][<?php echo $key; ?>][colis]" value="<?php echo $matierepremieres[$key]['Matierepremiere']['stockalert']; ?>"></td> 
    <td style="border: 1px solid #ddd !important;">
        <input type="text" class="form-control rmv"  name="data[Lineinventory][<?php echo $key; ?>][qte]"  value="<?php echo $matierepremieres[$key]['Matierepremiere']['prixachat']; ?>" ></td> 
</tr>  
                                             <?php }?> 
                                            
                                            </tbody>  
                                              </table>
                                               
                                            </div>
                                   
                                        </div></div></div></div></div>
<div class="form-group">
                                            <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" id="submitInventory" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                        </div>
<?php echo $this->Form->end();?>
</div>
                            </div>
                        </div>
</div>

