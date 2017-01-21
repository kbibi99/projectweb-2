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
                                    <h3 class="panel-title"><?php echo __('Ajout Entrée PR'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Entreepr',array('autocomplete' => 'off','class'=>'form-horizontal ls_form')); ?>

            <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('fournisseur_id',array('empty'=>'Veuillez choisir','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('numero',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$mm) );
	?></div><div class="col-md-6"><?php
		echo $this->Form->input('date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('deposit_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'Dépôt','empty'=>'Veuillez choisir') );
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
                                    display: none;
                                    "> <i class="fa fa-plus-circle"  ></i>Ajouter ligne</a>
                            </div>
                            <div class="panel-body"> 
                                <div class="tab-content tab-border"> 
                                    <div class="tab-pane fadein active" id="famille">
                                        <input type="hidden" value="0" class="index" id="index">
                                        <table class="table" id="table" style="width: 100%">
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
                                                        <input id="sel_ind" class="sel_ind" value="0" style="display: none" />
                                                        <div id="divart0" index="0" champ='divart' table="">
                                                            <select  name="data[Lignepre][0][matierepremiere_id]" table="Lignepre" champ="matierepremiere_id" index="0" class="cal_prix mati rmv"  id="matierepremiere_id0"  tabindex="0" onchange="cal_prix(0, 0)" > 
                                                            </select> 
                                                        </div> 
                                                    </td>  
                                                    <td style="border: 1px solid #ddd !important;">
                                                        <input  name="data[Lignepre][0][qte]" table="Lignepre" champ="qte" index="0" class="form-control cal_prix rmv" id="qte0"/>
                                                    </td>
                                                    <td style="border: 1px solid #ddd !important;">
                                                        <input  name="data[Lignepre][0][Num_lot]" table="Lignepre" champ="Num_lot" index="0" class="form-control" id="Num_lot0"/>
                                                    </td>
                                                    <td style="border: 1px solid #ddd !important;"> 
                                                        <input  name="data[Lignepre][0][ttc]" table="Lignepre" champ="ttc" index="0" class="form-control cal_prix rmv" id="ttc0"/>
                                                    </td>
                                                    <td style="border: 1px solid #ddd !important;">
                                                        <div  table="Lignepre" champ="total" index="0" id="total0"  class="total">0 </div>
                                                    </td>
                                                    <td style="border: 1px solid #ddd !important;">
                                                        <i index="0"  class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"/> 
                                                            <input  name="data[Lignepre][0][sup]" table="Lignepre" champ="sup" index="0" class="form-control cal_prix" id="sup0"  style="display: none"/>
                                                    </td>
                                                </tr> 
                                            </tbody>  
                                            <tfoot>
                                                <tr>
                                                    <td colspan="2" ></td>  
                                                    <td>Somme Total:</td>
                                                    <td ><div class="somme">0</div></td>
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

