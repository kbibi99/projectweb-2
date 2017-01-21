<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Sortieprs/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div> 
</div>
<br>
<div class="row" >
    <input type="hidden" class="nompage" value="Sortiepr"/>
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Modification Sorti PR'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Sortiepr',array('autocomplete' => 'off','class'=>'form-horizontal ls_form')); ?>

            <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('numero',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('deposit_id',array('label'=>'Dépôt','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','disabled'=>"disabled") );
		echo $this->Form->input('deposit_id',array('label'=>'Dépôt','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>"hidden",'value'=>$deposit_id) );
	?></div><div class="col-md-6"><?php
		echo $this->Form->input('date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?>
  </div>               
                                    <div class="row">
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
                        <td style="width: 35%;border: 1px solid #ddd !important;" align="center">Nom</td>  
                                                    <td style="border: 1px solid #ddd !important;" align="center" style="width: 20%">Stock Piéce</td> 
                        <td style="border: 1px solid #ddd !important;" align="center" style="width: 10%">Qte Piéce</td> 
                        <td style="border: 1px solid #ddd !important;" align="center" style="width: 1%"></td>
                    </tr>
                </thead>
                <tbody>

                    <tr  class="type" style="display: none" >
<td style="border: 1px solid #ddd !important;">
    <input id="sel_ind" class="sel_ind" value="-1" style="display: none" />
    <?php
         echo $this->Form->input('id',array('label' => '','id' => 'id-1', 'name' => 'data[Ligneprsorti][-1][id]','table'=>'Ligneprsorti','champ'=>'id','index'=>-1,'value'=>0, 'hidden'));
          ?>
    <div id="divart-1" index="-1" champ='divart' table="">
        <?php 
        echo $this->Form->input('matierepremiere_id',array('label' => '','id' => 'matierepremiere_id-1', 'name' => 'data[Ligneprsorti][-1][matierepremiere_id]','table'=>'Ligneprsorti','champ'=>'matierepremiere_id','index'=>-1,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control uniform_select cal_prix mati rmv aff_stk','empty'=>'Veuillez choisir'));
        ?> 
    </div> 
</td>  
<td style="border: 1px solid #ddd !important;">
    <input   table="Ligneprsorti" champ="stkqte" index="-1" class="form-control cal_prix rmv" id="stkqte-1" value="0" readonly/>
</td>
<td style="border: 1px solid #ddd !important;">
    <input  name="data[Ligneprsorti][-1][qte]" table="Ligneprsorti" champ="qte" index="-1" class="form-control cal_prix rmv test_stock" id="qte-1"/>
</td>  
<td style="border: 1px solid #ddd !important;">
    <i index="-1"  class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"/> 
    <input  name="data[Ligneprsorti][-1][sup]" table="Ligneprsorti" champ="sup" index="-1" class="form-control rmv" id="sup-1" style="display: none" />
        
</td>
</tr> 
  <?php  
    foreach ($this->request->data['Ligneprsorti'] as $key=>$var_ligne){ 
       // debug($Lclient); die; 
     $id=$var_ligne['id'];
     $matierepremiere_id=$var_ligne['matierepremiere_id']; 
     $qte=$var_ligne['qte']; 
   ?>
<tr class="cc" >
<td style="border: 1px solid #ddd !important;"> 
    <?php 
        echo $this->Form->input('id',array('label' => '','id' => 'id'.$key, 'name' => 'data[Ligneprsorti]['.$key.'][id]','table'=>'Ligneprsorti','champ'=>'id','index'=>$key,'value'=>$id, 'hidden'));
    ?> 
    <div id="divart<?php echo $key; ?>" index="<?php echo $key; ?>" champ='divart' table="">
        <?php
        echo $this->Form->input('matierepremiere_id',array('label' => '','id' => 'matierepremiere_id'.$key, 'name' => 'data[Ligneprsorti]['.$key.'][matierepremiere_id]','table'=>'Ligneprsorti','champ'=>'matierepremiere_id','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control rmv aff_stk','empty'=>'Veuillez choisir','value'=>$matierepremiere_id));
        ?> 
        
    </div> 
</td>  
<td style="border: 1px solid #ddd !important;">
    <input   table="Ligneprsorti" champ="stkqte" index="<?php echo $key; ?>" class="form-control cal_prix rmv" id="stkqte<?php echo $key; ?>" value="<?php echo $stocks[$matierepremiere_id]['qte']; ?>" readonly/>
</td>
<td style="border: 1px solid #ddd !important;">
    <input  name="data[Ligneprsorti][<?php echo $key; ?>][qte]" table="Ligneprsorti" champ="qte" index="<?php echo $key; ?>" class="form-control cal_prix rmv test_stock" id="qte<?php echo $key; ?>"  value="<?php echo $this->request->data["Ligneprsorti"][$key]["qte"] ; ?>"/>
</td>  
<td style="border: 1px solid #ddd !important;">
        <input  name="data[Ligneprsorti][<?php echo $key; ?>][sup]" table="Ligneprsorti" champ="sup" index="<?php echo $key; ?>" class="form-control cal_prix rmv" id="sup<?php echo $key; ?>" style="display: none" />
    <i index="<?php echo $key; ?>"  class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"/> 
</td>
                                                </tr> 
                                                 <?php } ?>  
</tbody>  
                     <input type="hidden" value="<?php echo @$key; ?>" class="index" id="index">
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

