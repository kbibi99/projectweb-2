<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>livfournisseurs/index"/> <i class="fa fa-reply"></i> Retour </a>
    <input type="hidden" class="ipage" value="bc"/>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Modification Bons de Livraison'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Livfournisseur',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php //debug($this->request->data['Livfournisseur']['Date']);die;
                $date2 = explode('-', $this->request->data['Livfournisseur']['Date']);
                $new_date1 = $date2[2] . '/' . $date2[1] . '/' . $date2[0];
		echo $this->Form->input('id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('fournisseur_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$this->request->data['Livfournisseur']['fournisseur_id'],'disabled'=>"disabled") );
		echo $this->Form->input('date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly', 'type'=>'text','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$new_date1) );
	?></div><div class="col-md-6"><?php
		echo $this->Form->input('numero',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$this->request->data['Livfournisseur']['Numero'],'type'=>'text') );
		//echo $this->Form->input('bl_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?>
  </div>          
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
                
            </div>
            <div class="panel-body">
                <!--Table Wrapper Start-->
                <div class="table-responsive ls-table">
                    <table id="table nolabel" class="table" >
                        <thead>
                        <tr >
                            <td   align="center">Matiére premiére</td>
                            <td   align="center">Qté</td>
<td   align="center" width="12%">Prix</td>
                                              
                                               <td   align="center" width="12%">TVA</td>
                                                <td   align="center" width="12%">Remise</td>
                                               <td   align="center" width="12%">THT</td>
                            <td></td> 
                    </tr>
                        </thead>

                        <tbody>
                          <tr class='type'  style="display: none !important"> 
                                                <td align="center" > <?php 
               // echo $this->Form->input('sup',array('name'=>'','id'=>'','champ'=>'sup','table'=>'lignelivfournisseurs','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','type'=>'hidden','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'') );
                echo $this->Form->input('matierepremiere_id',array( 'name' => 'data[lignelivfournisseurs][0][matierepremiere_id]','table'=>'lignelivfournisseurs','champ'=>'matierepremiere_id','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10 adrcli">','after'=>'</div>','class'=>'form-control calculefacfournisseur_id selectized','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir')); ?></td>
                                               <td > <?php echo $this->Form->input('Qte',array('label'=>'', 'name' => 'data[lignelivfournisseurs][0][Qte]','table'=>'lignelivfournisseurs','champ'=>'Qte','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calculefacfournisseur' ) ); ?></td>
                                                <td > <input type="text" class="form-control calculefacfournisseur" champ="prix" table="lignelivfournisseurs" index="0">
                                                </td> 
                                                <td ><input type="text" class="form-control calculefacfournisseur"  champ="tva" table="lignelivfournisseurs" index="0"> </td> 
                                                <td ><input type="text" class="form-control calculefacfournisseur"  champ="remise" table="lignelivfournisseurs" index="0"> </td> 
                                                <td><input type="text" class="form-control calculefacfournisseur"  champ="Total_HT" table="lignelivfournisseurs" index="0"></td>
                                                <td ><i index="0"  class="fa fa-times supgff" style="color: #c9302c;font-size: 22px;"></td>
                                            </tr>
                        
                        <?php  //debug($this->request->data['Lignelivfournisseur']);die;
                        foreach($this->request->data['Lignelivfournisseur'] as $i => $lc){
                          //  debug($lc);die;
                            ?>

                         <tr >
                                                
                                                <td align="center"> <?php 
               // echo $this->Form->input('sup',array('name'=>'data[lignelivfournisseurs][0][sup]','id'=>'sup0','champ'=>'sup','table'=>'lignelivfournisseurs','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','type'=>'hidden','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'Nom') );
                echo $this->Form->input('matierepremiere_id',array('label' => '','id' => 'calculefacfournisseur_id'.$i, 'name' => 'data[lignelivfournisseurs]['.$i.'][matierepremiere_id]','table'=>'lignelivfournisseurs','champ'=>'matierepremiere_id','index'=>$i,'div'=>'form-group','between'=>'<div class="col-sm-10 adrcli">','after'=>'</div>','class'=>'form-control calculefacfournisseur_id select','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir','value'=>$lc['mpfournisseur_id'])); ?></td>
                                               <td > <?php echo $this->Form->input('Qte',array('id' => 'Qte'.$i,'label'=>'', 'name' => 'data[lignelivfournisseurs]['.$i.'][Qte]','table'=>'lignelivfournisseurs','champ'=>'Qte','index'=>$i,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calculefacfournisseur','value'=>$lc['Qte'] ) ); ?></td>
                                                <td > <input type="text" class="form-control calculefacfournisseur" name="data[lignelivfournisseurs][<?php echo $i; ?>][prix]" id="prix<?php echo $i; ?>" champ="prix" table="lignelivfournisseurs" index="0" value="<?php echo $lc['Prix'] ?>">
                                                </td> 
                                                   <td ><input type="text" class="form-control calculefacfournisseur" name="data[lignelivfournisseurs][<?php echo $i; ?>][tva]" id="tva<?php echo $i; ?>" champ="tva" table="lignelivfournisseurs" index="<?php echo $i; ?>" value="<?php echo $lc['Tva'] ?>"> </td> 
                                                    <td ><input type="text" class="form-control calculefacfournisseur" name="data[lignelivfournisseurs][<?php echo $i; ?>][remise]" id="remise<?php echo $i; ?>" champ="remise" table="lignelivfournisseurs" index="<?php echo $i; ?>" value="<?php echo $lc['Remise'] ?>"> </td> 
                                                    <td><input type="text" class="form-control calculefacfournisseur" name="data[lignelivfournisseurs][<?php echo $i; ?>][Total_HT]" id="Total_HT<?php echo $i; ?>" champ="Total_HT" table="lignelivfournisseurs" index="<?php echo $i; ?>" value="<?php echo $lc['Total_HT'] ?>"></td>
                                                    <td ><i index="<?php echo $i; ?>"  class="fa fa-times supgff" style="color: #c9302c;font-size: 22px;"></td>
                                            </tr>
                        <?php } ?>

<input type="hidden" value="<?php echo $i; ?>" class="index" id="index">
                        </tbody>
                          <tfoot>
                                            <tr>
                                                <?php //debug($this->request->data);die; ?>
                                                <td colspan="3" align="lef">  </td>
                                                <td colspan="2" align="lef"> Total TVA </td>
                                                <td colspan="2"> <input type="text" class="form-control" id="tva" name="data[Livfournisseur][tva]" value="<?php echo $this->request->data['Livfournisseur']['Tva']; ?>"> </td>
                                            </tr>
                                           <tr>
                                                <td colspan="3" align="lef">  </td>
                                                <td colspan="2" align="lef"> Total remise </td>
                                                <td colspan="2"> <input type="text" class="form-control" id="remise" name="data[Livfournisseur][Remise]" value="<?php echo $this->request->data['Livfournisseur']['Remise']; ?>"> </td>
                                            </tr>
                                           <tr>
                                                <td colspan="3" align="lef">   </td>
                                                <td colspan="2" align="lef"> Total HT </td>
                                                <td colspan="2"> <input type="text" class="form-control" id="Total_HT" name="data[Livfournisseur][Total_HT]" value="<?php echo $this->request->data['Livfournisseur']['Total_HT']; ?>"> </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" align="lef">  </td>
                                                <td colspan="2" align="lef"> Timbre </td>
                                                <td colspan="2"> <input type="hidden" class="form-control" id="timbre_id" name="data[Livfournisseur][timbre_id]" value="<?php echo $timbre_id; ?>"/>
                                                    <input type="text" class="form-control" id="timbre" name="data[Livfournisseur][timbre]" value="<?php echo $timbre; ?>"> </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" align="lef">   </td>
                                                <td colspan="2" align="lef"> Total TTC </td>
                                                <td colspan="2"> <input type="text" class="form-control" id="Total_TTC" name="data[Livfournisseur][Total_TTC]" value="<?php echo $this->request->data['Livfournisseur']['Total_TTC']; ?>" ></td>
                                            </tr>
                                            <tr >
                                                <td colspan="3" style="display:none">  </td>
                                                <td colspan="2" style="display:none"> Total fodec </td>
                                                <td colspan="2" style="display:none"> <input type="text" class="form-control" id="fodec" name="data[Livfournisseur][fodec]" value="<?php echo $this->request->data['Livfournisseur']['fodec']; ?>"> </td>
                                            </tr>
                                            </tfoot>
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

