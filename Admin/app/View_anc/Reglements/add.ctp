<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Reglements/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>

<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Ajout règlement '); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Reglement',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('client_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control clientreglement select ','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'veuillez choisir','value'=>$client_id) );
                echo $this->Form->input('marque_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control marquereglement select ','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'veuillez choisir','value'=>$marque_id) );
		
		//echo $this->Form->input('Retenu',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?></div><div class="col-md-6"><?php
        echo $this->Form->input('Date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
		//echo $this->Form->input('Montant',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		//echo $this->Form->input('versement',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?>
  </div>  
                                    <?php if($client_id!=0&&$bl!=array()){?>
                                     <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="table">
                                        <thead>
                                            <tr>
                                                <td> Numéro</td>
                                                <td>Date</td>
                                                <td>Total TTC</td>
                                                <td>Montant régler</td>
                                                 <td>Reste</td>
                                                  <td>Remise</td>
                                                  <td></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($bl as $i=>$b){//debug($b);die;?>
                                            <tr>
                                                <td> <?php echo $b['Bonlivraison']['Numero']; ?></td>
                                                <td><?php echo $b['Bonlivraison']['Date']; ?></td>
                                                <td><?php echo $b['Bonlivraison']['Total_TTC']; ?></td>
                                                <td><?php echo $b['Bonlivraison']['Montant_Regler']; ?></td>
                                                 <td><?php echo $b['Bonlivraison']['Total_TTC']-$b['Bonlivraison']['Montant_Regler']; ?></td>
                                                 <td><input type="text" name="data[Lignereglement][<?php echo $i; ?>][remise]" id="remise<?php echo $i;?>" class="form-control remisel " index="<?php echo $i; ?>" value="0.000">
                                                            
                                             </td>
                                             <td><input type="checkbox" name="data[Lignereglement][<?php echo $i; ?>][bonlivraison_id]" id="bonlivraison_id<?php echo $i; ?>" index="<?php echo $i; ?>" class="chekreglement" value="<?php echo $b['Bonlivraison']['id'] ?>" mnt="<?php echo $b['Bonlivraison']['Total_TTC']-$b['Bonlivraison']['Montant_Regler']; ?>" >
                                           </td>
                                            </tr>
                                            <?php }?>
                                        <input type="hidden" name="max" value="<?php echo $i; ?>" id="max">
                                              
                                        
                                            <tr>
                                                <td colspan="5"> Total  bl</td>
                                                <td colspan="2">
                                                    <input type="text" name="data[Reglement][ttpayer]" id="ttpayer" class="form-control"  value="0.000">
                                                </td> 
                                            </tr>
                                            <tr>
                                                <td colspan="3"> Remise</td>
                                                <td colspan="2" style="padding-left: 30px">
                                                    <table width='100%'>
                                                        <tr>
                                                            <td><label class="radio-inline" style="width: 100%! important">
                                                                    <input type="radio" name="typeremise" id="typeremise" value="dinar" checked class="typeremise">
                                                            remise en dinar
                                                        </label></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                
                                                        <label class="radio-inline" style="width: 100%! important">
                                                            <input type="radio" name="typeremise" id="typeremise1" value="pourcent" class="typeremise">
                                                            Remise en pourcentage
                                                        </label>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    
                                                        
                                                    
                                                        
                                                    
                                                
                                                </td>
                                                <td colspan="2">
                                                    <input type="text" name="data[Reglement][remisec]" id="remisec" class="form-control remisetc"  value="0.000">
                                                    <input  name="data[Reglement][remise]" id="remise" class="form-control remiset"  value="0.000" type="hidden">
                                                </td>
                                            </tr>
                                             <tr>
                                                <td colspan="5"> Net à payer</td>
                                                <td colspan="2">
                                                    <input type="text" name="data[Reglement][netapayer]" id="netapayer" class="form-control netapayer"  value="0.000">
                                                </td>
                                            </tr>
                                             <tr>
                                                <td colspan="5">Montant a payer</td>
                                                <td colspan="2">
                                                    <input type="text" name="data[Reglement][Montant]" id="Montant" class="form-control"  value="0.000">
                                                </td>
                                            </tr>
                                             
                                                                <tr>
                                                <td colspan="7">
                                                     <input type="hidden" value="0" class="index" id="index">
                                                   <div class="panel-heading">
                                    <h3 class="panel-title">Pièce règlement</h3>
                                    
                                    <a class="btn btn-danger ajouterligne" table='table' index='index' tr='type'  style="
                                    float: right; 
                                    position: relative;
                                    top: -25px;"> <i class="fa fa-plus-circle"  ></i>Ajouter ligne</a>
                                  
                                </div></td>
                                            </tr>
                                            <tr  class='type'  style="display: none !important"> 
                                                <td colspan="7">
                                        <table>
                                             <tr>
                                                <td >Mode réglement </td>  
                                                <td ><?php 
                                                 echo $this->Form->input('paiement_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control modereglement  ','empty'=>'veuillez choisir','label'=>'','index'=>0,'champ'=>'paiement_id','table'=>'pieceregelemnt','name'=>'data[pieceregelemnt][0][paiement_id]') );   
                                               ?> </td>  
                                            </tr>
                                            <tr>
                                                <td >Montant</td>  
                                                <td  ><?php 
                                                 echo $this->Form->input('montant',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control mnt','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'','index'=>0,'champ'=>'montant','table'=>'pieceregelemnt','name'=>'data[pieceregelemnt][0][montant]') );   
                                               ?> </td>  
                                            </tr>
                                            <tr>
                                                <td >N° recu</td>  
                                                <td  ><?php 
                                                 echo $this->Form->input('num_recu',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control ','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'','index'=>0,'champ'=>'num_recu','table'=>'pieceregelemnt','name'=>'data[pieceregelemnt][0][num_recu]') );   
                                               ?> </td>  
                                            </tr>
                                           
                                            <tr >
                                                <td name="data[piece][0][trechance]" id="" index="0"  champ="trechancea" table="piece"  style="display:none" class="modecheque">Echéance</td>  
                                                <td name="data[piece][0][trechance]" id="" index="0"  champ="trechanceb" table="piece"  style="display:none" class="modecheque"><?php 
                                                 echo $this->Form->input('echance',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','label'=>'','type'=>'text','index'=>0,'champ'=>'echance','table'=>'pieceregelemnt','name'=>'data[pieceregelemnt][0][echance]') );   
                                               ?> </td>  
                                            </tr>
                                             <tr >
                                                <td name="data[piece][0][trnum]" id="" index="0"  champ="trnuma" table="piece"  style="display:none" class="modecheque" >Numéro pièce</td>  
                                                <td  name="data[piece][0][trnum]" id="" index="0"  champ="trnumb" table="piece"  style="display:none" class="modecheque"><?php 
                                                 echo $this->Form->input('num_piece',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control ','label'=>'','type'=>'text','index'=>0,'champ'=>'num_piece','table'=>'pieceregelemnt','name'=>'data[pieceregelemnt][0][num_piece]') );   
                                               ?> </td>  
                                            </tr>
                                             <tr >
                                                <td name="data[piece][0][trbanque]" id="" index="0"  champ="trbanquea" table="piece"  style="display:none" class="modecheque" >Banque</td>  
                                                <td  name="data[piece][0][trBanque]" id="" index="0"  champ="trbanqueb" table="piece"  style="display:none" class="modecheque"><?php 
                                                 echo $this->Form->input('banque',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control ','label'=>'','type'=>'text','index'=>0,'champ'=>'banque','table'=>'pieceregelemnt','name'=>'data[pieceregelemnt][0][banque]') );   
                                               ?> </td>  
                                            </tr>
                                            
                                            </table>
                                                    </td>  </tr>
                                                                                  
                                            <tr>
                                                <td colspan="7">
                                        <table>
                                             <tr>
                                                <td >Mode réglement </td>  
                                                <td ><?php 
                                                 echo $this->Form->input('paiement_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control modereglement select  ','empty'=>'veuillez choisir','label'=>'','index'=>0,'id'=>'paiement_id0','champ'=>'paiement_id','table'=>'pieceregelemnt','name'=>'data[pieceregelemnt][0][paiement_id]') );   
                                               ?> </td>  
                                            </tr>
                                            <tr>
                                                <td >Montant</td>  
                                                <td  ><?php 
                                                 echo $this->Form->input('montant',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control mnt','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'','index'=>0,'champ'=>'montant','id'=>'montant0','table'=>'pieceregelemnt','name'=>'data[pieceregelemnt][0][montant]') );   
                                               ?> </td>  
                                            </tr>
                                            <tr>
                                                <td >N° recu</td>  
                                                <td  ><?php 
                                                 echo $this->Form->input('num_recu',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control ','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'','index'=>0,'champ'=>'num_recu','table'=>'pieceregelemnt','name'=>'data[pieceregelemnt][0][num_recu]') );   
                                               ?> </td>  
                                            </tr>
                                           
                                            <tr >
                                                <td name="data[piece][0][trechance]" id="trechancea0" index="0"  champ="trechancea" table="piece"  style="display:none" class="modecheque">Echéance</td>  
                                                <td name="data[piece][0][trechance]" id="trechanceb0" index="0"  champ="trechanceb" table="piece"  style="display:none" class="modecheque"><?php 
                                                 echo $this->Form->input('echance',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','label'=>'','type'=>'text','index'=>0,'champ'=>'echance','table'=>'pieceregelemnt','name'=>'data[pieceregelemnt][0][echance]') );   
                                               ?> </td>  
                                            </tr>
                                             <tr >
                                                <td name="data[piece][0][trnum]" id="trnuma0" index="0"  champ="trnuma" table="piece"  style="display:none" class="modecheque" >Numéro pièce</td>  
                                                <td  name="data[piece][0][trnum]" id="trnumb0" index="0"  champ="trnumb" table="piece"  style="display:none" class="modecheque"><?php 
                                                 echo $this->Form->input('num_piece',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control ','label'=>'','type'=>'text','index'=>0,'champ'=>'num_piece','table'=>'pieceregelemnt','name'=>'data[pieceregelemnt][0][num_piece]') );   
                                               ?> </td>  
                                            </tr>
                                             <tr >
                                                <td name="data[piece][0][banque]" id="trbanquea0" index="0"  champ="banquea" table="piece"  style="display:none" class="modecheque" >Banque</td>  
                                                <td  name="data[piece][0][banque]" id="trbanqueb0" index="0"  champ="banqueb" table="piece"  style="display:none" class="modecheque"><?php 
                                                 echo $this->Form->input('banque',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control ','label'=>'','type'=>'text','index'=>0,'champ'=>'banque','table'=>'pieceregelemnt','name'=>'data[pieceregelemnt][0][banque]') );   
                                               ?> </td>  
                                            </tr>
                                            </table>
                                                    </td>
                                        </tr>
                                       
                                     </tbody>
                                            
                                     
                                    </table>
                                    </div></div>
                                   
                                    
<div class="form-group">
                                            <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                        </div>
                                     <?php } ?>
<?php echo $this->Form->end();?>
</div>
                            </div>
                        </div>
</div>

