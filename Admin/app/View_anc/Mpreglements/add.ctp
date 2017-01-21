<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Mpreglements/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>

</div>
<br>
<div class="row" >
    <div class="col-md-12" >
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo __('Ajoute Réglement'); ?></h3>
            </div>
            <div class="panel-body">
        <?php echo $this->Form->create('Mpreglement',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm')); ?>

                <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('fournisseur_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$fournisseur_id,'empty'=>'Veuillez choisir') );
		echo $this->Form->input('Date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text','required data-bv-notempty-message'=>'Champ Obligatoire') );
		//echo $this->Form->input('Montant',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?></div><div class="col-md-6"><?php
//		echo $this->Form->input('typerem',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
//		echo $this->Form->input('Remise',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('num',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$mm,'type'=>'text') );//,'readonly'
	?>
                </div>               <?php if($fournisseur_id!=0){ ?>
                <div class="panel-body">
                    <div class="ls-editable-table table-responsive ls-table">
                        <table class="table table-bordered table-striped table-bottomless" id="table">
                            <thead>
                                <tr>
                                    <td> Numéro</td>
                                    <td>Date</td>
                                    <td>Total TTC</td>
                                    <td>Montant réglé</td>
                                    <td>Reste</td>
                                    <td>Remise</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                            <?php foreach($bl as $i=>$b){//debug($b);die;?>
                                <tr>
                                    <td><?php echo $b['Facturefournisseur']['Numero']; ?></td>
                                    <td><?php echo $b['Facturefournisseur']['Date']; ?></td>
                                    <td><?php echo $b['Facturefournisseur']['Total_TTC']; ?></td>
                                    <td><?php echo $b['Facturefournisseur']['Montant_Regler']; ?></td>
                                    <td><?php echo $b['Facturefournisseur']['Total_TTC']-$b['Facturefournisseur']['Montant_Regler']; ?></td>
                                    <td><input type="text" name="data[Mplignereglement][<?php echo $i; ?>][remise]" id="remise<?php echo $i;?>" class="form-control remiseligne " index="<?php echo $i; ?>" value="0.000"></td>

                                    <td><input 
                                            type="checkbox" 
                                            name="data[Mplignereglement][<?php echo $i; ?>][facturefournisseur_id]" 
                                            id="facturefournisseur_id<?php echo $i; ?>" 
                                            index="<?php echo $i; ?>" 
                                            class="chekreglements" 
                                            value="<?php echo $b['Facturefournisseur']['id'] ?>" 
                                            mnt="<?php echo $b['Facturefournisseur']['Total_TTC']-$b['Facturefournisseur']['Montant_Regler']; ?>" 
                                            ></td>
                                </tr>
                                            <?php }?>
                                <tr>
                            <input type="hidden" name="max" value="<?php echo @$i; ?>" id="max"> 
                            <td colspan="5"> Total  facture</td>
                            <td colspan="2">
                                <input type="text" name="data[Mpreglement][ttpayer]" id="ttpayer" class="form-control"  value="0.000" readonly>
                            </td> 
                            </tr>
                            <tr>
                                <td colspan="3"> Remise</td>
                                <td colspan="2" style="padding-left: 30px">
                                    <table width='100%'>
                                        <tr> <td><label class="radio-inline" style="width: 100%! important">
                                                    <input type="radio" name="data[Mpreglement][typeremise]" id="typeremise" value="0" checked class="typeremises">
                                                    remise en dinar
                                                </label></td> </tr>
                                        <tr> <td> <label class="radio-inline" style="width: 100%! important">
                                                    <input type="radio" name="data[Mpreglement][typeremise]" id="typeremise1" value="1" class="typeremises">
                                                    Remise en pourcentage
                                                </label> </td> </tr>
                                    </table>

                                </td>
                                <td colspan="2">
                                    <input type="text" name="data[Mpreglement][remisec]" id="remisec" class="form-control remisetcs"  value="0.000">
                                    <input  name="data[Mpreglement][remise]" id="remise" class="form-control remiset"  value="0.000" type="hidden">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5"> Net à payer</td>
                                <td colspan="2">
                                    <input type="text" name="data[Mpreglement][netapayer]" id="netapayer" class="form-control netapayer"  value="0.000" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5">Montant a payer</td>
                                <td colspan="2">
                                    <input type="text" name="data[Mpreglement][Montant]" id="Montant" class="form-control"  value="0.000" readonly>
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
     echo $this->Form->input('paiement_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control modereglement  ','empty'=>'veuillez choisir','label'=>'','index'=>0,'champ'=>'paiement_id','table'=>'mppiecereglement','name'=>'data[mppiecereglement][0][paiement_id]') );   
   ?> </td>  
</tr>
<tr>
<td >Montant</td>  
<td  ><?php 
     echo $this->Form->input('montant',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control mnt','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'','index'=>0,'champ'=>'montant','table'=>'mppiecereglement','name'=>'data[mppiecereglement][0][montant]') );   
   ?> </td>  
