<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Bills/index"/> <i class="fa fa-reply"></i> Retour </a>
    <input type="hidden" class="ipage" value="bc"/>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Modidication Bill'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Bill',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php
                
                $date2 = explode('-', $this->request->data['Bill']['date']);
                $new_date1 = $date2[2] . '/' . $date2[1] . '/' . $date2[0];
		echo $this->Form->input('id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('fournisseur_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly', 'type'=>'text','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$new_date1) );
		
	?></div><div class="col-md-6"><?php
                 echo $this->Form->input('numero',array('type' => 'text', 'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?>
  </div>       
                                    
                                    
                                    
                                                 
                                    
                                    <br>                              
                                    
     <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Ligne Facture</h3>
                                    <a class="btn btn-danger ajouterligne" table='table' index='index' tr='type'  style="
                                    float: right; 
                                    position: relative;
                                    top: -25px;
                                "> <i class="fa fa-plus-circle"  ></i>Ajouter ligne</a>
                                    <input type="hidden" value="0" class="index" id="index">
                                </div>
                                <div class="panel-body">
                                    <!--Table Wrapper Start-->
                                    <div class="table-responsive ls-table">
                                        <table id="table" class="table" >
                                            <thead>
                                            <tr >
                                                <td   align="center">Matiére première</td>
                                                <td   align="center">Qte</td>
                                                <td   align="center">Prix unitaire</td>
                                                <td   align="center">Remise</td>
                                                <td   align="center">Prix HT</td>
                                                <td   align="center">TVA</td>
                                                
                                               
                                                <td></td> 
                                        </tr>
                                            </thead>
                                                  
                                            <tbody>
                                                <tr class='type'  style="display: none !important"> 
                                                <td align="center" ><?php
//                                                echo $this->Form->input('sup',array('name'=>'data[Lbill][0][sup]','id'=>'sup0','champ'=>'sup','table'=>'Lbill','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','type'=>'hidden','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'Nom') );
                                                echo $this->Form->input('matierepremiere_id',array('label' =>  '', 'id' => 'matierepremiere_id', 'name' => 'data[Lbill][0][matierepremiere_id]','table'=>'Lbill','champ'=>'matierepremiere_id','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );?></td>
                                                <td align="center"><?php echo $this->Form->input('qte_piece', array('label' => '', 'id' => 'qte_piece', 'name' => 'data[Lbill][0][qte_piece]','table' => 'Lbill','champ'=>'qte_piece','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control qte_piece ','required data-bv-notempty-message'=>'Champ Obligatoire') ); ?></td>
                                                <td align="center"><?php echo $this->Form->input('prix_unit',array('label' =>  '', 'id' => 'prix_unit', 'name' => 'data[Lbill][0][prix_unit]','table'=>'Lbill','champ'=>'prix_unit','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control prix_unit','required data-bv-notempty-message'=>'Champ Obligatoire') ); ?></td> 
                                                <td align="center"><?php echo $this->Form->input('remise',array('id' => 'remise', 'name' => 'data[Lbill][0][remise]','table'=>'Lbill','champ'=>'remise','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control remise','required data-bv-notempty-message'=>'Champ Obligatoire') ); ?></td> 
                                                <td align="center"><?php echo $this->Form->input('prix_ht',array('id' => 'prix_ht', 'name' => 'data[Lbill][0][prix_ht]','table'=>'Lbill','champ'=>'prix_ht','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control prix_ht','required data-bv-notempty-message'=>'Champ Obligatoire') ); ?></td> 
                                                <td align="center"><?php echo $this->Form->input('tva',array('id' => 'tva', 'name' => 'data[Lbill][0][tva]','table'=>'Lbill','champ'=>'tva','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control tva','required data-bv-notempty-message'=>'Champ Obligatoire') ); ?></td> 
                                                <td align="center"><i index=""  class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"></td>
                                            </tr>
                                            
                                            
                                            
                                            <?php // print'<pre>'; print_r($this->request->dat);die;
                                            
                                            foreach($this->request->data['Lbill'] as $i => $lbl){
                                            ?>
                                            <tr >
                                                
                                                <td align="center"><?php echo $this->Form->input('matierepremiere_id',array('label' =>  '', 'id' => 'matierepremiere_id', 'name' => 'data[Lbill]['.$i.'][matierepremiere_id]','table'=>'Lbill','champ'=>'matierepremiere_id','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control') );?></td> 
                                                <td align="center"> <?php echo $this->Form->input('qte_piece',array('type' => 'text','id' => 'qte_piece0', 'name' => 'data[Lbill]['.$i.'][qte_piece]','table'=>'Lbill','champ'=>'qte_piece','index'=>$i,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control qte_piece', 'value' => $lbl['qte_piece']) ); ?></td> 
                                                <td align="center"><?php echo $this->Form->input('prix_unit',array('type' => 'text','id' => 'prix_unit0', 'name' => 'data[Lbill]['.$i.'][prix_unit]','table'=>'Lbill','champ'=>'prix_unit','index'=>$i,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control prix_unit' , 'value' => $lbl['prix_unit']) ); ?></td>  
                                                <td align="center"><?php echo $this->Form->input('remise',array('type' => 'text','id' => 'remise0', 'name' => 'data[Lbill]['.$i.'][remise]','table'=>'Lbill','champ'=>'remise','index'=>$i,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control remise', 'value' => $lbl['remise']) ); ?></td>  
                                                <td align="center"><?php echo $this->Form->input('prix_ht',array('type' => 'text', 'id' => 'prix_ht0', 'name' => 'data[Lbill]['.$i.'][prix_ht]','table'=>'Lbill','champ'=>'prix_ht','index'=>$i,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control prix_ht' , 'value' => $lbl['prix_ht']) ); ?></td>  
                                                <td align="center"><?php echo $this->Form->input('tva',array('type' => 'text','id' => 'tva0', 'name' => 'data[Lbill]['.$i.'][tva]','table'=>'Lbill','champ'=>'tva','index'=>$i,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control tva' , 'value' => $lbl['tva'] ) ); ?></td>  
                                                <td align="center"><i index="<?php echo $i;?>"  class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"></td>
                                            </tr>
                                            <?php } ?>
                                           
                                           
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--Table Wrapper Finish-->
                                    
                                     <div class="panel-body">
                                    <!--Table Wrapper Start-->
                                    <div class="table-responsive ls-table">
                                        <table id="table" class="table" >
                                            <tr >
                                                <td align="center"><?php echo $this->Form->input('prix_ht',array('div'=>'form-group','type' => 'text','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire', 'label' => 'Total prix HT') ); ?></td>
                                            </tr>
                                            <tr >
                                                <td align="center"><?php echo $this->Form->input('prix_ttc',array('div'=>'form-group','type' => 'text','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire' , 'label' => 'Total prix TTC') ); ?></td>
                                            </tr>
                                            <tr >
                                                <td align="center"><?php echo $this->Form->input('prix_tva',array('div'=>'form-group','type' => 'text','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire', 'label' => 'Total prix TVA') ); ?> </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                                
                                    
            
                                    
                                    
<div class="form-group">
                                            <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                        </div>
<?php echo $this->Form->end();?>
</div>
                            </div>
                        </div>
</div>

