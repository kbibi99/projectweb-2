<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Commfournisseurs/index"/> <i class="fa fa-reply"></i> Retour </a>
    <input type="hidden" class="ipage" value="bc"/>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Ajout Commande'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Commfournisseur',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">  
                <input type="hidden" id="pag" value="comm" />
              	<?php
		echo $this->Form->input('fournisseur_id',array('empty'=>'Veuillez choisir','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control select mpfournissuer select','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$fournisseur_id) );
		echo $this->Form->input('date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text', 'required data-bv-notempty-message'=>'Champ Obligatoire') );
                echo $this->Form->input('Date_liv',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text', 'required data-bv-notempty-message'=>'Champ Obligatoire') );
                echo $this->Form->input('Type',array('empty'=>'Veuillez choisir','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?></div><div class="col-md-6"><?php
		echo $this->Form->input('numero',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','type'=>'text', 'required data-bv-notempty-message'=>'Champ Obligatoire', 'value'=> $mm,'readonly') );
                echo $this->Form->input('Adr_liv',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','type'=>'text', 'required data-bv-notempty-message'=>'Champ Obligatoire') );
                echo $this->Form->input('Ref',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','type'=>'text', 'required data-bv-notempty-message'=>'Champ Obligatoire') );
		//echo $this->Form->input('bl_id',array('div'=>'form-group', 'label' => 'Bon de Livraison', 'between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?>
  </div>             
                                    
                                    <br>
                                    

                                    
                                    
                       <br>                              
                                    
     <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Ligne de commande</h3>
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
            
            <tr>
              <td><?php echo $this->Form->input('matierepremiere_id',array('name' => 'data[lignecommfournisseurs][0][matierepremiere_id]','id' => 'matierepremiere_id0', 'table'=>'lignecommfournisseurs','champ'=>'matierepremiere_id','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control recuprix select','empty'=>'Veuillez choisir')); ?></td>
              <td><?php echo $this->Form->input('Prix',array('name'=>'data[lignecommfournisseurs][0][Prix]','id'=>'Prix0','table'=>'lignecommfournisseurs','index'=>'0','champ'=>'Prix','label'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calcligne') );?></td>
              <td><?php echo $this->Form->input('Qte',array('name'=>'data[lignecommfournisseurs][0][Qte]','id'=>'Qte0','table'=>'lignecommfournisseurs','index'=>'0','champ'=>'Qte','label'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calcligne ') ); ?></td>
              <td><?php echo $this->Form->input('Total_HT',array('type'=>'text','name'=>'data[lignecommfournisseurs][0][Total_HT]','id'=>'Total_HT0','table'=>'lignecommfournisseurs','index'=>'0','champ'=>'Total_HT','label'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control calcligne') ); ?></td>
              <td><i index="0"  class="fa fa-times supgff" style="color: #c9302c;font-size: 22px;"></td>
           </tr>
                                            
      </tbody>
    </table>
                 
                 
                <input type="hidden" class="index" id="index" value="0"/>
                <input type="hidden" class="page" value="vente" />
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

