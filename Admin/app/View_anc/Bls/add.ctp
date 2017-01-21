<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Bls/index"/> <i class="fa fa-reply"></i> Retour </a>
    <input type="hidden" class="ipage" value="bc"/>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Ajout Bon de livraison'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Bl',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('fournisseur_id',array('empty'=>'Veuillez choisir','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text', 'required data-bv-notempty-message'=>'Champ Obligatoire') );
		
	?></div><div class="col-md-6"><?php
		
		echo $this->Form->input('numero',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('bill_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?>
  </div>  
                                    
   <br>                              
                                    
     <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Ligne Bon de Livraison</h3>
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
                                                <td style="width: 35%"  align="center">Matiére premiere</td>
                                                <td style="width: 11%"  align="center">Qte</td>
                                                <td style="width: 11%"  align="center">Prix unitaire</td>
                                                <td style="width: 11%"  align="center">Remise</td>
                                                <td style="width: 11%"  align="center">Prix HT</td>
                                                <td style="width: 11%"   align="center">TVA</td>
                                               
                                                <td style="width: 2%"></td> 
                                        </tr>
                                            </thead>
                                                  
                                            <tbody>
                                                <tr class='type'  style="display: none !important"> 
                                                <td align="center" > <?php 
                                                            echo $this->Form->input('sup',array('name'=>'','id'=>'','champ'=>'sup','table'=>'Lbl','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','type'=>'hidden','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'') );
                                                            echo $this->Form->input('matierepremiere_id',array('empty'=>'Veuillez choisir','label' =>  '', 'id' => 'matierepremiere_id', 'name' => 'data[Lbl][0][matierepremiere_id]','table'=>'Lbl','champ'=>'matierepremiere_id','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10 adrcli">','after'=>'</div>','class'=>'form-control uniforme-select mp','required data-bv-notempty-message'=>'Champ Obligatoire') ); ?></td>       
                                                <td align="center"> <?php echo $this->Form->input('qte_piece', array('label' => '', 'id' => 'qte_piece', 'name' => 'data[Lbl][0][qte_piece]','table' => 'Lbl','champ'=>'qte_piece','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control qte_piece ','required data-bv-notempty-message'=>'Champ Obligatoire') ); ?></td> 
                                                <td align="center"> <?php echo $this->Form->input('prix_unit',array('label' =>  '', 'id' => 'prix_unit', 'name' => 'data[Lbl][0][prix_unit]','table'=>'Lbl','champ'=>'prix_unit','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control prix_unit','required data-bv-notempty-message'=>'Champ Obligatoire') ); ?></td> 
                                                <td align="center"> <?php echo $this->Form->input('remise',array('id' => 'remise', 'name' => 'data[Lbl][0][remise]','table'=>'Lbl','champ'=>'remise','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control remise','required data-bv-notempty-message'=>'Champ Obligatoire') ); ?></td> 
                                                <td align="center"> <?php echo $this->Form->input('prix_ht',array('id' => 'prix_ht','type' => 'text', 'name' => 'data[Lbl][0][prix_ht]','table'=>'Lbl','champ'=>'prix_ht','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control prix_ht','required data-bv-notempty-message'=>'Champ Obligatoire') ); ?></td> 
                                                <td align="center"> <?php echo $this->Form->input('tva',array('id' => 'tva', 'name' => 'data[Lbl][0][tva]','table'=>'Lbl','champ'=>'tva','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control tva','required data-bv-notempty-message'=>'Champ Obligatoire') ); ?></td> 
                                                <td align="center"><i index=""  class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"></td>
                                            </tr>
                                            <tr>
                                                
                                                
                                                <td align="center"> <?php
                                                echo $this->Form->input('sup',array('name'=>'data[Lbl][0][sup]','id'=>'sup0','champ'=>'sup','table'=>'Lbl','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','type'=>'hidden','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'Nom') );
                                                
                                                echo $this->Form->input('matierepremiere_id',array('empty'=>'Veuillez choisir','label' =>  '', 'id' => 'matierepremiere_id', 'name' => 'data[Lbl][0][matierepremiere_id]','table'=>'Lbl','champ'=>'matierepremiere_id','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10 adrcli">','after'=>'</div>','class'=>'form-control select') );?></td>
                                                <td> <?php echo $this->Form->input('qte_piece',array('id' => 'qte_piece0', 'name' => 'data[Lbl][0][qte_piece]','table'=>'Lbl','champ'=>'qte_piece','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control qte_piece' ) ); ?></td> 
                                                <td><?php echo $this->Form->input('prix_unit',array('id' => 'prix_unit0', 'name' => 'data[Lbl][0][prix_unit]','table'=>'Lbl','champ'=>'prix_unit','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control prix_unit' ) ); ?></td>  
                                                <td><?php echo $this->Form->input('remise',array('id' => 'remise0', 'name' => 'data[Lbl][0][remise]','table'=>'Lbl','champ'=>'remise','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control remise' ) ); ?></td>  
                                                <td><?php echo $this->Form->input('prix_ht',array('id' => 'prix_ht0','type' => 'text', 'name' => 'data[Lbl][0][prix_ht]','table'=>'Lbl','champ'=>'prix_ht','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control prix_ht' ) ); ?></td>  
                                                <td><?php echo $this->Form->input('tva',array('id' => 'tva0', 'name' => 'data[Lbl][0][tva]','table'=>'Lbl','champ'=>'tva','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control tva' ) ); ?></td>  
                                                <td align="center"><i index="0"  class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"></td>
                                            </tr>

                                           
                                           
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

