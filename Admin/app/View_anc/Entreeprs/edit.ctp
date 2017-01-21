<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Entreeprs/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<input type="hidden" class="nompage" value="Entreepr"/>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Modification Entrée PR'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Entreepr',array('autocomplete' => 'off','class'=>'form-horizontal ls_form')); ?>

            <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('fournisseur_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('numero',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?></div><div class="col-md-6"><?php
		echo $this->Form->input('date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('deposit_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?>
  </div>             <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Pièces de rechange</h3>
                                <a  class="btn btn-danger ajouterligne" table="table" index="index" tr="type"  style="
                                    float: right; 
                                    position: relative;
                                    top: -25px; 
                                    "> <i class="fa fa-plus-circle"  ></i>Ajouter ligne</a>
                            </div>
<div class="panel-body"> 
    <div class="tab-content tab-border"> 
        <div class="tab-pane fadein active" id="famille">
          
            <table class="table nolabel" id="table" style="width: 100%">
                <thead>
                    <tr class='typee'>
                        <td style="border: 1px solid #ddd !important;" align="center" style="width: 35%">Nom</td>  
                        <td style="border: 1px solid #ddd !important;" align="center" style="width: 10%">Qte Piéce</td>
                        <td style="border: 1px solid #ddd !important;" align="center" style="width: 10%">Numero Lot</td>
                        <td style="border: 1px solid #ddd !important;" align="center" style="width: 10%">Prix</td>
                        <td style="border: 1px solid #ddd !important;" align="center" style="width: 10%">Prix total</td>
                        <td style="border: 1px solid #ddd !important;" align="center" style="width: 1%"></td>
                    </tr>
                </thead>
                <tbody>

                    <tr  class="type" style="display: none" >
<td style="border: 1px solid #ddd !important;">
    <input id="sel_ind" class="sel_ind" value="-1" style="display: none" />
    <?php
         echo $this->Form->input('id',array('label' => '','id' => 'id-1', 'name' => 'data[Lignepre][-1][id]','table'=>'Lignepre','champ'=>'id','index'=>-1,'value'=>0, 'hidden'));
          ?>
    <div id="divart-1" index="-1" champ='divart' table="">
        <?php 
        echo $this->Form->input('matierepremiere_id',array('label' => '','id' => 'matierepremiere_id-1', 'name' => 'data[Lignepre][-1][matierepremiere_id]','table'=>'Lignepre','champ'=>'matierepremiere_id','index'=>-1,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control uniform_select cal_prix mati','empty'=>'Veuillez choisir','onchange'=>'cal_prix(-1,-1)'));
        ?> 
    </div> 
</td>  
<td style="border: 1px solid #ddd !important;">
    <input  name="data[Lignepre][-1][qte]" table="Lignepre" champ="qte" index="-1" class="form-control cal_prix rmv" id="qte-1"/>
</td>
<td style="border: 1px solid #ddd !important;">
    <input  name="data[Lignepre][-1][Num_lot]" table="Lignepre" champ="Num_lot" index="-1" class="form-control" id="Num_lot-1"/>
</td>
<td style="border: 1px solid #ddd !important;"> 
    <input  name="data[Lignepre][-1][ttc]" table="Lignepre" champ="ttc" index="-1" class="form-control cal_prix rmv" id="ttc-1"/>
</td>
<td style="border: 1px solid #ddd !important;">
    <div  table="Lignepre" champ="total" index="-1" id="total-1"  class="total">0 </div>
</td>
<td style="border: 1px solid #ddd !important;">
    <i index="-1"  class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"/> 
    <input  name="data[Lignepre][-1][sup]" table="Lignepre" champ="sup" index="-1" class="form-control" id="sup-1" style="display: none" />
        
</td>
</tr> 
  <?php 
  //debug($this->request->data); die;
  $somme=0;
    foreach ($this->request->data['Lignepre'] as $key=>$var_ligne){ 
         
     $id=$var_ligne['id'];
     $matierepremiere_id=$var_ligne['matierepremiere_id']; 
     $qte=$var_ligne['qte'];
     $Num_lot=$var_ligne['Num_lot'];
     //debug($Num_lot); die;
     $ttc=$var_ligne['ttc']; 
   ?>
<tr class="cc" >
<td style="border: 1px solid #ddd !important;">
    
    <?php 
        echo $this->Form->input('id',array('label' => '','id' => 'id'.$key, 'name' => 'data[Lignepre]['.$key.'][id]','table'=>'Lignepre','champ'=>'id','index'=>$key,'value'=>$id, 'hidden'));
    ?> 
    <div id="divart<?php echo $key; ?>" index="<?php echo $key; ?>" champ='divart' table="">
        <?php
        echo $this->Form->input('matierepremiere_id',array('label' => '','id' => 'matierepremiere_id'.$key, 'name' => 'data[Lignepre]['.$key.'][matierepremiere_id]','table'=>'Lignepre','champ'=>'matierepremiere_id','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','empty'=>'Veuillez choisir','value'=>$matierepremiere_id,'onchange'=>'cal_prix('.$this->request->data["Entreepr"]["fournisseur_id"].','.$key.')'));
        ?> 
        
    </div> 
</td>  
<td style="border: 1px solid #ddd !important;">
    <input  name="data[Lignepre][<?php echo $key; ?>][qte]" table="Lignepre" champ="qte" index="<?php echo $key; ?>" class="form-control cal_prix rmv" id="qte<?php echo $key; ?>"  value="<?php echo $this->request->data["Lignepre"][$key]["qte"] ; ?>"/>
</td>
<td style="border: 1px solid #ddd !important;">
    <input  name="data[Lignepre][<?php echo $key; ?>][Num_lot]" table="Lignepre" champ="Num_lot" index="<?php echo $key; ?>" class="form-control" id="Num_lot<?php echo $key; ?>"  value="<?php echo $this->request->data["Lignepre"][$key]["Num_lot"] ; ?>"/>
</td>
<td style="border: 1px solid #ddd !important;"> 
    <input  name="data[Lignepre][<?php echo $key; ?>][ttc]" table="Lignepre" champ="ttc" index="<?php echo $key; ?>" class="form-control cal_prix rmv" id="ttc<?php echo $key; ?>"  value="<?php echo $this->request->data["Lignepre"][$key]["ttc"] ; ?>"/>
</td>
<td style="border: 1px solid #ddd !important;">
    <div  table="Lignepre" champ="total" index="<?php echo $key; ?>" id="total<?php echo $key; ?>"  class="total"><?php 
    $total=$this->request->data["Lignepre"][$key]["qte"]*$this->request->data["Lignepre"][$key]["ttc"] ;
    echo $total;
    $somme+=$total;
    ?> </div>
</td>
<td style="border: 1px solid #ddd !important;">
        <input  name="data[Lignepre][<?php echo $key; ?>][sup]" table="Lignepre" champ="sup" index="<?php echo $key; ?>" class="form-control cal_prix rmv" id="sup<?php echo $key; ?>" style="display: none" />
    <i index="<?php echo $key; ?>"  class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"/> 
</td>
                                                </tr> 
                                                 <?php } ?>  
</tbody>  
                     <input type="hidden" value="<?php echo @$key; ?>" class="index" id="index">
<tfoot>
<tr>
<td colspan="2" ></td>  
<td>Somme Total:</td>
<td ><div class="somme"><?php echo $somme; ?></div></td>
<td></td>
                    </tr>
                </tfoot>
            </table>



        </div></div></div></div></div> </div>  
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

