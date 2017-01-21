<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Lots/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>

</div>
<br>
<div class="row" >
    <div class="col-md-12" >
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo __('Ajout Lot à la base d\'une facture '); ?></h3>
            </div>
            <div class="panel-body">
        <?php echo $this->Form->create('Lot',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

                <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type' => 'text') );
		echo $this->Form->input('numero',array('div'=>'form-group','type' => 'text','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control') );
		
	?></div><div class="col-md-6"><?php
        echo $this->Form->input('deposit_id',array( 'label' => 'Dépôt','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
//		echo $this->Form->input('bill_id',array( 'label' => 'Facture','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
//		echo $this->Form->input('bl_id',array( 'label' => 'Bon de Livraison','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?>
                </div>  


                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Matiéres premières</h3>
                            </div>
                            <div class="panel-body">



                                <div class="tab-content tab-border">

                                      <?php  $n=0; ?>

                                    <div class="tab-pane fadein active" id="famille">
                                        <table class="table" id="table" style="width: 100%">
                                            <thead>
                                                <tr>
                                                    <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 35%">Nom</td>
                                                    <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 15%">Référence</td>
                                                    <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 25%">Qte Piéce</td>
                                                    <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 25%">Qte Paquet</td>
                                                </tr>
                                            </thead>
                                            <tbody>

                                       <?php  foreach ($data as $key =>$value ) { ?>
                                                <tr>
                                                    <td style="border: 1px solid #ddd !important;"><?php echo $value['designation']?>
                                                        <input type="hidden"  id="<?php echo $key?>id<?php echo $value['id']?>" name="data[Lignelot][<?php echo $n; ?>][matierepremiere_id]"   value="<?php echo $value['id']?>"  ></td>
                                                    <td style="border: 1px solid #ddd !important;"><?php echo $value['code']?></td>
                                                    <td style="border: 1px solid #ddd !important;"><input type="text" class="form-control quantite"  id ="qte_inventory" name="data[Lignelot][<?php echo $n; ?>][qte_piece]" index="qte_piece" readonly="true" value="<?php echo $value['qte_piece']?>"  ></td>
                                                    <td style="border: 1px solid #ddd !important;"><input type="text" class="form-control quantite"  id ="qte_inventory" name="data[Lignelot][<?php echo $n; ?>][qte_pqt]" index="qte_pqt"></td>
                                                    

                                                </tr>

                                                <?php $n++; ?>
                                              <?php } ?>
                                            </tbody>  
                                        </table>

                                    </div>

                                </div></div></div></div></div>







                <div class="form-group">
                    <div class="col-lg-9 col-lg-offset-3">
                        <button type="submit" class="btn btn-primary" id="submitLot">Enregistrer</button>
                    </div>
                </div>
            </div>
<?php echo $this->Form->end();?>
        </div>
    </div>
</div>
</div>

