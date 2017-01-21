<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Inventaires/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Ajout Inventaire'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Inventaire',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">   
              	<?php
              //   debug($this->request->data); die;
		echo $this->Form->input('num',array('div'=>'form-group','label'=>'Numéro','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','value'=> $mm,'readonly') );
		echo $this->Form->input('depot_id',array('div'=>'form-group','label'=>'Dépôt','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control select ','empty'=>'veuillez choisir','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?></div><div class="col-md-6"><?php
		echo $this->Form->input('Date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text','required data-bv-notempty-message'=>'Champ Obligatoire') );
                echo $this->Form->input('marque_id',array('div'=>'form-group','label'=>'Marque','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control marqueinv select','empty'=>'veuillez choisir','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$id_marque) );
//		echo $this->Form->input('utilisateur_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?>
  </div>       
                                    <?php if($id_marque) {?>
        <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Articles</h3>
                                </div>
                                <div class="panel-body">
                                    
                                        <ul class="nav nav-tabs icon-tab">
                                            <?php
                                            foreach ($familles as $key =>$value ) { ?>
<!--                                            <li><a href="#famille<?php echo $key; ?>" title=""><?=$value['Famille']['name']?></a></li>-->
                                            <li <?php if($key==0){?>class="active"<?php }?>><a href="#famille<?php echo $key; ?>" data-toggle="tab"><span><?=$value['Famille']['name']?></span></a></li>
                                            <?php } ?> 
                                        </ul>

                                        <div class="tab-content tab-border">

                                      <?php  $n=0;
                                       foreach ($familles as $key =>$value ) { ?>
                                            <div class="tab-pane fade <?php if($key==0){?>in active<?php }?>" id="famille<?php echo $key; ?>">
                                                   <table class="table" id="table<?php echo $key; ?>" style="width: 100%">
                                            <thead>
                                            <tr>
                                                <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 35%">Nom</td>
                                                <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 15%">Référence</td>
                                                <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 25%">Qte Paquet</td>
                                                <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 25%">Qte</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                               
                                                <?php 
                                                
                                                foreach ($value['Article'] as $key1 =>$value1 ) {
//debug($value1);die;?>
                                                 <tr>
                                                <td style="border: 1px solid #ddd !important;"><?php echo $value1['name']?>
                                                    <input type="hidden"  id="<?php echo $key?>id<?php echo $key1?>" name="data[Ligneinventaire][<?php echo $n; ?>][article_id]"  fam="<?php echo $key?>" lig="<?php echo $key1?>" value="<?php echo $value1['id']?>"  ></td>
                                                <td style="border: 1px solid #ddd !important;"><?php echo $value1['reference']?></td>
                                                <td style="border: 1px solid #ddd !important;"><input type="text" class="form-control paq" id="<?php echo $key?>paq<?php echo $key1?>" name="data[Ligneinventaire][<?php echo $n; ?>][paquet]" index="paq" fam="<?php echo $key?>" lig="<?php echo $key1?>"   ></td>
                                                <td style="border: 1px solid #ddd !important;"><input type="text" class="form-control qte" id="<?php echo $key?>qte<?php echo $key1?>" name="data[Ligneinventaire][<?php echo $n; ?>][qte]" index="qte" fam="<?php echo $key?>" lig="<?php echo $key1?>"></td>
                                            </tr>
                                                    
                                                <?php $n++; }?>
                                            
                                            </tbody>  
                                              </table>
                                               
                                            </div>
                                      <?php } ?>
                                        </div></div></div></div></div>
                                    
                      
                                    
 
                                    
                                    
                                    
<div class="form-group">
                                            <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" id="inventaire_id" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                        </div>
                                    <?php }?>
                                 </div>
<?php echo $this->Form->end();?>
</div>
                            </div>
                        </div>
</div>

