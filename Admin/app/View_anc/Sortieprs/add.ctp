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
                                    <h3 class="panel-title"><?php echo __('Ajout Sortie PR'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Sortiepr',array('autocomplete' => 'off','class'=>'form-horizontal ls_form')); ?>

            <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('numero',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$mm) );
		echo $this->Form->input('deposit_id',array('label'=>'Dépôt','empty'=>'Veuillez choisir' ,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$deposit_id) );
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
                                        <input type="hidden" value="0" class="index" id="index">
                                        <table class="table nolabel" id="table" style="width: 100%">
                                            <thead>
                                                <tr class='typee'>
                                                    <td style="width: 35%;border: 1px solid #ddd !important;" align="center" >Nom</td>  
                                                    <td style="border: 1px solid #ddd !important;" align="center" style="width: 20%">Stock Piéce</td> 
                                                    <td style="border: 1px solid #ddd !important;" align="center" style="width: 10%">Qte Piéce</td> 
                                                    <td style="border: 1px solid #ddd !important;" align="center" style="width: 1%"></td>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr  class="type" style="display: none" >
<td style="border: 1px solid #ddd !important;">
    <input id="sel_ind" class="sel_ind" value="0" style="display: none" />
    <div id="divart0" index="0" champ='divart' table="">   
	<?php	
                echo $this->Form->input('matierepremiere_id', array('label' => '', 'id' => 'matierepremiere_id0', 'name' => 'data[Ligneprsorti][0][matierepremiere_id]','table'=>'Ligneprsorti','champ'=>'matierepremiere_id','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control uniform_select  rmv aff_stk','empty'=>'Veuillez choisir') );
        ?>
        </select> 
    </div> 
</td>  
<td style="border: 1px solid #ddd !important;">
    <input   table="Ligneprsorti" champ="stkqte" index="0" class="form-control cal_prix rmv" id="stkqte0" value="0" readonly/>
</td>
<td style="border: 1px solid #ddd !important;">
    <input  name="data[Ligneprsorti][0][qte]" table="Ligneprsorti" champ="qte" index="0" class="form-control cal_prix rmv test_stock" id="qte0"/>
</td>
<td style="border: 1px solid #ddd !important;">
    <i index="0"  class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"/> 
        <input  name="data[Ligneprsorti][0][sup]" table="Ligneprsorti" champ="sup" index="0" class="form-control cal_prix rmv" id="sup0"  style="display: none"/>
</td>
                                                </tr> 
                                            </tbody>  
                                            
                                        </table> 
                                    </div></div></div></div></div> </div>
<?php if($deposit_id){ ?>                                    
<div class="form-group">
                                            <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                        </div>
<?php }
echo $this->Form->end();?>
</div>
                            </div>
                        </div>
</div>

