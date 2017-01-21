<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Livfournisseurs/index"/> <i class="fa fa-reply"></i> Retour </a>
    <input type="hidden" class="ipage" value="bc"/>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Ajout bon de Livraison'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Livfournisseur',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
                                    <input type="hidden" id="pag" value="liv" />
              	<?php
		echo $this->Form->input('fournisseur_id',array('empty'=>'Veuillez choisir','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control select mpfournissuer','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$fournisseur_id) );
		echo $this->Form->input('date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text', 'required data-bv-notempty-message'=>'Champ Obligatoire') );
	?></div><div class="col-md-6"><?php
		echo $this->Form->input('numero',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','type'=>'text', 'required data-bv-notempty-message'=>'Champ Obligatoire', 'value'=> $mm) );
		//echo $this->Form->input('bl_id',array('div'=>'form-group', 'label' => 'Bon de Livraison', 'between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?>
  </div>             
                                    
                                    <br>
                                    

                                    
                                    
                       <br>                              
                                    
     <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Ligne de Livraison</h3>
                                    <a class="btn btn-danger ajouterligne2" table='table' index='index' tr='type'  style="
                                    float: right; 
                                    position: relative;
                                    top: -25px;
                                "> <i class="fa fa-plus-circle"  ></i>Ajouter ligne</a>
                                    <input type="hidden" value="0" class="index" id="index">
                                </div>
                                <div class="panel-body">
                                    <!--Table Wrapper Start-->
                                    <div class="table-responsive ls-table" id="deleteLabel">
                                        <table id="table" class="table nolabel" >
                                            <thead>
                                            <tr >
                                                <td   align="center">Matiére premiére</td>
                                                <td   align="center">Qté</td>
                                               <td   align="center" width="12%">Prix</td>
                                               <td   align="center" width="12%">TVA</td>
                                               <td   align="center" width="12%">Remise</td>
                                               <td   align="center" width="12%">THT</td>
                                                <td width="3%"></td> 
                                        </tr>
                                            </thead>
                                                  
                                            <tbody>
                                                <tr class='type'  style="display: none !important"> 
                                                <td align="center" > <?php 
               // echo $this->Form->input('sup',array('name'=>'','id'=>'','champ'=>'sup','table'=>'lignelivfournisseurs','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','type'=>'hidden','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'') );
                echo $this->Form->input('matierepremiere_id',array('label' => '', 'name' => 'data[lignelivfournisseurs][0][matierepremiere_id]','table'=>'lignelivfournisseurs','champ'=>'matierepremiere_id','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10 adrcli">','after'=>'</div>','class'=>'form-control calculefacfournisseur_id','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir')); ?></td>
                                               <td > <?php echo $this->Form->input('Qte',array('label'=>'', 'name' => 'data[lignelivfournisseurs][0][Qte]','table'=>'lignelivfournisseurs','champ'=>'Qte','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calculefacfournisseur' ) ); ?></td>
                                                <td > <input type="text" class="form-control calculefacfournisseur" champ="prix" table="lignelivfournisseurs" index="0">
                                                </td> 
                                                <td ><input type="text" class="form-control calculefacfournisseur"  champ="tva" table="lignelivfournisseurs" index="0"> </td> 
                                                <td ><input type="text" class="form-control calculefacfournisseur"  champ="remise" table="lignelivfournisseurs" index="0"> </td> 
                                                <td><input type="text" class="form-control calculefacfournisseur"  champ="Total_HT" table="lignelivfournisseurs" index="0"></td>
                                                <td ><i index="0"  class="fa fa-times supgff" style="color: #c9302c;font-size: 22px;"></td>
                                            </tr>
                                            <tr >
                                                
                                                <td align="center"> <?php 
               // echo $this->Form->input('sup',array('name'=>'data[lignelivfournisseurs][0][sup]','id'=>'sup0','champ'=>'sup','table'=>'lignelivfournisseurs','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','type'=>'hidden','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'Nom') );
                echo $this->Form->input('matierepremiere_id',array('label' => '','id' => 'calculefacfournisseur_id0', 'name' => 'data[lignelivfournisseurs][0][matierepremiere_id]','table'=>'lignelivfournisseurs','champ'=>'matierepremiere_id','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10 adrcli">','after'=>'</div>','class'=>'form-control calculefacfournisseur_id','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir')); ?></td>
                                               <td > <?php echo $this->Form->input('Qte',array('id' => 'Qte0','label'=>'', 'name' => 'data[lignelivfournisseurs][0][Qte]','table'=>'lignelivfournisseurs','champ'=>'Qte','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calculefacfournisseur' ) ); ?></td>
                                                <td > <input type="text" class="form-control calculefacfournisseur" name="data[lignelivfournisseurs][0][prix]" id="prix0" champ="prix" table="lignelivfournisseurs" index="0">
                                                </td> 
                                                   <td ><input type="text" class="form-control calculefacfournisseur" name="data[lignelivfournisseurs][0][tva]" id="tva0" champ="tva" table="lignelivfournisseurs" index="0"> </td> 
                                                    <td ><input type="text" class="form-control calculefacfournisseur" name="data[lignelivfournisseurs][0][remise]" id="remise0" champ="remise" table="lignelivfournisseurs" index="0"> </td> 
                                                    <td><input type="text" class="form-control calculefacfournisseur" name="data[lignelivfournisseurs][0][Total_HT]" id="Total_HT0" champ="Total_HT" table="lignelivfournisseurs" index="0"></td>
                                                    <td ><i index="0"  class="fa fa-times supgff" style="color: #c9302c;font-size: 22px;"></td>
                                            </tr>
                                            <tfoot>
                                            <tr>
                                                <td colspan="3" align="right"> </td>
                                                <td colspan="2" align="lef"> Total TVA </td>
                                                <td colspan="2"> <input type="text" class="form-control" id="tva" name="data[Livfournisseur][tva]"> </td>
                                            </tr>
                                           <tr>
                                                <td colspan="3" align="lef">   </td>
                                                <td colspan="2" align="lef"> Total remise </td>
                                                <td colspan="2"> <input type="text" class="form-control" id="remise" name="data[Livfournisseur][Remise]"> </td>
                                            </tr>
                                           <tr>
                                                <td colspan="3" align="lef">  </td>
                                                <td colspan="2" align="lef"> Total HT </td>
                                                <td colspan="2"> <input type="text" class="form-control" id="Total_HT" name="data[Livfournisseur][Total_HT]"> </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" align="lef">   </td>
                                                <td colspan="2" align="lef"> Timbre </td>
                                                <td colspan="2"> <input type="hidden" class="form-control" id="timbre_id" name="data[Livfournisseur][timbre_id]" value="<?php echo $timbre_id; ?>"/>
                                                    <input type="text" class="form-control" id="timbre" name="data[Livfournisseur][timbre]" value="<?php echo $timbre; ?>"> </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" align="lef">  </td>
                                                <td colspan="2" align="lef"> Total TTC </td>
                                                <td colspan="2"> <input type="text" class="form-control" id="Total_TTC" name="data[Livfournisseur][Total_TTC]" ></td>
                                            </tr>
                                            <tr >
                                                <td colspan="5" style="display:none"> Total fodec </td>
                                                <td colspan="2" style="display:none"> <input type="text" class="form-control" id="fodec" name="data[Livfournisseur][fodec]" </td>
                                            </tr>
                                            </tfoot>

                                           
                                           
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--Table Wrapper Finish-->
                                </div>
                            </div>
                        </div>
                                
                                    
            
                                    
                                    
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

