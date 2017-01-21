<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Bonsorties/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>

</div>
<br>
<div class="row" >
    <div class="col-md-12" >
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo __('Modidication Bon de sortie'); ?></h3>
            </div>
            <div class="panel-body">
        <?php echo $this->Form->create('Bonsorty',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

                <div class="col-md-6">                  
              	<?php 
                $this->request->data['Bonsorty']['date']=date("d/m/Y",strtotime(str_replace('-','/',$this->request->data['Bonsorty']['date'])));
		echo $this->Form->input('id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('demande_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('numero',array('type' => 'text','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control') );
	?></div><div class="col-md-6"><?php
		echo $this->Form->input('utilisateur_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('lot_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
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
                                        <?php $n2 = 0;  ?>
                                    <div class="tab-pane fadein active" id="famille">
                                        <table class="table" id="table" style="width: 100%">
                                            <thead>
                                                <tr>
                                                    <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 35%">Nom</td>
                                                    <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 15%">Référence</td>
                                                    <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 25%">Qte Piéce Demandée</td>
                                                    <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 25%">Lots</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                        <?php $m=""; $w=0;
                                        foreach ($new as $key =>$value ) { 
                                            $s=0;
                                            ?>


                                                <tr>
                                                    <td style="border: 1px solid #ddd !important;"><?php echo $value['designation']?></td>
                                                    <td style="border: 1px solid #ddd !important;"><?php echo $value['code']?></td>
                                                    <td style="border: 1px solid #ddd !important;"><input type="text" class="form-control quantite"  id ="qte_inventory"  value="<?php echo $value['qte_piece'] ?>" readonly="true"></td>
                                                    <td>















                                                        <div class="col-md-12" >
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading"> 
                                                                    <h3 class="panel-title"><?php echo __('Lot(s)'); ?></h3>  
                                                                    <a class="btn btn-danger lot" id="lot_<?php echo $n?>" ligne="<?php echo $key?>"  style="
                                                                       float: right; 
                                                                       position: relative;
                                                                       top: -25px;
                                                                       " 
                                                                       > <i class="fa fa-plus-circle"></i>Ajouter ligne</a>
                                                                </div> 

                                                                <div class="panel-body">
                                                                    <table border="1" style="border-color: #ddd !important;"  id="tablot_<?php echo $n;?>" width="100%">
                                                                        <tr class="tr" style="display:none;">
                                                                            <td  width="98%" style="padding-top: 15px;">


                                                                                <div class="col-md-6">       

              	<?php
                
                echo $this->Form->input('matierepremiere_id',array('name'=>'','id'=>'' ,'champ'=>'matierepremiere_id','table'=>'Lignesorty','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control', 'type' => 'hidden', 'value' => $value['id'] ) );
//                echo $this->Form->input('ligne',array('name'=>'','id'=>'' ,'champ'=>'lignesorty_id','table'=>'Lignesorty','index'=>'','ligne' => '','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control', 'type' => 'hidden' ) );
                echo $this->Form->input('sup',array('name'=>'','id'=>'','champ'=>'sup','table'=>'Lignesorty','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','type'=>'hidden','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('lot_id',array('name'=>'','id'=>'','champ'=>'lot_id','table'=>'Lignesorty','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control uniforme-select lot_id','label'=>'Lot','empty'=>'veuillez choisir') );
		echo $this->Form->input('qte_pqt',array('label' => 'Qte Paquet','name'=>''  ,'id'=>'' ,'champ'=>'qte_pqt','table'=>'Lignesorty','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control qte_pqt') );
		?></div><div class="col-md-6" ><?php
		echo $this->Form->input('qte_piece',array('label' => 'Qte Piéce','name'=>'','id'=>'' ,'champ'=>'qte_piece','table'=>'Lignesorty','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control qte_piece') );
		
             ?>



                                                                                </div>  
                                                                            </td>
                                                                            <td  width="2%"><i index="" class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"></i></td>
                                                                        </tr>  
                                                                    <?php 
                                                                   
                                                                    foreach($value['lignesorty_id'] as $k => $v){ 
                                                                        
                                                                        if($m!=$key){
                                                                            $m=$key;
                                                                        }
                                                                        ?>
                                                                        <tr>
                                                                            <td  width="98%" style="padding-top: 15px;">
                                                                                <div class="col-md-6">  
                                                                                    <?php

                                                                                        echo $this->Form->input('matierepremiere_id',array('name'=>'data[Lignesorty]['.$w.'][matierepremiere_id]','id'=>'' ,'ligne'=>$key ,'index'=>$s ,'champ'=>'matierepremiere_id','table'=>'Lignesorty','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control', 'type' => 'hidden', 'value' => $value['id'] ) );
                                                                                        echo $this->Form->input('lignesorty_id',array('name'=>'data[Lignesorty]['.$w.'][lignesorty_id]','id'=>'' ,'champ'=>'lignesorty_id','table'=>'Lignesorty','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control', 'type' => 'hidden', 'value' => $v['id'] ) );
                                                                                        echo $this->Form->input('sup',array('name'=>'data[Lignesorty]['.$w.'][sup]','id'=>'','champ'=>'sup','table'=>'Lignesorty','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','type'=>'hidden','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','value' => '' ) );
                                                                                        echo $this->Form->input('lot_id',array('name'=>'data[Lignesorty]['.$w.'][lot_id]','id'=>$key.'lot_id'.$s,'ligne'=>$key ,'index'=>$s ,'champ'=>'lot_id','table'=>'Lignesorty','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control uniforme-select lot_id','label'=>'Lot','empty'=>'veuillez choisir', 'value' => $v['lot_id']) );
                                                                                        echo $this->Form->input('qte_pqt',array('label' => 'Qte Paquet','name'=>'data[Lignesorty]['.$w.'][qte_pqt]'  ,'id'=>'' ,'champ'=>'qte_pqt','table'=>'Lignesorty','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control qte_pqt', 'value' => $v['qte_pqt']) );
                                                                                        ?></div><div class="col-md-6" ><?php
                                                                                        echo $this->Form->input('qte_piece',array('label' => 'Qte Piéce','name'=>'data[Lignesorty]['.$w.'][qte_piece]','id'=>'' ,'champ'=>'qte_piece','table'=>'Lignesorty','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control qte_piece', 'value' => $v['qte_piece']) );

                                                                                     ?>
                                                                                </div>
                                                                            </td>
                                                                            <td  width="2%"><i index="" class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"></i></td>
                                                                        </tr>
                                                                        

                                                                    <?php $s++;$w++;  } ?>
                                                                   <input type="hidden" id="index<?php echo $key;?>" value="<?php echo $s-1;?>"><input type="hidden" id="ligne<?php echo $key;?>" value="<?php echo $key;?>">
                                                                    </table>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
















                                                    </td>
                                                </tr>

                                                <?php   $n++; ?>
                                              <?php } ?>
                                            </tbody>  
                                        </table>
                                        <input type="hidden" id="indexx" value="<?php echo $w-1;?>">
                                    </div>

                                </div></div></div></div></div>

                <div class="form-group">
                    <div class="col-lg-9 col-lg-offset-3">
                        <button type="submit" class="btn btn-primary" id="submitsortie">Enregistrer</button>
                    </div>
                </div>
<?php echo $this->Form->end();?>
            </div>
        </div>
    </div>


</div>


