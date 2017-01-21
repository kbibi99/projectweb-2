<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Bcs/index"/> <i class="fa fa-reply"></i> Retour </a>
    <input type="hidden" class="ipage" value="bc"/>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Ajout bon de commande'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Bc',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('fournisseur_id',array('empty'=>'Veuillez choisir','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text', 'required data-bv-notempty-message'=>'Champ Obligatoire') );
	?></div><div class="col-md-6"><?php
		echo $this->Form->input('numero',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','type'=>'text', 'required data-bv-notempty-message'=>'Champ Obligatoire', 'value'=> $mm,'readonly') );
		echo $this->Form->input('bl_id',array('div'=>'form-group', 'label' => 'Bon de Livraison', 'between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?>
  </div>             
                                    
                                    <br>
                                    

                                    
                                    
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
                                    <input type="hidden" value="0" class="index" id="index">
                                </div>
                                <div class="panel-body">
                                    <!--Table Wrapper Start-->
                                    <div class="table-responsive ls-table" id="deleteLabel">
                                        <table id="table" class="table" >
                                            <thead>
                                            <tr >
                                                <td   align="center">Matiére premiére</td>
                                                <td   align="center">Qté</td>
                                               
                                                <td></td> 
                                        </tr>
                                            </thead>
                                                  
                                            <tbody>
                                                <tr class='type'  style="display: none !important"> 
                                                <td align="center" > <?php 
                echo $this->Form->input('sup',array('name'=>'','id'=>'','champ'=>'sup','table'=>'Lc','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','type'=>'hidden','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'') );
                echo $this->Form->input('matierepremiere_id', array('label' => '', 'id' => 'matierepremiere_id', 'name' => 'data[Lc][0][matierepremiere_id]','table'=>'Lc','champ'=>'matierepremiere_id','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10 adrcli">','after'=>'</div>','class'=>'form-control uniform_select ','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') ); ?></td>
                                                <td align="center"> <?php echo $this->Form->input('qte_piece',array('id' => 'qte_piece', 'name' => 'data[Lc][0][qte_piece]','table'=>'Lc','champ'=>'qte_piece','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') ); ?></td> 
                                                <td align="center"><i index=""  class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"></td>
                                            </tr>
                                            <tr >
                                                
                                                <td align="center"> <?php 
                echo $this->Form->input('sup',array('name'=>'data[Lc][0][sup]','id'=>'sup0','champ'=>'sup','table'=>'Lc','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','type'=>'hidden','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'Nom') );
                echo $this->Form->input('matierepremiere_id',array('label' => '','id' => 'matierepremiere_id', 'name' => 'data[Lc][0][matierepremiere_id]','table'=>'Lc','champ'=>'matierepremiere_id','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10 adrcli">','after'=>'</div>','class'=>'form-control','label'=>'Matiére premiére','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir')); ?></td>
                                                <td align="center"> <?php echo $this->Form->input('qte_piece',array('id' => 'qte_piece', 'name' => 'data[Lc][0][qte_piece]','table'=>'Lc','champ'=>'qte_piece','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control' ) ); ?></td> 
                                                <td align="center"><i index="0"  class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"></td>
                                            </tr>

                                           
                                           
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