</tr>
<!--                                        <tr>
<td >N° recu</td>  
<td  ><?php 
     echo $this->Form->input('num_recu',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control ','label'=>'','index'=>0,'champ'=>'num_recu','table'=>'mppiecereglement','name'=>'data[mppiecereglement][0][num_recu]') );   
   ?> </td>  
</tr>-->

<tr >
<td name="data[mppiecereglement][0][trechance]" id="" index="0"  champ="trechancea" table="mppiecereglement"  style="display:none" class="modecheque">Echéance</td>  
<td name="data[mppiecereglement][0][trechance]" id="" index="0"  champ="trechanceb" table="mppiecereglement"  style="display:none" class="modecheque"><?php 
     echo $this->Form->input('echance',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','label'=>'','type'=>'text','index'=>0,'champ'=>'echance','table'=>'mppiecereglement','name'=>'data[mppiecereglement][0][echance]') );   
   ?> </td>  
</tr>
<tr >
<td name="data[mppiecereglement][0][trnum]" id="" index="0"  champ="trnuma" table="mppiecereglement"  style="display:none" class="modecheque" >Numéro pièce</td>  
<td  name="data[mppiecereglement][0][trnum]" id="" index="0"  champ="trnumb" table="mppiecereglement"  style="display:none" class="modecheque"><?php 
     echo $this->Form->input('num_piece',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control ','label'=>'','type'=>'text','index'=>0,'champ'=>'num_piece','table'=>'mppiecereglement','name'=>'data[mppiecereglement][0][num_piece]') );   
   ?> </td>  
</tr>

<tr >
<td  id="" index="0"  champ="banque_ida" table="mppiecereglement"  style="display:none" class="modecheque" >Banque</td>  
<td   id="" index="0"  champ="banque_idb" table="mppiecereglement"  style="display:none" class="modecheque"><?php 
     echo $this->Form->input('banque_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control ','label'=>'','index'=>0,'champ'=>'banque_id','table'=>'mppiecereglement','name'=>'data[mppiecereglement][0][banque_id]','empty'=>'veuillez choisir') );   
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
     echo $this->Form->input('paiement_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control modereglement select  ','empty'=>'veuillez choisir','label'=>'','index'=>0,'id'=>'paiement_id0','champ'=>'paiement_id','table'=>'mppiecereglement','name'=>'data[mppiecereglement][0][paiement_id]') );   
   ?> </td>  
</tr>
<tr>
<td >Montant</td>  
<td  ><?php 
     echo $this->Form->input('montant',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control mnt','label'=>'','index'=>0,'champ'=>'montant','id'=>'montant0','table'=>'mppiecereglement','name'=>'data[mppiecereglement][0][montant]') );   
   ?> </td>  
</tr>
<!--                                            <tr>
<td >N° recu</td>  
<td  ><?php 
     echo $this->Form->input('num_recu',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control ','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'','index'=>0,'champ'=>'num_recu','table'=>'mppiecereglement','name'=>'data[mppiecereglement][0][num_recu]') );   
   ?> </td>  
</tr>-->

<tr >
<td name="data[mppiecereglement][0][trechance]" id="trechancea0" index="0"  champ="trechancea" table="mppiecereglement"  style="display:none" class="modecheque">Echéance</td>  
<td name="data[mppiecereglement][0][trechance]" id="trechanceb0" index="0"  champ="trechanceb" table="mppiecereglement"  style="display:none" class="modecheque"><?php 
     echo $this->Form->input('echance',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','label'=>'','type'=>'text','index'=>0,'champ'=>'echance','table'=>'mppiecereglement','name'=>'data[mppiecereglement][0][echance]') );   
   ?> </td>  
</tr>
<tr >
<td name="data[mppiecereglement][0][trnum]" id="trnuma0" index="0"  champ="trnuma" table="mppiecereglement"  style="display:none" class="modecheque" >Numéro pièce</td>  
<td  name="data[mppiecereglement][0][trnum]" id="trnumb0" index="0"  champ="trnumb" table="mppiecereglement"  style="display:none" class="modecheque"><?php 
     echo $this->Form->input('num_piece',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control ','label'=>'','type'=>'text','index'=>0,'champ'=>'num_piece','table'=>'mppiecereglement','name'=>'data[mppiecereglement][0][num_piece]') );   
   ?> </td>  
</tr>

<tr> 
<td  id="banque_ida0" index="0"  champ="banque_ida" table="mppiecereglement"  style="display:none" class="modecheque" >Banque</td>  
<td  id="banque_idb0" index="0"  champ="banque_idb" table="mppiecereglement"  style="display:none" class="modecheque"><?php 
     echo $this->Form->input('banque_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control ','label'=>'','index'=>0,'champ'=>'banque_id','table'=>'mppiecereglement','name'=>'data[mppiecereglement][0][banque_id]','empty'=>'veuillez choisir') );   
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
                        <button type="submit" class="btn btn-primary" id="mpreg">Enregistrer</button>
                    </div>
                </div>
                                     <?php } ?>
<?php echo $this->Form->end();?>
            </div>
        </div>
    </div>
</div>

