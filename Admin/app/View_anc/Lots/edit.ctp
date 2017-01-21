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
                                    <h3 class="panel-title"><?php echo __('Modidication Lot'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Lot',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('numero',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		
	?></div><div class="col-md-6"><?php
        echo $this->Form->input('deposit_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
//		echo $this->Form->input('bill_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
//		echo $this->Form->input('bl_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
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

                                      <?php  $n=0;
                                           ?>
                                            <div class="tab-pane fade in active" id="famille">
                                                   <table class="table" id="table" style="width: 100%">
                                            <thead>
                                            <tr>
                                                <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 35%">Nom</td>
                                                <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 15%">Référence</td>
                                                <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 25%">Qte Paquet</td>
                                                <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 25%">Qte Piéce</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                               
                                                 <?php 
//                                                print'<pre>'; print_r($matierepremieres);die;
                                                foreach ($lines as $key1 =>$value1 ) {
//                                                    print'<pre>'; print_r($lines);die;
                                              
                                                    
//                                                    echo'<pre>'; print_r($value1) ;die;
                                                    ?>

                                                  
                                <tr>
                                    <td style="border: 1px solid #ddd !important;"><?php echo $matierepremieres[$n]['Matierepremiere']['designation']?>
                                        <input type="hidden"  id="<?php echo $n;?>id<?php echo $key1?>" name="data[Lignelot][<?php echo $n; ?>][matierepremieres_id]"  fam="<?php echo $n?>" lig="<?php echo $key1?>" value="<?php echo $matierepremieres[$n]['Matierepremiere']['id']?>"  ></td>
                                        <input type="hidden"  id="<?php echo $n;?>id<?php echo $key1?>" name="data[Lignelot][<?php echo $n; ?>][id]"  fam="<?php echo $n?>" lig="<?php echo $key1?>" value="<?php echo $matierepremieres[$n]['Matierepremiere']['id']?>"  ></td>
                                    <td style="border: 1px solid #ddd !important;"><?php echo $matierepremieres[$n]['Matierepremiere']['code']?></td>
                                    
                                    <td style="border: 1px solid #ddd !important;"><input type="text" class="form-control quantite" id="qte_inventory" name="data[Lignelot][<?php echo $n; ?>][qte_pqt]" index="quantite" value="<?php echo $value1['Lignelot']['qte_pqt'] ;?>"></td>
                                    <td style="border: 1px solid #ddd !important;"><input type="text" class="form-control quantite"  name="data[Lignelot][<?php echo $n; ?>][qte_piece]" index="quantite" value="<?php echo $value1['Lignelot']['qte_piece'] ;?>"></td>
                                </tr>

                                                <?php $n++; }?>
                                            
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

