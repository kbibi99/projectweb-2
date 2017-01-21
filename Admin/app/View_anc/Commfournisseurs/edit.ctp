<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>commfournisseurs/index"/> <i class="fa fa-reply"></i> Retour </a>
        <input type="hidden" class="ipage" value="bc"/>
    </div>

</div>
<br>
<div class="row" >
    <div class="col-md-12" >
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo __('Modification Commande fournisseur'); ?></h3>
            </div>
            <div class="panel-body">
        <?php echo $this->Form->create('Commfournisseur',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

                <div class="col-md-6">                  
              	<?php //debug($this->request->data['Commfournisseur']['Date']);die;
                $date2 = explode('-', $this->request->data['Commfournisseur']['Date']);
                $new_date1 = $date2[2] . '/' . $date2[1] . '/' . $date2[0];
                
                $date3 = explode('-', $this->request->data['Commfournisseur']['Date_liv']);
                $new_date4 = $date3[2] . '/' . $date3[1] . '/' . $date3[0];
		echo $this->Form->input('id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('fournisseur_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control select','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$this->request->data['Commfournisseur']['fournisseur_id'],'disabled'=>"disabled") );
		echo $this->Form->input('date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly', 'type'=>'text','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$new_date1) );
                echo $this->Form->input('Date_liv',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly', 'type'=>'text','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$new_date4) );
                echo $this->Form->input('Type',array('empty'=>'Veuillez choisir','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$this->request->data['Commfournisseur']['Type']) );
	?></div><div class="col-md-6"><?php
		echo $this->Form->input('numero',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$this->request->data['Commfournisseur']['Numero'],'type'=>'text') );
                echo $this->Form->input('Adr_liv',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$this->request->data['Commfournisseur']['Adr_liv'],'type'=>'text') );
                echo $this->Form->input('Ref',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$this->request->data['Commfournisseur']['Ref'],'type'=>'text') );
		//echo $this->Form->input('bl_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?>
                </div>          
                <br>                              

                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Ligne de commande</h3>
                            <a class="btn btn-danger ajouterligne" table='table' index='index' tr='type'  style="
                               float: right; 
                               position: relative;
                               top: -25px;
                               "> <i class="fa fa-plus-circle"  ></i>Ajouter ligne</a>

                        </div>
                        <div class="panel-body">
                            <!--Table Wrapper Start-->
                            <div class="table-responsive ls-table">
                                <table id="table" class="table nolabel" >
                                    <thead>
                                        <tr >
                                            <td width="50%">Matiére premiére</td>
                                                <td width="15%">Prix</td> 
                                                <td width="15%">Qte</td>
                                                <td width="19%">Total </td>
                                                <td width="1%"></td> 
                                        </tr>
                                    </thead>

           <tbody>
               <tr class='type'  style="display: none !important"> 
                    <td><?php echo $this->Form->input('matierepremiere_id',array('name' =>'','id'=>'','table'=>'lignecommfournisseurs','champ'=>'matierepremiere_id','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control uniform_select recuprix  ','empty'=>'Veuillez choisir')); ?></td>
                    <td><?php echo $this->Form->input('Prix',array('name'=>'','id'=>'','table'=>'lignecommfournisseurs','index'=>'','champ'=>'Prix','label'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calcligne') );?></td>
                    <td><?php echo $this->Form->input('Qte',array('name'=>'','id'=>'','table'=>'lignecommfournisseurs','index'=>'','champ'=>'Qte','label'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calcligne') ); ?></td>
                    <td><?php echo $this->Form->input('Total_HT',array('type'=>'text','name'=>'','id'=>'','table'=>'lignecommfournisseurs','index'=>'','champ'=>'Total_HT','label'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calcligne ') ); ?></td>
                    <td><i index="0"  class="fa fa-times supgff" style="color: #c9302c;font-size: 22px;"></td>
               </tr>

                 <?php  //debug($this->request->data['Lignecommfournisseur']);die;
                      foreach($this->request->data['Lignecommfournisseur'] as $i => $lc){
                       // debug($lc);die;   
                        ?>
               
               <tr>
                    <td><?php echo $this->Form->input('matierepremiere_id',array('value'=>$lc['mpfournisseur_id'],'name' => 'data[lignecommfournisseurs]['.$i.'][matierepremiere_id]','id' => 'matierepremiere_id'.$i, 'table'=>'lignecommfournisseurs','champ'=>'matierepremiere_id','index'=>$i,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control recuprix select','empty'=>'Veuillez choisir')); ?></td>
                    <td><?php echo $this->Form->input('Prix',array('value'=>$lc['Prix'],'name'=>'data[lignecommfournisseurs]['.$i.'][Prix]','id'=>'Prix'.$i,'table'=>'lignecommfournisseurs','index'=>$i,'champ'=>'Prix','label'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calcligne ') );?></td>
                    <td><?php echo $this->Form->input('Qte',array('value'=>$lc['Qte'],'name'=>'data[lignecommfournisseurs]['.$i.'][Qte]','id'=>'Qte'.$i,'table'=>'lignecommfournisseurs','index'=>$i,'champ'=>'Qte','label'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calcligne ') ); ?></td>
                    <td><?php echo $this->Form->input('Total_HT',array('type'=>'text','value'=>$lc['Total_HT'],'name'=>'data[lignecommfournisseurs]['.$i.'][Total_HT]','id'=>'Total_HT'.$i,'table'=>'lignecommfournisseurs','index'=>$i,'champ'=>'Total_HT','label'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calcligne ') ); ?></td>
                    <td><i index="<?php echo $i; ?>"  class="fa fa-times supgff" style="color: #c9302c;font-size: 22px;"></td>
              </tr>
               
                
                        <?php } ?>

                                    
      </tbody> 
                                </table>
                                <input type="hidden" class="index" id="index" value="<?php echo $i; ?>"/>
                                <input type="hidden" class="page" value="<?php echo $i; ?>" />
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

